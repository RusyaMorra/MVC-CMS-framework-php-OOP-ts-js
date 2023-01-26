<?php

namespace App\Http\Middleware;

use App\Transaction;
use Closure;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class SetRegionMW
{
    const REGION_CIS = 'CIS'; // СНГ
    const REGION_EUROPE = 'EUROPE';
    const REGION_USA = 'USA';
    const REGION_TURKEY = 'TURKEY';
    const REGION_UNKNOWN = 'UNKNOWN';

    const REGIONS = [
        self::REGION_CIS,
        self::REGION_EUROPE,
        self::REGION_USA,
        self::REGION_TURKEY,
        self::REGION_UNKNOWN
    ];

    public function getCountry($ip)
    {
        $ttl = 60 * 5;
        $countryKey = 'country_' . $ip;

        if (Cache::has($countryKey)) {
            return Cache::get($countryKey);
        }
        $country = $this->getCountryFromGeo($ip);
        Cache::put($countryKey, $country, $ttl);
        return $country;
    }

    private function getCountryFromGeo($ip)
    {
        $reader = new Reader(base_path('GeoLite2-Country.mmdb'));
        try {
            $record = $reader->country($ip);
            $country = $record->country->isoCode;
        }
        catch (AddressNotFoundException $e) {
            $country = 'UNKNOWN';
        }

        return $country;
    }

    public static function getRegion($country): string
    {
        $countryRegionMap = [
            'AM' => self::REGION_CIS,    // Армения
            'AZ' => self::REGION_CIS,    // Азербайджан
            'BY' => self::REGION_CIS,    // Беларусь
            'GE' => self::REGION_CIS,    // Грузия
            'KG' => self::REGION_CIS,    // Кыргызстан
            'KZ' => self::REGION_CIS,    // Казахстан
            'MD' => self::REGION_EUROPE, // Молдова
            'RU' => self::REGION_CIS,    // Россия
            'TJ' => self::REGION_CIS,    // Таджикистан
            'TM' => self::REGION_CIS,    // Туркменистан
            'UA' => self::REGION_CIS,    // Украина
            'UZ' => self::REGION_CIS,    // Узбекистан
            'AD' => self::REGION_EUROPE, // Андорра
            'AL' => self::REGION_EUROPE, // Албания
            'AT' => self::REGION_EUROPE, // Австрия
            'BE' => self::REGION_EUROPE, // Бельгия
            'BG' => self::REGION_EUROPE, // Болгария
            'CH' => self::REGION_EUROPE, // Швейцария
            'CY' => self::REGION_EUROPE, // Кипр
            'CZ' => self::REGION_EUROPE, // Чехия
            'DE' => self::REGION_EUROPE, // Германия
            'DK' => self::REGION_EUROPE, // Дания
            'EE' => self::REGION_EUROPE, // Эстония
            'ES' => self::REGION_EUROPE, // Испания
            'FI' => self::REGION_EUROPE, // Финляндия
            'FR' => self::REGION_EUROPE, // Франция
            'GB' => self::REGION_EUROPE, // Великобритания
            'GR' => self::REGION_EUROPE, // Греция
            'HR' => self::REGION_EUROPE, // Хорватия
            'HU' => self::REGION_EUROPE, // Венгрия
            'IE' => self::REGION_EUROPE, // Ирландия
            'IS' => self::REGION_EUROPE, // Исландия
            'IT' => self::REGION_EUROPE, // Италия
            'LI' => self::REGION_EUROPE, // Лихтенштейн
            'LT' => self::REGION_EUROPE, // Литва
            'LU' => self::REGION_EUROPE, // Люксембург
            'LV' => self::REGION_EUROPE, // Латвия
            'MC' => self::REGION_EUROPE, // Монако
            'ME' => self::REGION_EUROPE, // Черногория
            'MK' => self::REGION_EUROPE, // Македония
            'MT' => self::REGION_EUROPE, // Мальта
            'NL' => self::REGION_EUROPE, // Нидерланды
            'NO' => self::REGION_EUROPE, // Норвегия
            'PL' => self::REGION_EUROPE, // Польша
            'PM' => self::REGION_EUROPE, // Сен-Пьер и Микелон
            'PT' => self::REGION_EUROPE, // Португалия
            'RO' => self::REGION_EUROPE, // Румыния
            'RS' => self::REGION_EUROPE, // Сербия
            'SE' => self::REGION_EUROPE, // Швеция
            'SI' => self::REGION_EUROPE, // Словения
            'SK' => self::REGION_EUROPE, // Словакия
            'SM' => self::REGION_EUROPE, // Сан-Марино
            'VA' => self::REGION_EUROPE, // Ватикан
            'TR' => self::REGION_TURKEY, // Турция
            'AU' => self::REGION_USA,    // Австралия
            'CA' => self::REGION_USA,    // Канада
            'NZ' => self::REGION_USA,    // Новая Зеландия
            'MX' => self::REGION_USA,    // Мексика
            'US' => self::REGION_USA,    // США
            'UNKNOWN' => self::REGION_UNKNOWN,
        ];

        return key_exists($country, $countryRegionMap)
            ? $countryRegionMap[$country]
            : self::REGION_UNKNOWN;
    }

    public static function getCurrency($region): string
    {
        $regionCurrencyMap = [
            self::REGION_CIS    => Transaction::CUR_RUB,
            self::REGION_EUROPE => Transaction::CUR_EUR,
            self::REGION_USA    => Transaction::CUR_USD,
            self::REGION_TURKEY => Transaction::CUR_USD,
            self::REGION_UNKNOWN => Transaction::CUR_USD,
        ];
        return key_exists($region, $regionCurrencyMap)
            ? $regionCurrencyMap[$region]
            : Transaction::CUR_USD;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $req
     * @param \Closure $next
     * @return mixed
     */
    public function handle($req, Closure $next)
    {
        // ip -> country -> region -> currency
        $ips = explode (",", $req->server('HTTP_X_FORWARDED_FOR'));
	    $proxy_list = trim ( reset ( $ips ) );
	    $real_ip = empty( $proxy_list ) ? null : $proxy_list;
        // $proxy_list = explode (",", $req->server('HTTP_X_FORWARDED_FOR'));
        // $real_ip = ( empty( $proxy_list ) ? null : ( trim ( reset ($proxy_list) ) ) );

        $req->ip_value = $req->ip_value ??
            $real_ip ??
            $req->ip();

        $req->country_value = $req->country_value ??
            $this->getCountry($req->ip_value);

        $req->region_value = $req->region_value ??
            self::getRegion($req->country_value);

        $req->currency_value = $req->currency_value ??
            self::getCurrency($req->region_value);

	   Log::channel('regions')->info(json_encode([
            $req->server('HTTP_X_FORWARDED_FOR'),
            $req->ips(),
            $req->ip_value,
            $req->country_value,
            $req->region_value,
            $req->currency_value
        ]));

        return $next($req);
    }
}

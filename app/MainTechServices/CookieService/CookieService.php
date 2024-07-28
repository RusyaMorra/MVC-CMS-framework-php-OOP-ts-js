<?php

namespace app\MainTechServices\CookieService;


class CookieService {

   
    protected static $_instance = null;

    /**
     * Singleton instance makes this redundant
     */
    protected function __construct(){}

  
    public static function getInstance()
    {
        if (self::$_instance == null)
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Send a cookie
     *
     * @param name string <p>
     * The name of the cookie.
     * </p>
     * @param value string[optional] <p>
     * The value of the cookie. This value is stored on the clients
     * computer; do not store sensitive information.
     * Assuming the name is 'cookiename', this
     * value is retrieved through $_COOKIE['cookiename']
     * </p>
     * @param expire int[optional] <p>
     * The time the cookie expires. This is a Unix timestamp so is
     * in number of seconds since the epoch. In other words, you'll
     * most likely set this with the time function
     * plus the number of seconds before you want it to expire. Or
     * you might use mktime.
     * time()+60*60*24*30 will set the cookie to
     * expire in 30 days. If set to 0, or omitted, the cookie will expire at
     * the end of the session (when the browser closes).
     * </p>
     * <p>
     * <p>
     * You may notice the expire parameter takes on a
     * Unix timestamp, as opposed to the date format Wdy, DD-Mon-YYYY
     * HH:MM:SS GMT, this is because PHP does this conversion
     * internally.
     * </p>
     * <p>
     * expire is compared to the client's time which can
     * differ from server's time.
     * </p>
     * </p>
     * @param path string[optional] <p>
     * The path on the server in which the cookie will be available on.
     * If set to '/', the cookie will be available
     * within the entire domain. If set to
     * '/foo/', the cookie will only be available
     * within the /foo/ directory and all
     * sub-directories such as /foo/bar/ of
     * domain. The default value is the
     * current directory that the cookie is being set in.
     * </p>
     * @param domain string[optional] <p>
     * The domain that the cookie is available.
     * To make the cookie available on all subdomains of example.com
     * then you'd set it to '.example.com'. The
     * . is not required but makes it compatible
     * with more browsers. Setting it to www.example.com
     * will make the cookie only available in the www
     * subdomain. Refer to tail matching in the
     * spec for details.
     * </p>
     * @param secure bool[optional] <p>
     * Indicates that the cookie should only be transmitted over a
     * secure HTTPS connection from the client. When set to true, the
     * cookie will only be set if a secure connection exists.
     * On the server-side, it's on the programmer to send this
     * kind of cookie only on secure connection (e.g. with respect to
     * $_SERVER["HTTPS"]).
     * </p>
     * @param httponly bool[optional] <p>
     * When true the cookie will be made accessible only through the HTTP
     * protocol. This means that the cookie won't be accessible by
     * scripting languages, such as JavaScript. This setting can effectively
     * help to reduce identity theft through XSS attacks (although it is
     * not supported by all browsers). Added in PHP 5.2.0.
     * true or false
     * </p>
     * @return bool If output exists prior to calling this function,
     * setcookie will fail and return false. If
     * setcookie successfully runs, it will return true.
     * This does not indicate whether the user accepted the cookie.
     */
    public function setCookie($name, $value = null, $expire = null, $path = null, $domain = null, $secure = null, $httponly = null)
    {
        $set = setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
        return $set;
    }

    /**
     * Retrieve a cookie by name
     * @param string $name
     * @return string|boolean false for failure
     */
    public function getCookie($name)
    {
        if (isset($_COOKIE) && is_array($_COOKIE) && array_key_exists($name, $_COOKIE))
        {
            return $_COOKIE[$name];
        }
        return false;
    }

    /**
     * Unset a cookie by name
     * @param string $name
     * @return boolean
     */
    public function unsetCookie($name)
    {
        if ($this->getCookie($name) != false)
        {
            setcookie($name, "", time() - 3600);
            return true;
        }
        return false;
    }

}
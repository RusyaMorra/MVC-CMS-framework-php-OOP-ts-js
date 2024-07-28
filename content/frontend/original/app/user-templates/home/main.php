<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<? echo APP_USER_PATH; ?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_USER_PATH; ?>assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_USER_PATH; ?>vendor/convas/convas-effects.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_USER_PATH; ?>vendor/slick-slider/slick.css">
  </head>
  <body class="App">
    <div class="background-spot" style="background-image: url('<? echo APP_USER_PATH; ?>assets/images/main-img/background/background-main.jpg');">
      <div class="overflow-for-context"><?php if($vars["viewMode"] == "HomePage"){ require APP_USER_PATH . '/user-templates/components/header.main.php';} ?>
        <div class="intro-area container-xxl row mx-auto">
          <div class="left-part-display h-100 col-6 d-flex justify-content-center align-items-start flex-column">
            <h1 class="intro-text">СОЗДАЁМ<br><span>ПРОДАЮЩИЕ</span><br>И  <span>ЭФФЕКТИВНЫЕ</span><br>САЙТЫ И ПО</h1>
            <h2 class="additional-text mt-3">Прадуктивно решаем задачи клиентов и<br>удиляем максимум внимание деталям</h2><a class="button-offer mt-3 w-50" href>Свяжитесь с нами</a>
          </div>
          <div class="rigth-part-display h-100 col-6 d-flex justify-content-center align-items-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RroDdybvu5s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <main class="second-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="text-area__second-display mb-5 mt-5">
          <p>Что мы делаем</p>
          <h1><span>Качественная Реализация </span>и Рабочии Решения</h1>
        </div>
        <div class="cards-area w-100 d-flex justify-content-center align-items-start flex-row flex-wrap">
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Сайты для Бизнеса</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Разработка ботов</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Написание скриптов</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Написание парсеров</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Создание многофункциональных веб-сервисов</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Разработка дизайна</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Продвижение</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Дополнительный набор услуг</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
          <div class="present-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/icon.png" alt>
            <h2 class="text-lg-right text-center mb-2">Сайты для Бизнеса</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много продаж, что бы зарабатывая на (любом контентном сайте) на интернет магазине, вести трафик через продающий лендинг, мы Вам с этим поможем!
              
            </p>
          </div>
        </div>
      </div>
    </main>
    <main class="third-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="text-area__third-display text-center w-100 mb-5 mt-5">
          <p>Как проходит разработка</p>
          <h1><span>Этапы которые</span> проходят наши проекты</h1>
        </div>
        <div class="cards-area w-100 d-flex justify-content-center align-items-start flex-row flex-wrap">
          <div class="stage-card-item text-center col-3 d-flex justify-content-center align-items-center flex-row"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/stages-icons/stage-icon.jpg" alt>
            <div class="stage-wrapper">
              <h2 class="text-lg-right text-center mb-2">Прототипы</h2>
              <p class="d-flex justify-content-center align-items-start">Разработка прототипа, всех экрано или наброски функционала</p>
            </div>
          </div>
          <div class="stage-card-item text-center col-3 d-flex justify-content-center align-items-center flex-row"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/stages-icons/design-icon.png" alt>
            <div class="stage-wrapper">
              <h2 class="text-lg-right text-center mb-2">Дизайн</h2>
              <p class="d-flex justify-content-center align-items-start">Разработка прототипа, всех экрано или наброски функционала</p>
            </div>
          </div>
          <div class="stage-card-item text-center col-3 d-flex justify-content-center align-items-center flex-row"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/stages-icons/ui-ux-icon.png" alt>
            <div class="stage-wrapper">
              <h2 class="text-lg-right text-center mb-2">UI/UX</h2>
              <p class="d-flex justify-content-center align-items-start">Разработка прототипа, всех экрано или наброски функционала</p>
            </div>
          </div>
          <div class="stage-card-item text-center col-3 d-flex justify-content-center align-items-center flex-row"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/stages-icons/backend-icon.png" alt>
            <div class="stage-wrapper">
              <h2 class="text-lg-right text-center mb-2">Бэкенд</h2>
              <p class="d-flex justify-content-center align-items-start">Разработка прототипа, всех экрано или наброски функционала</p>
            </div>
          </div>
          <div class="stage-card-item text-center col-3 d-flex justify-content-center align-items-center flex-row"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/stages-icons/tests-icon.png" alt>
            <div class="stage-wrapper">
              <h2 class="text-lg-right text-center mb-2">Тестирование и оптимизация</h2>
              <p class="d-flex justify-content-center align-items-start">Разработка прототипа, всех экрано или наброски функционала</p>
            </div>
          </div>
          <div class="stage-card-item text-center col-3 d-flex justify-content-center align-items-center flex-row"><img class="mb-1" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/stages-icons/docs-icon.jpg" alt>
            <div class="stage-wrapper">
              <h2 class="text-lg-right text-center mb-2">Документация и инструкции</h2>
              <p class="d-flex justify-content-center align-items-start">Разработка прототипа, всех экрано или наброски функционала</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <main class="forth-display" id="particles-js">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="text-area__forth-display text-center w-100 mb-5 mt-5">
          <p>Что мы разрабатывает</p>
          <h1 class="mb-4">Наши услуги</h1>
          <p class="second-p">Мы разрабатывает сайты различной сложности от простых одностраничников и интернет магазинов<br>до продвинутых веб-сервисов. Одно остаётся неизменным: качество нашей работы и внимание к деталям</p>
        </div>
        <div class="down-area w-100 d-flex justify-content-center align-items-center flex-row flex-nowrap">
          <div class="left-side-img"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/monitors.png" alt></div>
          <ul class="rigth-side-text">
            <li>Лендинги, сайт-визитки</li>
            <li>Корпоративные сайты</li>
            <li>Веб сервисы</li>
            <li>Интерен магазины</li>
            <li>Боты разной сложности</li>
            <li>Парсинг сайтов</li>
          </ul>
        </div>
      </div>
    </main>
    <main class="six-display" id="six-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="text-area__six-display text-center w-100 mb-5 mt-5">
          <h1 class="mb-4">Услуги и стоимость</h1>
        </div>
        <div class="cards-area w-100 d-flex justify-content-center align-items-start flex-row flex-wrap">
          <div class="prices-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column">
            <h2>Landing</h2>
            <p>Если вам нужен просто продающий сайт, без какой либо динамики то лендиг идеальный вариант</p>
            <ul>
              <li>Срок:<span>10-20 дней</span></li>
              <li>Стоимость:<span>От 25 000 руб</span></li>
              <li>Сопровождения:<span>От 5000 руб</span></li>
              <li>Продвижения: <span>От 30 000руб</span></li>
            </ul>
            <button class="button-offer pos-btn-price">Связаться с нами</button>
          </div>
          <div class="prices-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column">
            <h2>Landing</h2>
            <p>Если вам нужен просто продающий сайт, без какой либо динамики то лендиг идеальный вариант</p>
            <ul>
              <li>Срок:<span>10-20 дней</span></li>
              <li>Стоимость:<span>От 25 000 руб</span></li>
              <li>Сопровождения:<span>От 5000 руб</span></li>
              <li>Продвижения: <span>От 30 000руб</span></li>
            </ul>
            <button class="button-offer pos-btn-price">Связаться с нами</button>
          </div>
          <div class="prices-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column">
            <h2>Landing</h2>
            <p>Если вам нужен просто продающий сайт, без какой либо динамики то лендиг идеальный вариант</p>
            <ul>
              <li>Срок:<span>10-20 дней</span></li>
              <li>Стоимость:<span>От 25 000 руб</span></li>
              <li>Сопровождения:<span>От 5000 руб</span></li>
              <li>Продвижения: <span>От 30 000руб</span></li>
            </ul>
            <button class="button-offer pos-btn-price">Связаться с нами</button>
          </div>
          <div class="prices-card-item text-center col-3 d-flex justify-content-center align-items-center flex-column">
            <h2>Landing</h2>
            <p>Если вам нужен просто продающий сайт, без какой либо динамики то лендиг идеальный вариант</p>
            <ul>
              <li>Срок:<span>10-20 дней</span></li>
              <li>Стоимость:<span>От 25 000 руб</span></li>
              <li>Сопровождения:<span>От 5000 руб</span></li>
              <li>Продвижения: <span>От 30 000руб</span></li>
            </ul>
            <button class="button-offer pos-btn-price">Связаться с нами</button>
          </div>
        </div>
      </div>
    </main>
    <main class="seven-display" id="seven-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="upper-part__seven-display">
          <div class="text-area__seven-display text-center w-100 mb-5 d-flex justify-content-center align-items-center flex-column">
            <p class="mb-4">Что мы разрабатывает</p>
            <h1 class="mb-4">Наше портфолио</h1>
            <p class="second-p mt-3">Каждый сайт сайт создается командой профессионалов которые имею большой опыт в разработке ПО, дизайне, рекламе</p>
          </div>
          <div class="text-area__seven-display text-center w-100 mb-5 mt-5 d-flex justify-content-center align-items-center flex-column">
            <p class="second-p mb-5">Нравится один или несколько примеров ниже?<br>Свяжитесь с нами, и мы предложими вам экслюзивное решение</p>
            <button class="button-offer pos-btn-price2">Связаться с нами</button>
          </div>
        </div>
        <div class="down-area__seven-display w-100 d-flex justify-content-center align-items-center flex-row flex-nowrap">
          <div class="portfolio-item__slider-1"><img class="portfolio-item__img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/portfolio/portfolio_1.png" alt></div>
          <div class="portfolio-item__slider-1"><img class="portfolio-item__img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/portfolio/portfolio_1.png" alt></div>
          <div class="portfolio-item__slider-1"><img class="portfolio-item__img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/portfolio/portfolio_1.png" alt></div>
          <div class="portfolio-item__slider-1"><img class="portfolio-item__img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/portfolio/portfolio_1.png" alt></div>
          <div class="portfolio-item__slider-1"><img class="portfolio-item__img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/portfolio/portfolio_1.png" alt></div>
        </div>
      </div>
    </main>
    <main class="eight-display" id="eight-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="upper-part__eight-display mt-5">
          <h1 class="Title-upper-part__eight-display">Go to start</h1>
        </div>
        <div class="down-area__eight-display w-100 d-flex justify-content-center align-items-center flex-row flex-nowrap">
          <div class="text-area__eight-display text-center w-100 mb-5 mt-5 d-flex justify-content-center align-items-center flex-column">
            <p class="second-p mb-5">Давайте обсудим<br>ваш проект?</p>
            <div class="btn-wrapper__eight-display d-flex justify-content-center align-items-center flex-row">
              <button class="button-offer pos-btn-price2">Обсудить проект</button>
              <button class="button-offer pos-btn-price3">Скачать бриф</button>
            </div>
          </div>
          <div class="text-area__eight-display text-center w-100 mb-5 d-flex justify-content-center align-items-center flex-column"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/macbook.png" alt></div>
        </div>
      </div>
    </main>
    <main class="nine-display" id="nine-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-center flex-column">
        <div class="count-part__nine-display mt-5 mb-5 d-flex justify-content-between align-items-start flex-row">
          <div class="count-part-item d-flex justify-content-center align-items-center flex-row">
            <h2>95</h2>
            <p>Проектов в которых<br>мы участвовали</p>
          </div>
          <div class="count-part-item d-flex justify-content-center align-items-center flex-row">
            <h2>7</h2>
            <p>Человек<br>в команде</p>
          </div>
        </div>
        <div class="count-part__nine-display mt-5 mb-5 d-flex justify-content-between align-items-start flex-row">
          <div class="count-part-item d-flex justify-content-center align-items-center flex-row">
            <h2>45%</h2>
            <p>Повторных заказов</p>
          </div>
          <div class="count-part-item d-flex justify-content-center align-items-center flex-row">
            <h2>5</h2>
            <p>Лет создаем<br>сайты</p>
          </div>
        </div>
      </div>
    </main>
    <main class="ten-display" id="ten-display" style="background-image: url('<? echo APP_USER_PATH; ?>assets/images/main-img/background/backgrount-grid.png');">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="text-area__ten-display mb-5 mt-5">
          <!--  <p>Дополнительные услуги</p> -->
          <h1><span>Тут представленно </span>множество доп услуг для сайта</h1>
        </div>
        <div class="cards-area w-100 d-flex justify-content-center align-items-start flex-row flex-wrap">
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Поставить капчу на сайт</h2>
            <p class="d-flex justify-content-center align-items-start">
              Задача каждого бизнеса сделать много Поставим любую капчу на ваш сайт
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Оптимизация сайта на wp и другие</h2>
            <p class="d-flex justify-content-center align-items-start">
              Оптимизируем ваш сайт на wp или же любой другой cms или фреймворке
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Скопируем почти любой сайт(только фронт)</h2>
            <p class="d-flex justify-content-center align-items-start">
              С помощью парсера скопируем любой сайт который вам нужен
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Аудит сайта на ошибки</h2>
            <p class="d-flex justify-content-center align-items-start">
              Проанализируем ваш сайт на ошибки отталкиваясь от метрик и подготовим отчет
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Разработаем простой логотип не дорого для прототипа</h2>
            <p class="d-flex justify-content-center align-items-start">
              Разработаем простой логотип не дорого для прототипа
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Редизайн сайта</h2>
            <p class="d-flex justify-content-center align-items-start">
              Немного обновим дизайн вашего сайта
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Установим все необходимые плагины на wp</h2>
            <p class="d-flex justify-content-center align-items-start">
              Установим все необходимые плагины на wp
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Изментим формат изображений на сайте на webp</h2>
            <p class="d-flex justify-content-center align-items-start">
              Изментим формат изображений на сайте на webp
              
            </p>
          </div>
          <div class="edditional-card-item text-center col-3 d-flex justify-content-center align-items-start flex-column"><img class="mb-3" src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/additional-offer.png" alt>
            <h2 class="text-lg-right mb-2">Поставим сайт на хостинг или vps</h2>
            <p class="d-flex justify-content-center align-items-start">
              Поставим сайт на хостинг или vps
              
            </p>
          </div>
        </div>
      </div>
    </main>
    <main class="eleven-display" id="eleven-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="upper-part__eleven-display mt-5">
          <h1 class="Title-upper-part__eleven-display">О нас</h1>
        </div>
        <div class="down-area__eleven-display w-100 d-flex justify-content-between align-items-start flex-row flex-nowrap">
          <div class="text-area__eleven-display text-center d-flex justify-content-center align-items-center flex-column">
            <p><span>Мы не будем </span>говорить что мы самые лучшие, нам просто нравиться наша работа</p>
            <p><span>Не ждите </span>обещаний, что мы сделаем сайт под ключ за 2 дня. Посмотрите этапы создания проекта, и вы поймете, что нужно время.</p>
            <p><span>Technohub Solusion </span>компания современного формата. Работаем удаленно и не арендуем офисы, что очень ускоряет процесс создания сайта.</p>
            <p><span>Мы помним </span>о конфиденциальности, поэтому всегда настраиваем SSL протоколы и политику обработки персональных данных (№ 152-ФЗ).</p>
            <p><span>Как и вам</span> , нам важен финальный продукт. Важно показать высокий результат. И мы его показываем на протяжении 7 лет.</p>
          </div>
          <div class="right-items-explanes d-flex justify-content-center align-items-center flex-column">
            <div class="text-area__eleven-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori2.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__eleven-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori2.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__eleven-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori2.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__eleven-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori2.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__eleven-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori2.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__eleven-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori2.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__eleven-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori2.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <main class="twelve-display" id="twelve-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="upper-part__twelve-display mt-5">
          <h1 class="Title-upper-part__twelve-display">Our stack</h1>
        </div>
        <div class="down-area__twelve-display w-100 d-flex justify-content-around align-items-center flex-row flex-nowrap"><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt></div>
        <div class="down-area__twelve-display w-100 d-flex justify-content-around align-items-center flex-row flex-nowrap"><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt><img class="down-area__twelve-display-img" src="<? echo APP_USER_PATH; ?>assets/images/main-img/stack/react.png" alt></div>
      </div>
    </main>
    <main class="thirteen-display" id="thirteen-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="text-area__thirteen-display text-center w-100 mb-5 mt-5">
          <p>Часто задаваемые вопросы</p>
          <h1 class="mb-4">Вопросы и ответы</h1>
          <p class="second-p">Каждый сайт создается командой профессионалов, которые<br>имеют большой опыт в дизайне, рекламе и разработке.</p>
        </div>
        <div class="down-area__thirteen-display w-100 d-flex justify-content-between align-items-start flex-row flex-nowrap">
          <div class="left-items-explanes d-flex justify-content-center align-items-center flex-column">
            <div class="text-area__thirteen-display-left-inner d-flex justify-content-start align-items-center flex-column">
              <div>Есть ли какие-нибудь дополнительные платежи ?</div>
              <div>Есть ли какие-нибудь дополнительные платежи ?</div>
              <div>Есть ли какие-нибудь дополнительные платежи ?</div>
              <div>Есть ли какие-нибудь дополнительные платежи ?</div>
              <div>Есть ли какие-нибудь дополнительные платежи ?</div>
              <div>Есть ли какие-нибудь дополнительные платежи ?</div>
              <div>Есть ли какие-нибудь дополнительные платежи ?</div>
            </div>
          </div>
          <div class="text-area__thirteen-display text-center mt-5 d-flex justify-content-center align-items-center"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/monitors.png" alt></div>
        </div>
      </div>
    </main>
    <main class="fourteen-display" id="fourteen-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="upper-part__fourteen-display mt-5">
          <h1 class="Title-upper-part__fourteen-display">Какой пакет услуг включяет каждый<br>сайт который мы разрабатываем</h1>
        </div>
        <div class="down-area__fourteen-display w-100 d-flex justify-content-between align-items-start flex-row flex-nowrap">
          <div class="text-area__fourteen-display text-center d-flex justify-content-center align-items-center flex-column">
            <p><span>У каждого</span> продукта который мы делаем есть дополнительный пакет услуг</p>
            <button class="button-offer pos-btn-price3">Оставьте заявку</button>
          </div>
          <div class="fourteen-right-items-explanes d-flex justify-content-center align-items-center flex-column">
            <div class="text-area__fourteen-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Кроссбраузерность</h2>
                <p>это означяет что мы делаем так что бы ваш сайт смотрелся норм на всех браузерах</p>
              </div>
            </div>
            <div class="text-area__fourteen-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__fourteen-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__fourteen-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__fourteen-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__fourteen-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
            <div class="text-area__fourteen-display-rigth-inner text-center d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/icons/auditori.png" alt>
              <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
                <h2>1. Иследуем нишу</h2>
                <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <main class="fifteen-display" id="fifteen-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="down-area__fifteen-display w-100 d-flex justify-content-between align-items-center flex-row flex-nowrap">
          <div class="fifteen-left-items-explanes d-flex justify-content-center align-items-center">
            <div class="text-area__fifteen-display text-center w-100 mb-5 mt-5 d-flex justify-content-between align-items-start flex-column">
              <p>Часто задаваемые вопросы</p>
              <h1 class="mb-4">Создаем удобный дизайн, и разрабатываем различного рода ПО, такие как сайты, парсеры, мобильные приложения, декстоп</h1>
              <p class="second-p">Каждый сайт создается командой профессионалов, которые<br>имеют большой опыт в дизайне, рекламе и разработке.</p>
            </div>
          </div>
          <div class="text-area__fifteen-display text-center d-flex justify-content-center align-items-center">
            <form class="form-1 d-flex justify-content-center align-items-center flex-column" action>
              <h1>Ваша задача?</h1>
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
            </form>
          </div>
        </div>
      </div>
    </main>
    <main class="sixteen-display" id="sixteen-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="upper-part__sixteen-display mt-5">
          <h1 class="Title-upper-part__sixteen-display">Немного видео с ютуба</h1>
        </div>
        <div class="down-area__sixteen-display w-100 d-flex justify-content-between align-items-start flex-row flex-nowrap">
          <div class="text-area__sixteen-display text-center d-flex justify-content-center align-items-center flex-column">
            <div class="rigth-part-display w-100 h-100 col-6 d-flex justify-content-center align-items-center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/RroDdybvu5s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="sixteen-right-items-explanes d-flex justify-content-center align-items-center flex-column">
            <div class="rigth-part-display w-100 h-100 col-6 d-flex justify-content-center align-items-center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/RroDdybvu5s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </main>
    <main class="seventeen-display">
      <div class="container-xxl mx-auto d-flex justify-content-center align-items-start flex-column">
        <div class="text-area__seventeen-display text-center w-100 mb-5 mt-5">
          <p>Что мы разрабатывает</p>
          <h1 class="mb-4">Наши услуги</h1>
          <p class="second-p">Мы разрабатывает сайты различной сложности от простых одностраничников и интернет магазинов<br>до продвинутых веб-сервисов. Одно остаётся неизменным: качество нашей работы и внимание к деталям</p>
        </div>
        <div class="down-area-seventeen w-100 d-flex justify-content-center align-items-center flex-row flex-nowrap">
          <div class="blog-item d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/monitors.png" alt>
            <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
              <h2>Как поставить капчу на сайт</h2>
              <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p><a href>Читать подробнее...</a>
            </div>
          </div>
          <div class="blog-item d-flex justify-content-center align-items-center flex-row"><img src="<? echo APP_USER_PATH; ?>assets/images/main-img/monitors.png" alt>
            <div class="text-area__eleven-display-rigth-inner-text d-flex justify-content-center align-items-start flex-column">
              <h2>Как поставить капчу на сайт</h2>
              <p>Первым делом нужно изучить вашу нишу, целевую аудиторию и конкурентов</p><a href>Читать подробнее...</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div><?php if($vars["viewMode"] == "HomePage"){ require APP_USER_PATH . '/user-templates/components/footer.main.php';} ?></div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="<? echo APP_USER_PATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<? echo APP_USER_PATH; ?>vendor/convas/particles.js"></script>
    <script src="<? echo APP_USER_PATH; ?>vendor/convas/convas-effects.js"></script>
    <script src="<? echo APP_USER_PATH; ?>vendor/slick-slider/slick.min.js"></script>
    <script src="<? echo APP_USER_PATH; ?>assets/js/bandle.min.js"></script>
    <script>
      var count_particles, stats, update;
              stats = new Stats;
              stats.setMode(0);
              stats.domElement.style.position = 'absolute';
              stats.domElement.style.left = '0px';
              stats.domElement.style.top = '0px';
              document.body.appendChild(stats.domElement);
              count_particles = document.querySelector('.js-count-particles');
              update = function() {
              stats.begin();
              stats.end();
              if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                  count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
              }
              requestAnimationFrame(update);
              };
              requestAnimationFrame(update);
    </script>
  </body>
</html>
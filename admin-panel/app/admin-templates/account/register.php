<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<? echo APP_ADMIN_PANEL_PATH; ?>assets/css/style.min.css">
    <link rel="icon" type="image/png" href="<? echo APP_ADMIN_PANEL_PATH; ?>assets/images/icons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/daterangepicker/daterangepicker.css">
  </head>
  <link rel="stylesheet" href="<? echo APP_ADMIN_PANEL_PATH; ?>assets/css/register.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <body class="App">
    <header class="header"></header>
    <div class="limiter">
      <main class="container-login100">
        <div class="wrap-login100 p-t-90 p-b-30">
          <form class="login100-form validate-form" action="http://technohubdevelopment/register" method="POST"><span class="login100-form-title p-b-40">Регистрация</span><a class="btn-login-with bg1 m-b-10" href="#"><i class="fa fa-facebook-official"></i>Регистрация через фейсбук</a><a class="btn-login-with bg2" href="#"><i class="fa fa-twitter"></i>Регистрация через твиттер</a>
            <div class="text-center p-t-55 p-b-30"></div><span class="txt1">Регистрация через Email</span>
            <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz"></div>
            <input class="input100" type="text" name="email" placeholder="Email">
            <input class="input100" type="text" name="userName" placeholder="Имя пользователя">
            <input class="input100" type="text" name="number" placeholder="+7(xxx)-xxx-xxxx"><span class="btn-show-pass"><i class="fa fa fa-eye"></i></span>
            <input class="input100" type="password" name="pass" placeholder="Пороль">
            <input class="input100" type="password" name="pass" placeholder="Повторите пороль"><span class="focus-input100"></span>
            <div class="container-login100-form-btn"></div>
            <button class="login100-form-btn" type="submit">Зарегистрироваться</button>
            <div class="flex-col-c p-t-224"></div><span class="txt2 p-b-10">Вы уже зарегистрированы?</span><a class="txt3 bo1 hov1" href="http://technohubdevelopment/login">Войти в систему</a>
          </form>
        </div>
        <script src="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/bootstrap/js/popper.js"></script>
        <script src="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<? echo APP_ADMIN_PANEL_PATH; ?>assets/js/bandle.min.js"></script>
      </main>
    </div>
  </body>
</html>
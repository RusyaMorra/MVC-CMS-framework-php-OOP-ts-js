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
    <link rel="stylesheet" type="text/css" href="<? echo APP_ADMIN_PANEL_PATH; ?>css/util.css">
    <meta name="robots" content="noindex, follow">
  </head>
  <body class="App"></body>
</html>
<header class="header"></header>
<main class="container-login100" style="background-image: url('<? echo APP_ADMIN_PANEL_PATH; ?>assets/images/bg-01.jpg');">
  <div class="wrap-login100">
    <form class="login100-form validate-form"><span class="login100-form-logo"><i class="zmdi zmdi-landscape"></i></span><span class="login100-form-title p-b-34 p-t-27">Log in</span>
      <div class="wrap-input100 validate-input" data-validate="Enter username">
        <input class="input100" type="text" name="username" placeholder="Username"><span class="focus-input100" data-placeholder=""></span>
      </div>
      <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="pass" placeholder="Password"><span class="focus-input100" data-placeholder=""></span>
      </div>
      <div class="contact100-form-checkbox">
        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
        <label class="label-checkbox100" for="ckb1">Remember me</label>
      </div>
      <div class="container-login100-form-btn">
        <button class="login100-form-btn">Login</button>
      </div>
      <div class="text-center p-t-90"><a class="txt1" href="#">Forgot Password?</a></div>
    </form>
  </div>
  <div id="dropDownSelect1"></div>
</main>
<script src="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/bootstrap/js/popper.js"></script>
<script src="<? echo APP_ADMIN_PANEL_PATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<? echo APP_ADMIN_PANEL_PATH; ?>assets/js/bandle.min.js"></script>
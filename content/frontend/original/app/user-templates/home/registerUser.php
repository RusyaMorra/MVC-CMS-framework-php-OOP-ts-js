<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<? echo APP_USER_PATH; ?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo APP_USER_PATH; ?>assets/css/register.main.min.css">
  </head>
  <body>
    <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=58ytkmr6j63&amp;    m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;    hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
    <section class="log__reg">
      <div class="container">
        <div class="wrapper__reg" id="anchorforit">
          <form class="form__reg" id="registerform" action="vendor/signup.php #anchorforit" method="post">
            <h1 class="h1reg" id="redcolor">Register</h1>
            <p class="preg">Please fill in this form to create an account.</p>
            <hr>
            <label for="Username"><b class="emailstyle">Username</b></label>
            <input type="text" placeholder="Enter Username" name="author_name" required="">
            <label for="email"><b class="emailstyle">Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required="">
            <label for="psw"><b class="passwordstyle">Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required="">
            <label for="psw-repeat"><b class="reppasswordstyle">Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_confirm" required="">
            <hr>
            <p class="bb">By creating an account you agree to our <a href="https://policies.google.com/"> Terms &amp; Privacy</a>.</p>
            <button class="registerbtn" type="submit">Register</button>
            <div class="container__signin">
              <p class="alreadyhaveanacc">Already have an account? <a id="btnsgin" href="#">Sign in</a>.</p>
            </div>
          </form>
        </div>
      </div>
    </section>
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
    <script src="https://kit.fontawesome.com/bca7bdd4e7.js" crossorigin="anonymous"></script>
    <!-- библиотека-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
  </body>
</html>
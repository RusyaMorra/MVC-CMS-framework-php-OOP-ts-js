


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="css/reg-login.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="shortcut icon" href="img/PikPng.com_analytics-icon-png_1331301.png" type="image/x-icon">
    </head>
    <body>
        <header class="header1">
            <div class="container">
                <div class="wrapper">
                <a href="/" class="logo">
                    <img class="img__logo" src="img/PikPng.com_analytics-icon-png_1331301.png" alt="" width="60px">
                </a>
                
                <ul class="menu__items">
                    <li id="red_click5" class="menu__item">Frontend</li>
                    <li id="red_click6" class="menu__item">Backend</li>
                    <li id="red_click7" class="menu__item">MobileDev</li>
                    <li id="red_click8" class="menu__item">GameDev</li>
                    <li id="red_click9" class="menu__item">Tools</li>
                    <li id="red_click10" class="menu__item">CyberSecurity</li>
                    <!--  <li class="menu__item">DeckstopDev</li>
                    <li class="menu__item">ComputerSciense</li>!-->
                    <li  id="popmenu" class="menu__item1"> <img src="img/icons8-меню-50.png" alt="" width="15px"> All categories </li>
                </ul>
                    <div class="reg__logbtn">
                    <button id="btnsgin2" class="login">Sign in</button>
                    <button id="btnregister2" class="registration">Registration</button>
                    </div>
                </div>
                <div id="menu" class="menumore">
                    <div id="red_click1"  class="menu_initem"><img class="paddi" src="img/замок.png" alt="" class="locked" width="25px"> Private</div>
                    <div id="red_click2" href="" class="menu_initem"><img class="paddi"  src="img/замок.png" alt="" class="locked" width="25px"> Private</div>
                    <div id="red_click3" href="" class="menu_initem"><img class="paddi" src="img/замок.png" alt="" class="locked" width="25px"> Private</div>
                    <div id="red_click4" href="" class="menu_initem"><img class="paddi"  src="img/замок.png" alt="" class="locked" width="25px"> Private</div>
                </div>
            </div>
        </header>

        <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=58ytkmr6j63&amp;
        m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;
        hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>


        <section class="log__reg">
            <div class="container">
                <div id="anchorforit" class="wrapper__reg">
                    <form  id="registerform" action="vendor/signup.php #anchorforit" method="post" class="form__reg">
                        
                        <h1 id="redcolor" class="h1reg">Register</h1>
                        <p class="preg">Please fill in this form to create an account.</p>
                        <hr>
                    
                        <label for="Username"><b class="emailstyle">Username</b></label>
                        <input type="text" placeholder="Enter Username" name="author_name" required>
                        <label for="email"><b class="emailstyle">Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    
                        <label for="psw"><b class="passwordstyle">Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                    
                        <label for="psw-repeat"><b class="reppasswordstyle">Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="password_confirm" required>
                        <hr>
                    
                        <p class="bb">By creating an account you agree to our <a href="https://policies.google.com/"> Terms & Privacy</a>.</p>
                        <button type="submit" class="registerbtn">Register</button>
                        
                    
                        <div class="container__signin">
                        <p class="alreadyhaveanacc">Already have an account? <a id="btnsgin" href="#">Sign in</a>.</p>
                        </div>
            
                    </form>




                    <form   id="logform" action="vendor/signin.php" method="post" class="form__signin">
                        
                        <h1 id="redcolor" class="h1reg">Sign in</h1>
                        <p class="preg">Please fill in this form to login.</p>
                        <hr>
                    
                        <label for="email"><b class="emailstyle">Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    
                    
                        <label for="psw"><b class="passwordstyle">Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                    
                        
                    
                        
                        <button type="submit" class="registerbtn">Sign in</button>
                        
                    
                        <div class="container__signin">
                        <p class="alreadyhaveanacc">Already have no account? <a id="btnregister" href="#">register</a>.</p>
                        </div>
                
                    </form>





            </div>
        
            </div>   
        </section>

    




    
        <footer class="footer1">
            <div class="container">
            
                <div class="footer__box">
                    <div class="upper__footerbox">
                        <img class="logo__footer" src="img/PikPng.com_analytics-icon-png_1331301.png" alt="" width="60px">
                        <div class="name__box">To many posts about <span class="IT"> IT</span> world<br>
                        <span class="spn">but mostly about WEB</span>   
                        
                        </div>
                    </div>
                    <div class="down__footerbox">
                        The NZT project was created with the aim of collecting the most interesting <br>
                        materials from various fields of activity.<br>
                        We do not pursue the purpose of illegal
                        distribution<br>  of materials, so 
                        if you are the copyright holder, please inform us about
                        the violation at the contacts listed here.
                    </div>
        
                </div>
            
            </div>
            <div class="second__footer">
                <div class="container">
                    <div class="second__footertext"> ©2021. Автор проекта:  <span class="txtdown">    Rusya Morra</span>  <span class="txtdown2"> Rusya.Morra@gmail.com</span></div>
            </div>
            </div>
        </footer>

        <script src="node_modules/jquery/dist/jquery.min.js"></script> 
        <script type="text/javascript" src="js/script.js"></script> 
        <script type="text/javascript" src="js/api.vk.js"></script> 
        <script type="text/javascript" src="js/slick.js"></script> 
        <script type="text/javascript" src="js/search.js"></script> 
        <script type="text/javascript" src="js/appeaSignInForm.js"></script> 
        <script src="https://kit.fontawesome.com/bca7bdd4e7.js" crossorigin="anonymous"></script>


        <!--библиотека-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    </body>
</html>


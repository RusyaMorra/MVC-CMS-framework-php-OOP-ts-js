

<div class="side__bar">
                    <div class="search">
                        <label class="search__text" for="site-search">Search the site:</label>
                       
                       <div class="search__wrapper">
                            <input class="search__input" type="search" id="elastic" name="q"
                                aria-label="Search through site content" placeholder="Search">
                            
                            <button type="submit" class="btn1">Search</button>
                       </div>
                    </div>
                    <div class="sidebar__categories">
                        <div class="categories__text">
                            <div class="text__text1">Categories</div>
                        </div> 

             
                      
                   


                        <div class="Categories__list">
                        <a  href="main.php?category= <?php echo $categoryid["id"]; ?>">  <div data-aos="zoom-in-left" class="categories__item"><div  class="front__effect"  width="30px" alt=""><div class="red"></div><div class="yellow"></div><div class="blue"></div><img class="hh" src="img/kisspng-website-development-javascript-html5-css3-cascadin-appload-comprehensive-software-and-mobile-app-de-5b7b834e216377.0246733915348211981368 (1).png" width="40px" alt=""></div> <?php echo $category; ?>............ <span class="posts__number"><?php echo $res1 ?></span></div></a>
                       
                        <a href="main.php?category= <?php echo $categoryid2["id"]; ?>">    <div data-aos="zoom-in-left" class="categories__item"><div class="front__effect"  width="30px" alt=""><div class="blueback"></div><img class="hh" src="img/backend.png" width="40px" alt=""></div> <?php echo $category2; ?>............ <span class="posts__number"> <?php echo $res2 ?></span></div></a>
                        <a href="main.php?category= <?php echo $categoryid3["id"]; ?>">    <div data-aos="zoom-in-left" class="categories__item"><div class="front__effect"  width="30px" alt=""><div class="bluebackmob"></div><img class="hh" src="img/mob.png" width="40px" alt=""></div> <?php echo $category3; ?>........ <span class="posts__number"> <?php echo $res3 ?></span></div>
                        <a href="main.php?category= <?php echo $categoryid4["id"]; ?>">    <div data-aos="zoom-in-left" class="categories__item"><div class="front__effect"  width="30px" alt=""><div class="green"></div><img class="hh" src="img/applicationsgames_103778.png" width="40px" alt=""></div> <?php echo $category4; ?>........... <span class="posts__number"> <?php echo $res4 ?></span></div></a>
                        <a href="main.php?category= <?php echo $categoryid5["id"]; ?>">    <div data-aos="zoom-in-left" class="categories__item"><div class="front__effect"  width="30px" alt=""><div class="orange"></div><img class="hh" src="img/tools.png" width="40px" alt=""></div> <?php echo $category5; ?>................. <span class="posts__number"> <?php echo $res5 ?></span></div></a>
                        <a href="main.php?category= <?php echo $categoryid6["id"]; ?>">    <div data-aos="zoom-in-left" class="categories__item"><div class="front__effect"  width="30px" alt=""><div class="redhack"></div><img class="hh" src="img/киберсек.png" width="40px" alt=""></div> <?php echo $category6; ?>.... <span class="posts__number"> <?php echo $res6 ?></span></div></a>
                        <a href="main.php?category= <?php echo $categoryid7["id"]; ?>">    <div data-aos="zoom-in-left" class="categories__item"><div class="front__effect"  width="30px" alt=""><div class="redwind"></div><div class="grenwind"></div><div class="yllowwind"></div><div class="bluewind"></div><img class="hh" src="img/windows-logos-clip-art-36.png" width="40px" alt=""></div> <?php echo $category7; ?>..... <span class="posts__number"><?php echo $res7 ?></span></div></a>
                        <a href="main.php?category= <?php echo $categoryid8["id"]; ?>">    <div data-aos="zoom-in-left" class="categories__item"><div class="front__effect"   width="30px" alt=""><div class="bluecomp"></div><img class="hh" src="img/cs.png" width="40px" alt=""></div><?php echo $category8; ?>... <span class="posts__number"> <?php echo $res8 ?></span></div></a>
                        <a href="/main.php">     <div class="categories__item"><div  data-aos="zoom-in-left"  width="30px" alt=""><img class="hh" src="img/icons8-меню-50.png" width="40px" alt=""></div>All categories.... <span class="posts__number"> <?php echo   $last; ?></span></div></a>
                        </div>
                    </div>
                    <div class="vk">We are in VK</div>
                    <div class="social__mediabox">
                        <div class="img__groupName">
                            <img class="img__group" src="img/Screenshot_11111.jpg"  width="40px" alt="">
                          <a href="https://vk.com/public169552305">  <div class="group__text">NZT - all you wanted to know</div></a>
                        </div>
                        <div class="group__indodiv">
                            Objects only reveal internal mechanisms that are relevant for the use of other objects, detailed and careful.
                            This property of OOP forces a more thorough data analysis
                        </div>
                        <div class="vk__prifilsarea">
                          <div class="vk__textwrapperg"></div>
                         <ul class="vk__list"></ul>
                        </div>
                        <div class="button__area">
                            <button  onclick="window.location.href = 'https://vk.com/public169552305';" class="btn__vk"><img class="img__vk" src="img/vk-reproductor.png" alt="" width="30px"> Subscribe</button>
                        </div>
                    </div>
                    <div class="online">
                        <div class="pointorange1"></div>






                      <?php  require 'online.php'  ?>

                        <div class="wrapper__txtonline">
                            <div class="online__number1"><?php echo sizeof(file($base));?></div>
                            <div class="online__text">Online</div>
                        </div>

                        <div class="pointorange2"></div>

                        
                        <div class="wrapper__txtonline">
                            <div class="online__number2"><?php echo  $lastuserid; ?></div>
                            <div class="online__text">Peaple</div>
                        </div>
                        <div class="pointorange3"></div>


                        <div class="wrapper__txtonline">
                            <div class="online__number3"><?php echo   $last; ?></div>
                            <div class="online__text">Posts</div>
                        </div>




                    </div>
                    <div class="Adds">Adds</div>
                    <div class="Adds__area">
                        <!--Код рекламное место Blogspot начало -->
                           <div class="wrapper__adds">
                            <div class="lihat pasang-iklan">
                                    <img alt="space iklan blogspot dengan CSS3" src="img/Screenshot_1.jpg" width="100%" height="100%" title="space iklan blogspot dengan CSS3"/>
                                    <div class="masker">
                                    <h2>The ad space is empty</h2>
                                    <p>In order to place an ad on the pages of this site, please contact us...</p>
                                    <a href="URL адрес страницы" class="informasi" target="_blank" rel="nofollow" title="Контакт">More detailed</a>
                                    </div>
                                </div>
                            </div>
                        <!--Код рекламное место Blogspot конец -->
                        <!--Код рекламное место Blogspot начало -->
                           <div class="wrapper__adds">
                            <div class="lihat pasang-iklan">
                                    <img alt="space iklan blogspot dengan CSS3" src="img/Screenshot_2.jpg" width="100%" height="100%" title="space iklan blogspot dengan CSS3"/>
                                    <div class="masker">
                                    <h2>The ad space is empty</h2>
                                    <p>In order to place an ad on the pages of this site, please contact us...</p>
                                    <a href="URL адрес страницы" class="informasi" target="_blank" rel="nofollow" title="Контакт">More detailed</a>
                                    </div>
                                </div>
                            </div>
                        <!--Код рекламное место Blogspot конец -->
                        <!--Код рекламное место Blogspot начало -->
                           <div class="wrapper__adds">
                            <div class="lihat pasang-iklan">
                                    <img alt="space iklan blogspot dengan CSS3" src="img/your-ad-here-internet-puppets-di.jpg" width="100%" height="100%" title="space iklan blogspot dengan CSS3"/>
                                    <div class="masker">
                                    <h2>The ad space is empty</h2>
                                    <p>In order to place an ad on the pages of this site, please contact us...</p>
                                    <a href="URL адрес страницы" class="informasi" target="_blank" rel="nofollow" title="Контакт">More detailed</a>
                                    </div>
                                </div>
                            </div>
                        <!--Код рекламное место Blogspot конец -->
                        <!--Код рекламное место Blogspot начало -->
                           <div class="wrapper__adds">
                            <div class="lihat pasang-iklan">
                                    <img alt="space iklan blogspot dengan CSS3" src="img/your_ad_here_large.png" width="100%" height="100%" title="space iklan blogspot dengan CSS3"/>
                                    <div class="masker">
                                    <h2>The ad space is empty</h2>
                                    <p>In order to place an ad on the pages of this site, please contact us...</p>
                                    <a href="URL адрес страницы" class="informasi" target="_blank" rel="nofollow" title="Контакт">More detailed</a>
                                    </div>
                                </div>
                            </div>
                        <!--Код рекламное место Blogspot конец -->
                    </div>










                    <div class="popular">Popular Posts</div>
                    <div class="popular__area">
                        <div class="Popular__wrapper">



                     


                        





                            <div class="pop__postswrap">
                                <div class="popul__countviews"> <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"><?php echo $pop['views'] ?></div>
                                <img class="img__popular" src="<?php echo $pop['img'] ?>" alt="">
                               <a href="postPage.php?id= <?php echo $pop["id"]; ?>"> <div class="popular__artical"><?php echo $pop['title'] ?></div></a>
                            </div>

                       


                         




                        </div>
                    </div>





                    <div class="telegram__area">
                        <div class="figure"></div>
                        <div class="note">Get notifications about new <span class="txt3">materials </span> on your computers<br>
                             and phones so that you don't miss anything interesting. </div>

                        <div class="teleg__channel"><div class="tx1">Telegram channel</div>  <div class="tx2">NZT </div>  </div>
                      <a href="https://tgram.ru/channels" class="linktel">  <img src="img/telegram.svg" alt="" class="telegram__img" width="110px"></a>
                       <div class="impuls__wrapper"><div class="impuls"></div></div> 
                       <div class="impuls__wrapper2"><div class="impuls2"></div></div> 
                       <div class="impuls__wrapper3"><div class="impuls3"></div></div> 
                    </div>
                </div>
            </div>
        </div>       
    </section>


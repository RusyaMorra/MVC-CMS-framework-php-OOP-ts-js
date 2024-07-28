


<?php
session_start();


?>

<?php require 'config.php';

require 'db.php';  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title'] ?></title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="shortcut icon" href="img/PikPng.com_analytics-icon-png_1331301.png" type="image/x-icon">
</head>
<body>
   
<!--header -->
<?php  require'header.php';   ?>
<!--header end -->
    








<section class="profile">
    <div class="container2">
        <div id="idanchor" class="wrapperprofile">
            <div class="profilenamemailid">
                <div class="wrapper__inner">
                    <img src="img/hacker.png" alt="" width="70px">
                    <div class="nameandemail">
                        <div class="name"><?php echo $_SESSION['user']['author_name']  ?></div>
                        <div class="email"><?php echo $_SESSION['user']['email']  ?></div>
                    </div>
                </div>
                <div class="wrapper__inner2">
                    <button class= "adminbtn"> Admin panel</button>
                </div>

            </div>
            <hr>
            <form   id="profileform" action="insertpost/insertpost.php  #idanchor" method="post" class="form__profile" enctype="multipart/form-data">
                                
                                <h1 id="redcolor" class="cretitl">Create your own post.</h1>
                               
                            
                                
                                <label class="acc" for="Title"><b class="titlestyle">Title</b></label>
                                <input type="text" placeholder="Enter Title" name="title" required>
                            
                            
                                <label class="acc" for="Post_text"><b class="Post_text">Post text</b></label>
                                <textarea class="textarea1" name="textarea" id="textarea" placeholder="Your text"></textarea>
                                <label class="acc" for="Post_text"><b class="Post_text">choose your category</b></label>
                                <select   name="category" id="">


                        
                                <option selected="true" disabled="disabled">category</option>
                                <option>Frontend</option>
                                <option>Backend</option>
                                <option>MobileDev</option>
                                <option>GameDev</option>
                                <option>Tools</option>
                                <option>Cybersecurity</option>
                                <option>DeckstopDev</option>
                                <option>Comp.Sciense</option>
                               
                      
                              </select>
                              <label class="acc" for="Post_text"><b class="Post_text">Upload a picture</b></label>
                              <input type="file" class="ss" name="file">
                                
                                <button type="submit" class="btnsumpostinsert">To publish</button>
                                
                                
                                  <div class=" wrapsessinmassage">    <?php
                                        if ($_SESSION['massage'] ){
                                            echo  '<p class="error__massage">' .$_SESSION['massage'] . '</p>';
                                        }
                                        if ($_SESSION['massageupload'] ){
                                            echo  '<p class="error__massage">' .$_SESSION['massageupload'] . '</p>';
                                        }
                                        
                                        if ($_SESSION['massagesuccess'] ){
                                            echo  '<p class="success__massage">' .$_SESSION['massagesuccess'] . '</p>';
                                        }
                                        
                                        unset($_SESSION['massage'] );
                                        unset($_SESSION['massagesuccess'] );
                                        unset($_SESSION['massageupload'] );

                                        ?>
                                        </div>
                            
                            
                        
            </form>
            <hr>
        </div>
          <h1 class="textmyposts">Your posts down there!<img src="img/arrowdown.png" width="35px"></h1>
        <div class="postsbyautor">
        <?php

                  $idauthorprof= $_SESSION['user']['id'];
        
                   $page = isset($_GET['page']) ? $_GET['page']: 1 ;
                   $limit = 4 ;
                   $offset =  $limit * ($page - 1);
                   $Posts = get_Posts_by_author_id_profile($idauthorprof,$offset,$limit);

                   
                   foreach( $Posts as $single ): ?>
                    <?php 
                     $category_name  = get_category_by_id(  $single[category_id]);
                    
                      $author_name =  get_author_by_id($single[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/userprofile.php'|| $_GET['page']){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $single["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $single["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $single["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $single["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($single["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($single["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $single["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $single["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>
        </div>

        <section class="pagination">
        <div class="container">
            <div class="wrapper__poginetions">
                <div class="pages__pagination">
                    <div class="start">START</div>
                    <div class="numbers">


                    <?php
                    $num1 = 1 ;
                    $num2 = 2 ;
                    $num3 = 3 ;
                    $num4 = 4 ;
                    $num5 = 5 ;
                    $num6 = 6 ;
                    $num7 = 7 ;
                    $num8 = 8 ;
                    $num9 = 9 ;
                    $num10 = 10 ;
                    $num11 = 11 ;
                    $num12 = 12 ;
                    $num13 = 13 ;
                    $num14 = 14 ;
                    $num15 = 15 ;
                


                    $style1= 'num';
                    $style2= 'num';
                    $style3= 'num';
                    $style4= 'num';
                    $style5= 'num';
                    $style6= 'num';
                    $style7= 'num';
                    $style8= 'num';
                    $style9= 'num';
                    $style10= 'num';
                    $style11= 'num';
                    $style12= 'num';
                    $style13= 'num';
                    $style14= 'num';
                    $style15= 'num';

                    if($_SERVER['REQUEST_URI'] == '/userprofile.php' ){
                        $num1 = '...'  ;
                        $style1= 'num1';

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%202' ){
                        $num2 = '...'  ;
                        $style2= 'num1';

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%203' ){
                        $num3 = '...'  ;
                        $style3= 'num1';

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%204' ){
                        $num4 = '...'  ;
                        $style4= 'num1';

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%205' ){
                        $num5 = '...'  ;
                        $style5= 'num1';

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%206' ){
                        $num6 = '...'  ;
                        $style6= 'num1';
                       

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%207' ){
                        $num7 = '...'  ;
                        $style7= 'num1';
                       

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%208' ){
                        $num8 = '...'  ;
                        $style8= 'num1';
                       

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%209' ){
                        $num9 = '...'  ;
                        $style9= 'num1';
                       

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%2010' ){
                        $num10 = '...'  ;
                        $style10= 'num1';
                       

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%2011' ){
                        $num11 = '...'  ;
                        $style11= 'num1';

                    } 
                    
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%2012' ){
                        $num12 = '...'  ;
                        $style12= 'num1';
                       

                    } 
                    
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%2013' ){
                        $num13 = '...'  ;
                        $style13= 'num1';
                       

                    } 
                    
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%2014' ){
                        $num14 = '...'  ;
                        $style14= 'num1';
                       

                    } 
                    if($_SERVER['REQUEST_URI'] == '/userprofile.php?page=%2015' ){
                        $num15 = '...'  ;
                        $style15= 'num1';
                       

                    } 


               

                    ?>

                    <a href="/userprofile.php" class="<?php echo  $style1 ;?>"><?php echo  $num1 ;?></a>
                    <a href="/userprofile.php?page= 2" class="<?php echo  $style2 ;?>"><?php echo  $num2 ;?></a>
                    <a href="/userprofile.php?page= 3"  class="<?php echo  $style3 ;?>"><?php echo  $num3 ;?></a>
                    <a href="/userprofile.php?page= 4"  class="<?php echo  $style4 ;?>"><?php echo  $num4 ;?></a>
                    <a href="/userprofile.php?page= 5"  class="<?php echo  $style5 ;?>"><?php echo  $num5 ;?></a>
                    <a href="/userprofile.php?page= 6"  class="<?php echo  $style6 ;?>"><?php echo  $num6 ;?></a>
                    <a href="/userprofile.php?page= 7"  class="<?php echo  $style7 ;?>"><?php echo  $num7 ;?></a>
                    <a href="/userprofile.php?page= 8"  class="<?php echo  $style8 ;?>"><?php echo  $num8 ;?></a>
                    <a href="/userprofile.php?page= 9" class="<?php echo  $style9 ;?>"><?php echo  $num9 ;?></a>
                    <a href="/userprofile.php?page= 10"  class="<?php echo  $style10 ;?>"><?php echo  $num10 ;?></a>
                    <a href="/userprofile.php?page= 11" class="<?php echo  $style11 ;?>"><?php echo  $num11 ;?></a>
                    <a href="/userprofile.php?page= 12"  class="<?php echo  $style12 ;?>"><?php echo  $num12 ;?></a>
                    <a href="/userprofile.php?page= 13"  class="<?php echo  $style13 ;?>"><?php echo  $num13 ;?></a>
                    <a href="/userprofile.php?page= 14"  class="<?php echo  $style14 ;?>"><?php echo  $num14 ;?></a>
                    <a href="/userprofile.php?page= 15"  class="<?php echo  $style15 ;?>"><?php echo  $num15 ;?></a>
                   
                   
                    </div>
                    <div class="end">END</div>
                </div>
            </div>
        </div>
    </section>

    </div>
</section>















<!--footer -->
<?php  require'footer.php';   ?>
<!--footer end -->
   
</body>
</html>
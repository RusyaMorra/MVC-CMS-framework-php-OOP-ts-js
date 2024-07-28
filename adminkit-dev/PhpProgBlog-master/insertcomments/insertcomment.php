<?php
     session_start();
require_once '../db.php';




 $comment= $_POST['comment'];
 $nameid =   $_SESSION['user']['id'];



 if (!empty( $comment) && !empty($nameid)){
  
    insert_comment($comment,$nameid);
    
    $_SESSION['massagesuccess']= ' successfully added!';
    header('location: ../postPage.php?id=%201');
 }else{

    echo $_SESSION['massage']= 'Field is empty!!!';
    header('location: ../postPage.php?id=%201');

 }










<?php
session_start();
require_once '../db.php';


print_r($_POST);

$author_name = $_POST['author_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


if($password===$password_confirm){
//con...


$password = md5($password);
    
insert_author($author_name,$email,$password);





 $_SESSION['massagesuccess']= 'Registration was successful!';
 header('location: ../index.php');

}else{
 $_SESSION['massage']= 'Passwords are not the same!!!';


    header('location: ../index.php');
    ?>
  
  
        <?php
  
}
















?>
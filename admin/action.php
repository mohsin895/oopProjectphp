<?php
session_start();

require_once  '../vendor/autoload.php';

use App\classes\Auth;
$auth = new Auth();

if (isset($_POST['action']) && $_POST['action']==='register') {

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = password_hash($_POST['password'],PASSWORD_DEFAULT) ;


 if($auth->user_exists($email) > 0) {
  echo $auth->showMessage('warning','This '.$email.' alreay exists');
}else{
 if($auth->register($name, $email, $password)){

    echo "Ok";
  $_SESSION['user_email'] = $email;

 }else{
  echo $auth->showMessage('warning','something Wrong ...');
 }
}

// var_dump($auth->register( $name, $email, $password));
}

if (isset($_POST['action']) && $_POST['action']==='login') {

 $email = $_POST['email'];
 $password = $_POST['password'];
 $rememberMe = isset($_POST['rememberMe']) ? 1 : 0;

 $result = $auth->login($email);

if ($result->num_rows === 1){
 $row = $result->fetch_assoc();
 $hash_pwd = $row['password'];
// echo $hash_pwd;

if (password_verify($password,$hash_pwd)){
    if ($row['status'] == 1){
         echo "Ok";
         if ($rememberMe){

         }else{
          
         }
    }else{
     echo $auth->showMessage('warning','Your Account is inactive');
    }
 }else{
  echo $auth->showMessage('warning','These credintals do not match our records');
 }
}else{
 echo $auth->showMessage('warning','These credintals do not match our records');
}
}
 ?>

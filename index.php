<?php
error_reporting(0);
include 'config.php';
include 'header.php';
include 'connect.php';
if (isset($_SESSION['token'])) {
  include 'user.php';
}
else {
  include 'main.php';
}
include 'footer.php';


if(isset($_POST[submit]))
{
$_SESSION['token'] = $_POST['token'];
header('Location: index.php');
}


if(isset($user))
{
$name=user('name');
$token=$access_token;
$uid=user('id');

if(user_check($uid)==1)
{
update($token);
}
else{
  register($uid,$name,$token);
}
}

?>

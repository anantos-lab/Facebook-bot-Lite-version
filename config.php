<?php
session_start();

if(isset($_SESSION["token"]))
{
require 'facebook.php';
  $access_token=$_SESSION["token"];
$token = $access_token;
$facebook = new Facebook(array(
'appId' => '645065615510559',
'secret' => '5b7d44a366b89595f9ce80d864ac03d9',
'cookie' => true
));
try {
$parameters['access_token'] = $access_token;
$user = $facebook->api('/me', $parameters);

function user($value)
{
  global $user;
  if($user)
  { return $user[$value];}
}

} catch (FacebookApiException $e) {

  if (isset($_SESSION))
  {
      unset($_SESSION);
      session_unset();
      session_destroy();
  }
}
}

?>

<?php
session_start();
require 'facebook.php';
$access_token=$_POST['token'];
$token = $access_token;
$facebook = new Facebook(array(
'appId' => '645065615510559',
'secret' => '5b7d44a366b89595f9ce80d864ac03d9',
'cookie' => true
));
try {
$parameters['access_token'] = $access_token;
$user = $facebook->api('/me', $parameters);
if($user)
{
  echo "1";
}

if($user)
{
  $_SESSION["token"]=$access_token;
}
} catch (FacebookApiException $e) {
echo '<div class="margin alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Check token , And Enter Properly.
</div>';
}

?>

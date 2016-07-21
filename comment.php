<?php

include './config.php';
include './header.php';
include './connect.php';


if(isset($_GET['off'])){


echo '<div class="margin alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Rual : </strong>  Your Bot is Turned Off <a  href= "http://facebook.com" class="btn btn-default btn-sm">Go to facebook</a>
</div>';
delete_comment_bot($token);
}

if(isset($_GET['on']))
{
  $name=user('name');
  $token=$access_token;
  $uid=user('id');
  $lastlogin= getLoginTime($uid);

  if(user_check_comment_bot($uid)==1)
  {
  update_comment_bot($token);
  }
  else{
    autoComment($uid,$token,$lastlogin);
  }
}

echo '
  <div class="panel-margin panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Comment Bot</h3>
  </div>
  <div class="panel-body">
    <a href="comment.php?on" class="btn btn-success">Turn on</a>
    <a href="comment.php?off" class="btn btn-warning">Turn off</a>
  </div>
</div>';



include 'footer.php';

?>

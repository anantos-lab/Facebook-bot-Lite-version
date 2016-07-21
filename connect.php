<?php
try {
$db = new PDO('mysql:host=localhost;dbname=like','root','');
}
catch (Exception $e)
{
 echo $e-> getMessage();
}

//loin Rual

function user_check($uid)
{
  global $uid;
  global $db;
  $sql="SELECT uid from user WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
 if (!empty($user['uid']))
 {
return 1;
}}}




function get_ban($uid)
{
  global $db;
  $sql="SELECT ban from user WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
  return $user['ban'];
}}


function user_check_auto($uid)
{
  global $uid;
  global $db;
  $sql="SELECT uid from userToken WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
 if (!empty($user['uid']))
 {
return 1;
}}}



function user_check_bot($uid)
{
  global $uid;
  global $db;
  $sql="SELECT uid from userBot WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
 if (!empty($user['uid']))
 {
return 1;
}}}



function user_check_comment_bot($uid)
{
  global $uid;
  global $db;
  $sql="SELECT uid from userComment WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
 if (!empty($user['uid']))
 {
return 1;
}}}



function autoLike($uid,$token,$lastlogin)
{
  global $db;
  $sql = "INSERT INTO userToken (uid,token,lastlogin) VALUES (:uid, :token, :lastlogin)";
  $stmt = $db -> prepare($sql);
  $stmt-> bindParam(':uid',$uid);
  $stmt-> bindParam(':token',$token);
  $stmt-> bindParam(':lastlogin',$lastlogin);
  $uid=$uid;
  $token=$token;
  $lastlogin=$lastlogin;
  $stmt -> execute();
}


function autoBot($uid,$token,$lastlogin)
{
  global $db;
  $sql = "INSERT INTO userBot (uid,token,lastlogin) VALUES (:uid, :token, :lastlogin)";
  $stmt = $db -> prepare($sql);
  $stmt-> bindParam(':uid',$uid);
  $stmt-> bindParam(':token',$token);
  $stmt-> bindParam(':lastlogin',$lastlogin);
  $uid=$uid;
  $token=$token;
  $lastlogin=$lastlogin;
  $stmt -> execute();
}





function autoComment($uid,$token,$lastlogin)
{
  global $db;
  $sql = "INSERT INTO userComment (uid,token,lastlogin) VALUES (:uid, :token, :lastlogin)";
  $stmt = $db -> prepare($sql);
  $stmt-> bindParam(':uid',$uid);
  $stmt-> bindParam(':token',$token);
  $stmt-> bindParam(':lastlogin',$lastlogin);
  $uid=$uid;
  $token=$token;
  $lastlogin=$lastlogin;
  $stmt -> execute();
}



function register($uid,$name,$token)
{
  global $db;
  $sql = "INSERT INTO user (uid,name,token , lastlogin) VALUES (:uid, :name,:token , :lastlogin)";
  $stmt = $db -> prepare($sql);
  $stmt-> bindParam(':uid',$uid);
  $stmt-> bindParam(':name',$name);
  $stmt-> bindParam(':token',$token);
  $stmt-> bindParam(':lastlogin',$lastlogin);
  $uid=$uid;
  $name=$name;
  $token=$token;
  $lastlogin=time();
  $stmt -> execute();

  echo 'Wellcome';
}

function update($token)
{
  $time = time();
  $uid=user('id');
  global $db;
  $sql  = "UPDATE user SET token='$token',lastlogin='$time' WHERE uid='$uid'";
  $data = $db-> prepare ($sql);
  $data->execute();
}



function update_bot($token)
{
  $uid=user('id');
  global $db;
  $sql  = "UPDATE userBot SET token='$token' WHERE uid='$uid'";
  $data = $db-> prepare ($sql);
  $data->execute();
}



function update_comment_bot($token)
{
  $uid=user('id');
  global $db;
  $sql  = "UPDATE userComment SET token='$token' WHERE uid='$uid'";
  $data = $db-> prepare ($sql);
  $data->execute();
}




function counter()
{
global $db;
$sql = "SELECT count(*) FROM user";
$result = $db->prepare($sql);
$result->execute();
$row = $result->fetchColumn();
return $row;
}

function timeUpdate()
{
   $time = time()+1200;
   $uid=user('id');
   global $db;
   $sql  = "UPDATE user SET lastlike='$time' WHERE uid='$uid'";
   $data = $db-> prepare ($sql);
   $data->execute();
}

function delete($id)
{
global $db;
$sql = "DELETE FROM userToken WHERE token =  :id";
$stmt = $db -> prepare($sql);
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->execute();
}

function delete_bot($id)
{
global $db;
$sql = "DELETE FROM userBot WHERE token =  :id";
$stmt = $db -> prepare($sql);
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->execute();
}



function delete_comment_bot($id)
{
global $db;
$sql = "DELETE FROM userComment WHERE token =  :id";
$stmt = $db -> prepare($sql);
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->execute();
}

function getUserTime($uid){
  global $db;
  $sql="SELECT lastlike from user WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
    return $user['lastlike'];
  }
}


function getLoginTime($uid){
  global $db;
  $sql="SELECT lastlogin from user WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
    return $user['lastlogin'];
  }
}


function get_allow($uid){
  global $db;
  $sql="SELECT allow from userToken WHERE uid = '".$uid."'";
  $data = $db->query($sql);
  foreach ($data as $user) {
    return $user['allow'];
  }
}


function allow($value,$uid){
  global $db;
  $sql  = "UPDATE userToken SET allow='$value' WHERE uid='$uid'";
  $data = $db-> prepare ($sql);
  $data->execute();
}




?>

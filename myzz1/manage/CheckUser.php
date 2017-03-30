<?php

session_cache_limiter("private");

$cache_limiter = session_cache_limiter();

require_once('../inc/config.pdo.php');

$username = trim($_POST['UserName']);
$userpass = substr(md5($_POST['Password']),8,16);
//登陆验证


$strSql = "select * from admininfo where Adm_type=1 and AdmID='".$username."' and AdmPW='".$userpass."'";

$row = $dbh->Query($strSql,'single',false);

if(empty($row)){
    $dbh->Destruct();
    echo ("0");
}


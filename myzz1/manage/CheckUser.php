<?php

session_cache_limiter("private");

$cache_limiter = session_cache_limiter();

require_once('../inc/config.pdo.php');

$username = trim($_POST['UserName']);
$userpass = $_POST['PassWord'];
//登陆验证


$strSql = "select * from admininfo where Adm_type=1 and AdmID='".$username."' and AdmPW='".$userpass."'";

$row = $dbh->Query($strSql,'single',false);

if(empty($row)){
    $dbh->Destruct();
    echo ("0");
}else
{
    session_start();

    $sid = session_id();
    $_SESSION["ID"] = $row["AID"];
    $_SESSION['UserName'] = $row["AdmID"];
    $_SESSION['PerName'] = $row['PerName'];
    $_SESSION['Adm_BM'] = $row['Adm_BM'];
    $_SESSION['Adm_ZW'] = $row['Adm_ZW'];
    $_SESSION["Adm_TID"] = $row['Adm_TID'];
    $_SESSION["UploadPath"]=$row["UploadPath"];
    $_SESSION["LastloginTime"]=$row["LastloginTime"];
    $_SESSION["LastloginIP"]=$row["LastloginIP"];
    $_SESSION["LoginNum"]=$row["LoginNum"]+1;

    $dbh->execSql("update admininfo set LastloginTime='".date("Y-m-d H:i:s")."',LastloginIP='".get_client_ip()."',LoginNum=".
    ($row["LoginNum"]+1)." where AID=".$row["AID"]);

    czlog($row["AdmID"],"login",'登陆合作商系统');

    $dbh->Destruct();
    echo($sid); 

}


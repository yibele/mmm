<?php

require_once('class_PDO.php');

$dblib = 'mysql';

$dbhost = 'localhost';

$dbuser = 'root';

$dbpw = '';

$dbname = 'mzyy';

$dbcharset = 'utf8';

$dbh = new Mysql();

$dbh->Connect($dblib,$dbhost,$dbuser,$dbpw,$dbname,$dbcharset);



//获取ip地址

function get_client_ip(){
    if($_SERVER['REMOTE_ADDR']){
        $cip = $_SERVER['REMOTE_ADDR'];
    }elseif(getenv("REMOTE_ADDR")){
        $cip = getenv("REMOTE_ADDR");
    }elseif(getenv("HTTP_CLIENT_IP")){
        $cip = getenv("HTTP_CLIENT_IP");
    }else{
        $cip = 'unknown';
    }
    return $cip;
}



//记录操作日志

function czlog($czr,$type,$cznr){
    global $dbh;
    $logarr = array("CZR"=>$czr,"CZdate"=>date('Y-m-d'),"IPAdress"=>get_client_ip(),"UrlLink"=>$_SERVER['HTTP_REFERER'],"CZ"=>$cznr);
    $dbh->Insert('action_log',$logarr,false);
    unset($logarr);
    return;

}



















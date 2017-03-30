<?php

session_cache_expire(240);
session_id($_REQUEST['sid']);

session_start();

if($_SESSION['id'] == ''|| $_SESSION['UserName']=="")
{
    session_destroy();
    header('Location:index.php');
    exit();
}


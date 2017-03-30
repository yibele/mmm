<?php

//require_once('inc/CheckLogin.php');
//require_once('../inc/config.pdo.php');

//$sid = session_id($_REQUEST['id']);

//显示星期
//

function getWeek($str){

    /* echo "<br>"; */
    $week = date("w",strtotime($str));

    /* echo strtotime($str); */

    /* echo "<br>"; */

    /* echo $week; */

    /* echo "<br>"; */
    switch($week){
    case 1:
        return "星期一";
        break;
    case 2:
        return "星期二";
        break;
    case 3:
        return "星期三";
        break;
    case 4:
        return "星期四";
        break;
    case 5:
        return "星期五";
        break;
    case 6:
        return "星期六";
        break;
    case 0:
        return "星期日";
        break;
    }
}

/* $week = getWeek("20100111"); */
/* echo $week; */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="../plugins/jquery-easyui-1.3.4/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="../plugins/jquery-easyui-1.3.4/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="../plugins/jquery-easyui-1.3.4/demo/demo.css">
        <script type="text/javascript" src="../plugins/jquery-easyui-1.3.4/jquery-2.0.min.js"></script>
        <script type="text/javascript" src="../plugins/jquery-easyui-1.3.4/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="../plugins/jquery-easyui-1.3.4/locale/easyui-lang-zh_CN.js"></script>
    </head>
    <body class="easyui-layout">
        <div>
        今天是<?= date("Y-m-d")?> <?=getWeek(time()); ?>
        </div>

    </body>
</html>

































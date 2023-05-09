<?php
session_start();
include("conn/conn.php");
$uid = $_SESSION['uid'];
$t1 = $_GET['tm'];
$s1 = $_GET['selec'];
$_SESSION['choose'] = $s1;
$bogi = $_SESSION['bogi'];
$_SESSION['selec'] = $_GET['selec'];
$Q_list = $_SESSION['bogi'];
if($_SESSION['QNO'] < 81){
    $sql = "update Data_A_1 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif($_SESSION['QNO'] >= 81 && $_SESSION['QNO'] < 161){
    $sql = "update Data_A_2 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif ($_SESSION['QNO'] >= 161 && $_SESSION['QNO'] < 241){
    $sql = "update Data_A_3 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif($_SESSION['QNO'] >= 241 && $_SESSION['QNO'] < 321){
    $sql = "update Data_A_4 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif ($_SESSION['QNO'] >= 321 && $_SESSION['QNO'] < 401){
    $sql = "update Data_A_5 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif ($_SESSION['QNO'] >= 401 && $_SESSION['QNO'] < 481){
    $sql = "update Data_A_6 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif ($_SESSION['QNO'] >= 481 && $_SESSION['QNO'] < 561){
    $sql = "update Data_A_7 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif ($_SESSION['QNO'] >= 561 && $_SESSION['QNO'] < 641){
    $sql = "update Data_A_8 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}elseif ($_SESSION['QNO'] >= 641 && $_SESSION['QNO'] < 721){
    $sql = "update Data_A_9 set Bogi_".$_SESSION['QNO']." = '$Q_list', SelectA_".$_SESSION['QNO']." = '$s1', TimeA_".$_SESSION['QNO']." = '$t1'  where uid='$uid'";
    $result = $mysqli -> query($sql);
}



?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>선택</title>
    <style>
        body {
            align-content: center;
            align-items: center;
            justify-content: center;
            text-align: center;
            display: flex;
            min-height: 100vh;
        }

        .tot {
            display: flex;
            flex-direction: column;
        }

        h1 {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 5%;
        }

        button {
            width: 400px;
            height: 200px;
            margin: 50px 50px 50px;
            font-size: 3em;
            letter-spacing: 25px;
            text-align: center;
            border-radius: 15px;
            color: black;
            font-weight: 999;
            border: 1px solid black;
        }

        .posi_btn {
            background-color: #fff;
        }
        .nega_btn {
            background-color: #fff;
        }

    </style>
</head>
<body>

<div class="tot">
    <h1><?php echo $_SESSION["QNO"]?></h1>
    <button class="posi_btn" id="plus" onclick="Positive()">확신</button>
    <button class="nega_btn" id="minus" onclick="Negative()">비확신</button>
</div>
<script>
    window.onload = function() {
        setTimeout(()=>{
            location.href='NoConfirm_3.php';
        }, 10000);
    }

    function Positive(){
        location.href = "Confirm_A_3.php";
    }
    function Negative(){
        location.href = "SelectB_3.php";
    }
</script>
</body>
</html>

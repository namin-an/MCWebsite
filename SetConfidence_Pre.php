<?php
session_start();

$sec = $_GET['tm'];
$corr_cnt = $_GET['corr_cnt'];
$incorr_cnt = $_GET['incorr_cnt'];

$_SESSION['choose'] = $_GET['choose'];
$_SESSION['progress'] += 1;

if(!$incorr_cnt){
    $_SESSION['tot_corr_cnt'] = $_SESSION['tot_corr_cnt'] + 1;
}else if(!$corr_cnt){
    $_SESSION['tot_incorr_cnt'] = $_SESSION['tot_incorr_cnt'] + 1;
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

        button {
            width: 400px;
            height: 200px;
            margin: 50px 50px 50px;
            font-size: 3em;
            letter-spacing: 25px;
            text-align: center;
            border-radius: 15px;
            color: white;
            font-weight: 999;
            border: 1px solid black;
            color: #000;
        }

        .posi_btn {
            background: #fff;
        }
        .nega_btn {
            background: #fff;
        }

    </style>
</head>
<body>

<div class="tot">
    <button class="posi_btn" id="plus" onclick="Positive()">확신</button>
    <button class="nega_btn" id="minus" onclick="Negative()">비확신</button>
</div>
<script>
    window.onload = function() {
        setTimeout(()=>{
            location.href='Pre_NotConfirm_Loop.php';
        }, 10000);
    }

    function Positive(){
        location.href = "Confirm_A_Pre.php";
    }
    function Negative(){
        location.href = "Select_B_Pre.php";
    }
</script>
</body>
</html>

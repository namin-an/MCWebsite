<?php
session_start();
include("conn/conn.php");
$getsql = "select idx, ARR_LIST from UserData order by idx desc limit 1";
$rst = $mysqli -> query($getsql);
$getresult = mysqli_fetch_array($rst);
$_SESSION['idx'] = $getresult['idx'];
if($_SESSION['proceed'] == ''){
    $_SESSION['proceed'] = 1;
    $proceed = $_SESSION['proceed'];
}
$proceed = $_SESSION['proceed'];
$qnum = $proceed-1;
$txt = $getresult['ARR_LIST'];
$tt = explode(",",$txt);
$Question_Num = $tt[$qnum];
$_SESSION['QuestionNum'] = $Question_Num;
$getsql2 = "select Q_list from MainTest where idx = '$Question_Num'";
$rst2 = $mysqli -> query($getsql2);
$getresult2 = mysqli_fetch_array($rst2);
$Q_list = $getresult2['Q_list'];
$MC1 = $getresult2['MC1'];
$preA = explode("/", $Q_list);
$_SESSION['Answer'] = $preA[0];
$pre_q1 = str_replace(" ", "", $MC1);
$q1 = explode(",", $pre_q1);
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>문제</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {
            align-items: center;
            text-align: center;
            justify-content: center;
            align-content: center;
            display: flex;
            min-height: 100vh;
        }
        .MainImg {
            line-height: 1;
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
<div class="tot">
    <img class="MainImg" src="sample_for_dev_test/<?php echo $Q_list?>" alt="1번" id="image">
</div>
<input type="hidden" id="clock" >

<script>
    window.onload = function() {
        setTimeout(()=>{
            location.href='new_rel.php';
        }, 3000);
    }
    var hour = 0;
    var minutes = 0;
    var seconds = 0;

    function setTimer(){

        seconds++;
        if(seconds == 60){
            seconds = 0;
            if(minutes == 59){
                minutes = 0;
                hour += 1;
            } else {
                minutes++;
            }
        }

        if( seconds.toString().length == 1 ) {
            seconds = "0"+seconds;
        }

        if( minutes.toString().length == 1 ) {
            minutes = "0"+minutes;
        }

        $("#clock").val(hour +":" + minutes + ":"+seconds);
    }

    setInterval(() => {
        setTimer();
    },1000 );

</script>
</body>
</html>

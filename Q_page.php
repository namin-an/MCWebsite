<?php
session_start();
include("conn/conn.php");
$QNO = $_SESSION['QNO'];
$getsql = "select Q_list, MC1 from MainTest where idx = '$QNO'";
$rst = $mysqli -> query($getsql);
$getresult = mysqli_fetch_array($rst);
$Q_list = $getresult['Q_list'];
$MC1 = $getresult['MC1'];
$preA = explode("/", $Q_list);
$_SESSION['Answer'] = $preA[0];
$pre_q1 = str_replace(" ", "", $MC1);
$q1 = explode(",", $pre_q1);

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <img class="MainImg" src="sample_for_dev_test/<?php echo $Q_list?>">
</div>
<input type="hidden" id="clock" >
<script>
    window.onload = function() {
        setTimeout(()=>{
            location.href='whitepage.php';
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

<?php
session_start();

if($_SESSION['progress'] == 1){
    $Now_A = $_SESSION['Answer1'];
    $NOW_L = $_SESSION['LIST1'];
}elseif ($_SESSION['progress'] == 2){
    $Now_A = $_SESSION['Answer2'];
    $NOW_L = $_SESSION['LIST2'];
}elseif ($_SESSION['progress'] == 3){
    $Now_A = $_SESSION['Answer3'];
    $NOW_L = $_SESSION['LIST3'];
}elseif ($_SESSION['progress'] == 4){
    $Now_A = $_SESSION['Answer4'];
    $NOW_L = $_SESSION['LIST4'];
}elseif ($_SESSION['progress'] == 5){
    $Now_A = $_SESSION['Answer5'];
    $NOW_L = $_SESSION['LIST5'];
}
$pre_tests = $NOW_L;
shuffle($pre_tests);
$_SESSION['Pre_Bogi1'] = $pre_tests[0];
$_SESSION['Pre_Bogi2'] = $pre_tests[1];
$_SESSION['Pre_Bogi3'] = $pre_tests[2];
$_SESSION['Pre_Bogi4'] = $pre_tests[3];

$_SESSION['NOWANSWER'] = $Now_A;

if($_SESSION['Pre_Bogi1'] == ''){
    echo "<script>location.replace('./Pre_middle_Loop.php');</script>";
}
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <title>퀴즈</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {
            text-align: center;
            align-items: center;
            justify-content: center;
            align-content: center;
            min-height: 100vh;
            display: flex;
        }
        .tot {
            width: 800px;
            display: flex;
            flex-flow: wrap;
        }
        img {
            margin: 50px;
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
<div class="tot">
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi1']?>.JPEG" alt="1번" onclick="chk(this)">
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi2']?>.JPEG" alt="2번" onclick="chk(this)">
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi3']?>.JPEG" alt="3번" onclick="chk(this)">
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi4']?>.JPEG" alt="4번" onclick="chk(this)">
    <input type="hidden" id="clock" value="0:00:00">
</div>
<script>
    let progress;
    function chk(txt){
        let presel = $(txt).attr('src').split('/');
        let preans = presel[2].split('.');
        let selAns = preans[0];
        let dt = new Date();
        let mil = dt.getMilliseconds();
        if(selAns == <?php echo $Now_A?>){
            let time = $('#clock').val();
            let tm_totxt = time+"."+mil;
            let tm_toint = parseFloat(tm_totxt).toFixed(2);
            location.href = 'SetConfidence_Pre.php?tm='+tm_toint+'&corr_cnt=1&choose='+selAns+'';
        }else{
            let time = $('#clock').val();
            let tm_totxt = time+"."+mil;
            let tm_toint = parseFloat(tm_totxt).toFixed(2);
            location.href = 'SetConfidence_Pre.php?tm='+tm_toint+'&incorr_cnt=1&choose='+selAns+'';
        }

    }

    window.onload = function() {
        let imgg = document.getElementsByTagName("img");
        let width = imgg[0].naturalWidth;
        if(width == 0){
            location.replace('Pre_middle_Loop.php');
        }
        setTimeout(()=>{
            location.href='Pre_middle_Loop.php';
        }, 5000);
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

        $("#clock").val(seconds);
    }

    setInterval(() => {
        setTimer();
    },1000 );

</script>
</body>
</html>

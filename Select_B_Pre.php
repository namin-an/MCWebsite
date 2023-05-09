<?php
session_start();

?>
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <title>퀴즈</title>
    <!--제이쿼리-->
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
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi1']?>.JPEG" alt="1번" id="<?php echo $_SESSION['Pre_Bogi1']?>" onclick="chk(this)">
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi2']?>.JPEG" alt="2번" id="<?php echo $_SESSION['Pre_Bogi2']?>" onclick="chk(this)">
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi3']?>.JPEG" alt="3번" id="<?php echo $_SESSION['Pre_Bogi3']?>" onclick="chk(this)">
    <img src="pre_img/A/<?php echo $_SESSION['Pre_Bogi4']?>.JPEG" alt="4번" id="<?php echo $_SESSION['Pre_Bogi4']?>" onclick="chk(this)">
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
        if(selAns == <?php echo $_SESSION['choose']?>){
            return false;
        }

        if(selAns == <?php echo $_SESSION['NOWANSWER']?>){
            let time = $('#clock').val();
            let tm_totxt = time+"."+mil;
            let tm_toint = parseFloat(tm_totxt).toFixed(2);
            location.href = 'Pre_Loop.php?tm='+tm_toint+'&corr_cnt=1&choose='+selAns+'';
        }else{
            let time = $('#clock').val();
            let tm_totxt = time+"."+mil;
            let tm_toint = parseFloat(tm_totxt).toFixed(2);
            location.href = 'Pre_Loop.php?tm='+tm_toint+'&incorr_cnt=1&choose='+selAns+'';
        }

    }

    window.onload = function() {
        document.getElementById('<?php echo $_SESSION['choose']?>').style.visibility = "hidden";
        setTimeout(()=>{
            location.href='Pre_last_Loop.php';
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

        $("#clock").val(hour +":" + minutes + ":"+seconds);
    }

    setInterval(() => {
        setTimer();
    },1000 );

</script>
</body>
</html>

<?php
session_start();
include("conn/conn.php");
$QNO = $_SESSION['QNO'];
$query = "select MC1 from MainTest where idx = '$QNO'";
$result = $mysqli -> query($query);
$getdt = mysqli_fetch_array($result);
$MC1 = $getdt['MC1'];
$pre_q1 = str_replace(" ", "", $MC1);
$q1 = explode(",", $pre_q1);
$_SESSION['SelectList1'] = $q1[0];
$_SESSION['SelectList2'] = $q1[1];
$_SESSION['SelectList3'] = $q1[2];
$_SESSION['SelectList4'] = $q1[3];
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Main_1</title>
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
    <img src="Answers/<?php echo $_SESSION['SelectList1']?>.jpg" alt="1번" onclick="chk(this)">
    <img src="Answers/<?php echo $_SESSION['SelectList2']?>.jpg" alt="2번" onclick="chk(this)">
    <img src="Answers/<?php echo $_SESSION['SelectList3']?>.jpg" alt="3번" onclick="chk(this)">
    <img src="Answers/<?php echo $_SESSION['SelectList4']?>.jpg" alt="4번" onclick="chk(this)">
    <input type="hidden" id="clock" value="0">
</div>
<script>
    let progress;
    function chk(txt){
        let presel = $(txt).attr('src').split('/');
        let preans = presel[1].split('.');
        let selAns = preans[0];
        if(selAns == <?php echo $_SESSION['Answer']?>){
            alert('정답');
            let time = $('#clock').val();
            location.href = 'AddWeight.php?tm='+time+'&corr_cnt=1&selec='+selAns;
        }else{
            alert('오답');
            let time = $('#clock').val();
            location.href = 'AddWeight.php?tm='+time+'&incorr_cnt=1&selec='+selAns;
        }

    }

    window.onload = function() {
        setTimeout(()=>{
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

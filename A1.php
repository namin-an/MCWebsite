<?php
session_start();
include("conn/conn.php");

$query = "select q".$_SESSION['proceed']." as aa from rd1_q order by idx desc limit 1";
$result = $mysqli -> query($query);
$getdt = mysqli_fetch_array($result);

$preA = $getdt['aa'];

$PreQuestionToAnswer = explode("_",$preA);
$_SESSION['A_img'] = $PreQuestionToAnswer[0];

$AnswerList = array(
    "19070231","19070311","19070522","19071131","19071821","19072221","19072922","19080133","19081421","19081632","19082032",
    "19082131","19090222","19090631","19092521","19092711"
);

$find = array_search($_SESSION['A_img'],$AnswerList);
array_splice($AnswerList, $find, 1);

shuffle($AnswerList);

$BogiList = array($_SESSION['A_img'], $AnswerList[0],$AnswerList[1],$AnswerList[2]);
shuffle($BogiList);

$_SESSION['SelectList1'] = $BogiList[0];
$_SESSION['SelectList2'] = $BogiList[1];
$_SESSION['SelectList3'] = $BogiList[2];
$_SESSION['SelectList4'] = $BogiList[3];

?>
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Main_1</title>
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
   
        if(selAns == <?php echo $_SESSION['A_img']?>){
            alert('정답');
            let time = $('#clock').val();
            location.href = 'Conf.php?tm='+time+'&corr_cnt=1&selec='+selAns;
        }else{
            alert('오답');
            let time = $('#clock').val();
            location.href = 'Conf.php?tm='+time+'&incorr_cnt=1&selec='+selAns;
        }

    }


    window.onload = function() {
        setTimeout(()=>{
            location.href='MainQ.php';
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

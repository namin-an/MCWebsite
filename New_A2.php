<?php
session_start();
include("conn/conn.php");
//

$NewList = array($_SESSION['SelectList1'],$_SESSION['SelectList2'],$_SESSION['SelectList3'],$_SESSION['SelectList4']);
$find = array_search($_SESSION['selec'],$NewList);

array_splice($NewList, $find, 1);
shuffle($NewList);

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
    <img src="Answers/<?php echo $NewList[0]?>.jpg" alt="1번" onclick="chk(this)">
    <img src="Answers/<?php echo $NewList[1]?>.jpg" alt="2번" onclick="chk(this)">
    <img src="Answers/<?php echo $NewList[2]?>.jpg" alt="3번" onclick="chk(this)">

    <input type="hidden" id="clock" value="0">
</div>
<script>
    //문제번호
    let progress;

    //정답체크
    function chk(txt){

        console.log(txt);

        //선택문항
        let presel = $(txt).attr('src').split('/');
        let preans = presel[1].split('.');
        let selAns = preans[0];
        //alert('선택답안 : ' +selAns);

        //답안 비교
        if(selAns == <?php echo $_SESSION['Answer']?>){
            alert('정답');
            //소요시간
            let time = $('#clock').val();
            location.href = 'NewA2_fin.php?tm='+time+'&corr_cnt=1&selec='+selAns;
        }else{
            alert('오답');
            let time = $('#clock').val();
            location.href = 'NewA2_fin.php?tm='+time+'&incorr_cnt=1&selec='+selAns;
        }

    }

    //온로드
    window.onload = function() {
        //5초 뒤 이동
        setTimeout(()=>{
            //location.href='rand.php';
        }, 5000);
    }

    //시간
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

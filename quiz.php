<?php
    session_start();
    $Answer = $_SESSION['A'];
    $List1 = $_SESSION['L1'];
    $List2 = $_SESSION['L2'];
    $List3 = $_SESSION['L3'];

    $pre_tests = array($Answer, $List1, $List2, $List3);
    shuffle($pre_tests);

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
        <img src="animal_img/<?php echo $pre_tests[0]?>s.jpg" alt="1번" onclick="chk(this)">
        <img src="animal_img/<?php echo $pre_tests[1]?>s.jpg" alt="2번" onclick="chk(this)">
        <img src="animal_img/<?php echo $pre_tests[2]?>s.jpg" alt="3번" onclick="chk(this)">
        <img src="animal_img/<?php echo $pre_tests[3]?>s.jpg" alt="4번" onclick="chk(this)">
        <input type="hidden" id="clock" value="0:00:00">
    </div>
<script>
    let progress;
    function chk(txt){
        let presel = $(txt).attr('src').split('/');
        let preans = presel[1].split('.');
        let selAns = preans[0];
        if(selAns.includes('<?php echo $_SESSION['A']?>') === true){
            alert('정답');
            //소요시간
            let time = $('#clock').val();
            location.href = 'Loop.php?tm='+time+'&corr_cnt=1';
        }else{
            alert('오답');
            let time = $('#clock').val();
            location.href = 'Loop.php?tm='+time+'&incorr_cnt=1';
        }

    }

    window.onload = function() {
        setTimeout(()=>{
            location.href='rand.php';
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

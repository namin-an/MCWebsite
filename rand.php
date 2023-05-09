<?php
    session_start();
    $Animals = array('lion','cat','cow','pig','rabbit','tiger');
    shuffle($Animals);

    $Answer = $Animals[0];
    $List1 = $Animals[1];
    $List2 = $Animals[2];
    $List3 = $Animals[3];

    $_SESSION['A'] = $Answer;
    $_SESSION['L1'] = $List1;
    $_SESSION['L2'] = $List2;
    $_SESSION['L3'] = $List3;

    if($_SESSION['progress'] == ''){
        $_SESSION['progress'] = 1;
    }

?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>출제</title>
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
    <img class="MainImg" src="animal_img/<?php echo $Animals[0]?>.jpg" alt="1번" id="image">
</div>
<input type="hidden" id="clock" >

<script>
    window.onload = function() {
        setTimeout(()=>{
            location.href='delay.php';
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

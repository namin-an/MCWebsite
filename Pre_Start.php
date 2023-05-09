<?php
session_start();

$Alphabets = array("A","B","C","D","E","F","G","H","I");
shuffle($Alphabets);

if($_SESSION['progress'] == 1){
    $Now_Q = $_SESSION['Answer1']."/".$Alphabets[0].".JPEG";
}elseif ($_SESSION['progress'] == 2){
    $Now_Q = $_SESSION['Answer2']."/".$Alphabets[0].".JPEG";
}elseif ($_SESSION['progress'] == 3){
    $Now_Q = $_SESSION['Answer3']."/".$Alphabets[0].".JPEG";
}elseif ($_SESSION['progress'] == 4){
    $Now_Q = $_SESSION['Answer4']."/".$Alphabets[0].".JPEG";
}elseif ($_SESSION['progress'] == 5){
    $Now_Q = $_SESSION['Answer5']."/".$Alphabets[0].".JPEG";
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
    <img class="MainImg" src="pre_img/Q/<?php echo $Now_Q?>" alt="문제" id="image">
</div>
<input type="hidden" id="clock" >

<script>
    window.onload = function() {
        setTimeout(()=>{
            location.href='Wait_pre.php';
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

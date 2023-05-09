<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>문제</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
    />
    <style>
        body {
            align-items: center;
            text-align: center;
            justify-content: center;
            align-content: center;
            display: flex;
            min-height: 100vh;
        }
        .tot {
            display: flex;
            flex-direction: column;
        }
        .MainImg {
            line-height: 1;
            width: 300px;
            height: 300px;
        }
        .tot > div {
            padding: 50px;

        }
        .question {
            font-size: 3em;
            padding: 30px;
        }
        .yes {
            font-size: 3.1em;
            color: red;
            font-weight: 900;
        }
        .no {
            font-size: 3.1em;
            color: blue;
            font-weight: 900;
        }

        .yes:hover {
            animation: tongtong 0.1s linear 0s;
        }
        .list_wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .list_wrapper > div {
            padding: 20px;
            border: 1px solid greenyellow;
            margin: 10px;
            width: 100px;
            border-radius: 15px;
            font-size: 1.2em;
            font-weight: 700;
            margin-top: 0px;

        }

        .list_wrapper > div:hover {
            animation: tongtong 0.3s linear 0s ;
        }

        @keyframes tongtong {
            0%
            {
                transform: translateY(0);
            }
            100%
            {
                transform: translateY(-15px);
            }
        }

        h1 {
            position: absolute;
            top: 40%;
            right: 0;
        }
    </style>
</head>
<body>
<div class="tot">
    <div>
        <img class="MainImg" src="posttest_sample_for_dev/19092521/32PIX_4GS_S001L1E01C7.jpg" alt="문제" id="image">
    </div>
    <div>
        <h1 onclick="GoNext()">다음 <i class="fas fa-3x fa-arrow-circle-right"></i></h1>
    </div>
    <div class="q1">
        <span class="question">1. 사람 얼굴인지 알아볼 수 </span>
        <span class="yes" id="yes" onclick="say_yes(this)">있다.</span>
        <span class="question">/</span>
        <span class="no" id="no" onclick="say_no(this)">없다.</span>
    </div>
    <div class="q2">
        <span class="question">2. 얼굴 부위 중 어느 부위에 초점을 맞추고 답을 선택하셨나요?</span>
    </div>
    <div class="list_wrapper">
        <div class="select" value="1" onclick="InsertFocus(this)">머리</div>
        <div class="select" value="2" onclick="InsertFocus(this)">눈</div>
        <div class="select" value="3" onclick="InsertFocus(this)">코</div>
        <div class="select" value="4" onclick="InsertFocus(this)">입</div>
        <div class="select" value="5" onclick="InsertFocus(this)">귀</div>
        <div class="select" value="6" onclick="InsertFocus(this)">눈썹</div>
        <div class="select" value="7" onclick="InsertFocus(this)">얼굴 윤곽</div>
        <div class="select" value="8" onclick="InsertFocus(this)">얼굴 외 배경</div>
    </div>
</div>
<form id="frm" action="action/Post_Test_MC3_B_Action.php" method="post">
    <input type="hidden" id="ask" name="ask">
    <input type="hidden" id="clock">
    <input type="hidden" id="recognize_face" name="recognize_face">
    <input type="hidden" id="wht_focus" name="wht_focus">
</form>
<script>
    function say_yes(e){
        e.style.border = "3px solid red";
        e.style.padding = "30px";
        e.style.borderRadius = "50%";
        document.getElementById("recognize_face").value = "YES";
        Cancel_No();
    }

    function say_no(e){
        e.style.border = "3px solid red";
        e.style.padding = "30px";
        e.style.borderRadius = "50%";
        document.getElementById("recognize_face").value = "NO";
        Cancel_Yes();
    }

    function Cancel_Yes(){
        let OO = document.getElementById("yes");
        OO.style.border = "none";
        OO.style.padding = "none";
        OO.style.borderRadius = "none";
    }

    function Cancel_No(){
        let XX = document.getElementById("no");
        XX.style.border = "none";
        XX.style.padding = "none";
        XX.style.borderRadius = "none";
    }

    function InsertFocus(e){
        let i;
        for(i=0; i < 8; i++){
            document.getElementsByClassName("select")[i].style.backgroundColor = "#fff";
            document.getElementsByClassName("select")[i].style.color = "#000000";
        }

        e.style.backgroundColor = "greenyellow";
        e.style.color = "#fff";
        document.getElementById("wht_focus").value = e.getAttribute("value");
    }

    let txt1 = document.getElementById("recognize_face");
    let txt2 = document.getElementById("wht_focus");
    let insertask = document.getElementById("ask");
    let frm = document.getElementById("frm");

    let imgg = document.getElementById('image').getAttribute("src");
    let asw = imgg.split("/");
    let ist = asw[1]+"_"+asw[2];

    function GoNext(){
        insertask.value = ist;
        if(txt1.value == ""){
            alert("알아볼 수 있는지 여부를 선택해주세요");
        }else if(txt2.value == ""){
            alert("초점을 선택해주세요.");
        }else{
            frm.submit();
        }
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

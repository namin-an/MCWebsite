<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>참여자 정보 입력</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #eaeef0;
        }
        .box {
            position: relative;
            width: 650px;
            height: 850px;
            background: #eaeef0;
            border-radius: 20px;
            box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.9), 8px 8px 25px rgba(0,0,0,0.5);
            border: 1px solid #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .wrapper {
            position: relative;
            width: 650px;
            height: max-content;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lb {
            margin-bottom: 50px;
            font-weight: 800;
            font-size: 1.5em;
            color: #444444;
        }

        .age, .sight{
            width: 400px;
            height: 50px;
            margin: 30px;
            font-size: 25px;
            border: 6px solid transparent;
            border-radius: 15px;
            background-image: linear-gradient(#444444, #444444), linear-gradient(to right, #fbfcb9be, #ffcdf3aa, #65d3ffaa);
            background-origin: border-box;
            background-clip: content-box, border-box;
            color: #fff;
            text-align: center;
        }

        .gender {
            width: 400px;
            height: 50px;
            margin: 30px;
            font-size: 25px;
            border: 6px solid transparent;
            border-radius: 15px;
            background-image: linear-gradient(#444444, #444444), linear-gradient(to right, #fbfcb9be, #ffcdf3aa, #65d3ffaa);
            background-origin: border-box;
            background-clip: content-box, border-box;
            color: #fff;
            text-align: center;
        }
        .grade {
            width: 400px;
            height: 50px;
            margin: 30px;
            font-size: 25px;
            border: 6px solid transparent;
            border-radius: 15px;
            background-image: linear-gradient(#444444, #444444), linear-gradient(to right, #fbfcb9be, #ffcdf3aa, #65d3ffaa);
            background-origin: border-box;
            background-clip: content-box, border-box;
            color: #fff;
            text-align: center;
        }

        button {
            width: 300px;
            height: 50px;
            position: relative;
            border: none;
            box-shadow: none;
            line-height: 52px;
            -webkit-perspective: 230px;
            perspective: 230px;
        }

        button span {
            background: rgb(0, 172, 238);
            background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
            display: block;
            position: absolute;
            width: 300px;
            height: 50px;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, 5),
            7px 7px 20px 0px rgba(0,0,0,0.1),
            4px 4px 5px 0px rgba(0,0,0,0.1);
            border-radius: 5px;
            margin: 0;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all .3s;
            transition: all .3s;
            color: #fff;
            font-size: 1.5em;
            letter-spacing: 3px;
        }

        button span:nth-child(1){
            box-shadow: -7px -7px 20px 0px #fff9,
            -4px -4px 5px 0px #fff9,
            7px 7px 20px 0px #0002,
            4px 4px 5px 0px #0001;
            -webkit-transform: rotateX(90deg);
            -mox-transform: rotateX(90deg);
            transform: rotateX(90deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
        }

        button span:nth-child(2){
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
            transform-origin: 50% 50% -20px;
        }

        button:hover span:nth-child(1){
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, 5),
            7px 7px 20px 0px rgba(0,0,0,0.1),
            4px 4px 5px 0px rgba(0,0,0,0.1);
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
        }

        button:hover span:nth-child(2){
            box-shadow: 2px 2px 2px 0px rgba(255, 255, 255, 5),
            7px 7px 20px 0px rgba(0,0,0,0.1),
            4px 4px 5px 0px rgba(0,0,0,0.1);
            color: transparent;
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
        }
    </style>
</head>
<body>
<div class="box">
    <form id="infoform" action="action/InsertInfoAction.php" method="post">
    <div class="wrapper">
        <label for="age" class="lb">나이</label>
        <input type="number" id="age" class="age" name="age" placeholder="나이를 입력해주세요."/>
    </div>
    <div class="wrapper">
        <label for="gender" class="lb">성별</label>
        <select name="gender" id="gender" class="gender">
            <option value="1">남</option>
            <option value="2">여</option>
        </select>
    </div>
    <div class="wrapper">
        <label for="grade" class="lb">학력</label>
        <select name="grade" id="grade" class="grade">
            <option value="박사">박사</option>
            <option value="석사">석사</option>
            <option value="대졸">대졸</option>
            <option value="고졸">고졸</option>
            <option value="중졸">중졸</option>
            <option value="초졸">초졸</option>
            <option value="None">없음</option>
        </select>
    </div>
    <div class="wrapper">
        <label for="sight" class="lb">시력</label>
        <input type="number" id="sight" class="sight" name="sight" placeholder="시력을 입력해주세요."/>
    </div>
    </form>
    <div class="wrapper">
        <button onclick="Sbm()"><span>종료</span><span>제출하기</span></button>
    </div>
</div>
<script>
    let UserAge = document.getElementById("age");
    let UserSight = document.getElementById("sight");
    let InfoForm = document.getElementById("infoform");

    function Sbm(){
        if(UserAge.value == '' || UserSight == ''){
            alert('정보를 모두 입력해주세요!');
        }else{
            InfoForm.submit();
        }
    }
</script>
</body>
</html>
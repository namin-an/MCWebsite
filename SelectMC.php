<?php
unset($_SESSION['progress']);

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTRO</title>
    <style>
        body {
            color: #fff;
            background: #17181c;
            font: 300 1em "Fira Sans", sans-serif;
            justify-content: center;
            align-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            display: flex;
        }
        .go-mc1, .go-mc2, .go-mc3 {
            background: none;
            border: 2px solid;
            font: inherit;
            line-height: 1;
            margin: 0.5em;
            /*padding: 1em 2em;*/
            width: 300px;
            height: 100px;
            font-size: 1.8em;
            letter-spacing: 15px;
        }


        .go-mc1 {
            --color: #19bc8b;
            --hover: #1973bc;
        }

        .go-mc2 {
            --color: #8fc866;
            --hover: #66c887;
        }
        .go-mc3 {
            --color: #ffa100;
            --hover: #ffe900;
        }

        .go-resume {
            --color: #eb3aff;
            --hover: #3afffb;
            background: none;
            border: 2px solid;
            font: inherit;
            line-height: 1;
            margin: 0.5em;
            /*padding: 1em 2em;*/
            width: 970px;
            height: 100px;
            font-size: 1.8em;
            letter-spacing: 15px;
        }

        button {
            color: var(--color);
            transition: 0.25s;
        }
        button:hover, button:focus {
            border-color: var(--hover);
            color: #fff;
        }
    </style>
</head>
<body>
<div class="tot">
    <button class="go-mc1" onclick="Go_MC1()">MC1</button>
    <button class="go-mc2" onclick="Go_MC2()">MC2</button>
    <button class="go-mc3" onclick="Go_MC3()">MC3</button>
    <button class="go-resume" onclick="Go_resume()">불러오기</button>
</div>
<script>
    function Go_MC1(){
        location.href = "YourID_1.php";
    }
    function Go_MC2(){
        location.href = "YourID_2.php";
    }
    function Go_MC3(){
        location.href = "YourID_3.php";
    }
    function Go_resume(){
        location.href = "Go_resume.php";
    }
</script>
</body>
</html>
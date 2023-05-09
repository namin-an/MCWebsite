<?php
    session_start();
    unset($_SESSION['progress']);
    unset($_SESSION['QNO']);
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
        button {
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

        .go-pre, .go-tst {
            box-shadow: 0.3em 0.3em 0 0 var(--color), inset 0.3em 0.3em 0 0 var(--color);
        }
        .go-pre:hover, .go-pre:focus, .go-tst:hover, .go-tst:focus {
            box-shadow: 0 0 0 0 var(--hover), inset 6em 3.5em 0 0 var(--hover);
        }
        .go-pre {
            --color: #19bc8b;
            --hover: #1973bc;
        }

        .go-tst {
            --color: #8fc866;
            --hover: #66c887;
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
    <button class="go-pre" onclick="GoPre()">Pre-Test</button>
    <button class="go-tst" onclick="GoTst()">Main-Test</button>
</div>
<script>
    function GoPre(){
        location.href = "YourID_pre.php";
    }
    function GoTst(){
        location.href = "SelectMC.php";
    }
</script>
</body>
</html>
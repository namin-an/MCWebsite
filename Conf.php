<?php
    session_start();
    include("conn/conn.php");
    $idx = $_SESSION['idx'];
    $t1 = $_GET['tm'];
    $s1 = $_GET['selec'];
    $_SESSION['selec'] = $_GET['selec'];
    $sql = "update rd1_fa set fs".$_SESSION['proceed']." = '$s1', ft".$_SESSION['proceed']." = '$t1'  where idx='$idx'";
    $result = $mysqli -> query($sql);

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>선택</title>
    <style>
        body {
            align-content: center;
            align-items: center;
            justify-content: center;
            text-align: center;
            display: flex;
            min-height: 100vh;
        }
        button {
            width: 400px;
            height: 200px;
            margin: 50px 50px 50px;
            font-size: 3em;
            letter-spacing: 25px;
            text-align: center;
            border-radius: 15px;
            color: white;
            font-weight: 999;
        }

        .posi_btn {
            background: linear-gradient(90deg, #7b81ec, #3bd1d3);
        }
        .nega_btn {
            background: linear-gradient(90deg, #fa80d2, #fed757);
        }

    </style>
</head>
<body>
    <div class="tot">
        <button class="posi_btn" id="plus" onclick="Positive()">확신</button>
        <button class="nega_btn" id="minus" onclick="Negative()">비확신</button>
    </div>
    <script>
        function Positive(){
            location.href = "A1_fin.php";
        }
        function Negative(){
            location.href = "A2.php";
        }
    </script>
</body>
</html>

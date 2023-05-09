<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>아이디 입력</title>
</head>
<style>
    body {
        background-image: url("./bgg2.jpeg");
        background-size: cover;
        display: flex;
        justify-content: center;
        min-height: 100vh;
        align-items: center;
        position: relative;
        background-color: #000;

    }

    body::before {
        content: "";
        opacity: 0.3;
        position: absolute;
        top: 0px;
        right: 0px;
        left: 0px;
        bottom: 0px;
        background-color: #000;
    }

    .tot {
        width: 60%;
        height: 500px;
        background-color: #fff;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 999;

    }

    form {
        display: flex;
        flex-direction: column;
        width: 100%;
        align-items: center;
        height: 50%;
    }

    img {
        width: 250px;
        padding: 20px;
    }

    input {
        width: 80%;
        height: 50px;
        margin-top: 20px;
        font-size: 1.3em;
        border: 1px solid #2992D1;
    }

    button {
        width: 80.8%;
        height: 60px;
        margin-top: 30px;
        border : none;
        background-color: #2992D1;
        color: #fff;
        font-size: 1.5em;
        letter-spacing: 5px;
        font-weight: 900;
    }
</style>
<body>
<div class="tot">
    <img src="./kist_logo.png" alt="">
    <form action="./Go_Pre.php" method="POST">
        <input type="text" name="uid" placeholder="부여받은 아이디를 입력해주세요. ex)00000001">
        <button>시작하기</button>
    </form>
</div>
</body>
</html>
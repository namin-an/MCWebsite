<?php
    include('conn/conn.php');
    $addr = $_SERVER["REMOTE_ADDR"];
    $progress = $_COOKIE['progress'];
    $progress *= 1;
    $progress -= 1;
    $clock = $_COOKIE['clock'];
    $subAns = $_COOKIE['phpSubAns'];
    $subAns = explode("/", $subAns);
    $sumStr = "$subAns[1]/$subAns[2], $clock";
    $sql = " update tst_userSel set q$progress = '$sumStr' where uAddr = '$addr' ";
    $result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <a><button onclick="chk(1)">high(확신:1)</button></a>
      <a><button onclick="chk(0)">low(비확신:0)</button></a>

      <script>
          let progress;
          function setCookie(cookie_name, value, days) {
              var exdate = new Date();
              exdate.setDate(exdate.getDate() + days);
              var cookie_value = escape(value) + ((days == null) ? '' : '; expires=' + exdate.toUTCString());
              document.cookie = cookie_name + '=' + cookie_value;
          }
          function getCookie(cookie_name) {
            var x, y;
            var val = document.cookie.split(';');
            for (var i = 0; i < val.length; i++) {
              x = val[i].substr(0, val[i].indexOf('='));
              y = val[i].substr(val[i].indexOf('=') + 1);
              x = x.replace(/^\s+|\s+$/g, '');
              if (x == cookie_name) {
                return unescape(y);
              }
            }
          }

          function chk(num){

              if(num == 1){
                  progress = getCookie('progress');
                  let answer = getCookie('answer');
                  let subAns = getCookie('subAns');
                  let wrong = getCookie('wrong');
                  if(answer == subAns){
                    alert('정답');
                    progress *= 1;
                    progress += 1;
                    setCookie('progress', progress, '1');
                  } else {
                    alert('오답');
                    wrong *= 1;
                    wrong += 1;
                    progress *= 1;
                    progress += 1;
                    setCookie('progress', progress, '1');
                    setCookie('wrong', wrong, '1');
                  }
                  alert(getCookie('progress'));
                  location.href='sample2.php';
              } else {
                  setCookie('try', 1, '1');
                  location.href='sample_quiz2.php';
              }

          }
      </script>
  </body>
</html>

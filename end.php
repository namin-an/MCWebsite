<?php

    include('conn/conn.php');
    $addr = $_SERVER["REMOTE_ADDR"];

    $sql = " select * from tst_user where uAddr = '$addr'";
    $result = $mysqli->query($sql);

    $sql2 = " select * from tst_userSel where uAddr = '$addr'";
    $result2 = $mysqli->query($sql2);
?>

<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

        <?php
          while($row = mysqli_fetch_array($result)){
              $row2 = mysqli_fetch_array($result2);
              $fields = mysqli_num_fields($result);
              for($i = 1; $i <= $fields-2; $i ++){

                    $query = $i - 1;
                    $query = 'q'.$query;

                    $expl = explode("/", $row[$query]);
                    $explo = explode(",", $row2[$query]);

                    echo $i."번 문제";
                    echo "<img src=./sample_for_dev_test/$row[$query]>";
                    echo $i."번 답안";
                    echo "<img src=./sample_for_dev_mc/$expl[0]/S001L1E01C7.jpg >"."<br>";

                    echo $i."번 문제 1차시 제출 답안 - ";
                    echo "<img src=./sample_for_dev_mc/$explo[0] >"."<br>";
                    echo $i."번 문제 1차시 소요시간 - ";
                    echo $explo[1]."초<br>";
                    echo $i."번 문제 2차시 제출 답안 - ";

                    if(count($explo) <= 2){
                      echo "선택사항 없음<br>";
                      echo "$i"."번 문제 2차시 소요시간 - 선택사항 없음<br><br><br>";
                    } else {
                      echo "<img src=./sample_for_dev_mc/$explo[2] >"."<br>";
                      echo "$i"."번 문제 2차시 소요시간 - ";
                      echo $explo[3]."초<br><br><br>";
                    }


              }

          }

          ?>

          <button onclick="location.href='main.html'">메인으로 이동</button>
  </body>
</html>

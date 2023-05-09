<?php
    session_start();
    include ('conn/conn.php');

    $sql = "SELECT a.idx, b.fs1, b.ft1, b.fs2, b.ft2, b.fs3, b.ft3, b.fs4, b.ft4, b.fs5, b.ft5, c.ss1, c.st1, c.ss2, c.st2, c.ss3, c.st3, c.ss4, c.st4, c.ss5, c.st5 from UserData as a, rd1_fa as b, rd1_sa as c where a.idx=b.idx and a.idx=c.idx";
    $res = mysqli_query($mysqli, $sql);

?>
<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>샘플 데이터</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table tr th {
            border: 2px solid black;
        }
        table tr td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>유저식별번호</th>
            <th>출제순서</th>
            <th>선택A_1</th>
            <th>선택B_1</th>
            <th>시간A_1</th>
            <th>시간B_1</th>
            <th>선택A_2</th>
            <th>선택B_2</th>
            <th>시간A_2</th>
            <th>시간B_2</th>
            <th>선택A_3</th>
            <th>선택B_3</th>
            <th>시간A_3</th>
            <th>시간B_3</th>
            <th>선택A_4</th>
            <th>선택B_4</th>
            <th>시간A_4</th>
            <th>시간B_4</th>
            <th>선택A_5</th>
            <th>선택B_5</th>
            <th>시간A_5</th>
            <th>시간B_5</th>
        </tr>
<?php
while($row = mysqli_fetch_array($res)){
$idx = $row['idx'];
$fs1 = $row['fs1'];
$ss1 = $row['ss1'];
$ft1 = $row['ft1'];
$st1 = $row['st1'];
    $fs2 = $row['fs2'];
    $ss2 = $row['ss2'];
    $ft2 = $row['ft2'];
    $st2 = $row['st2'];
    $fs3 = $row['fs3'];
    $ss3 = $row['ss3'];
    $ft3 = $row['ft3'];
    $st3 = $row['st3'];
    $fs4 = $row['fs4'];
    $ss4 = $row['ss4'];
    $ft4 = $row['ft4'];
    $st4 = $row['st4'];
    $fs5 = $row['fs5'];
    $ss5 = $row['ss5'];
    $ft5 = $row['ft5'];
    $st5 = $row['st5'];

?>
        <tr>
            <td><?php echo $idx?></td>
            <td></td>
            <td><?php echo $fs1?></td>
            <td><?php echo $ss1?></td>
            <td><?php echo $ft1?></td>
            <td><?php echo $st1?></td>
            <td><?php echo $fs2?></td>
            <td><?php echo $ss2?></td>
            <td><?php echo $ft2?></td>
            <td><?php echo $st2?></td>
            <td><?php echo $fs3?></td>
            <td><?php echo $ss3?></td>
            <td><?php echo $ft3?></td>
            <td><?php echo $st3?></td>
            <td><?php echo $fs4?></td>
            <td><?php echo $ss4?></td>
            <td><?php echo $ft4?></td>
            <td><?php echo $st4?></td>
            <td><?php echo $fs5?></td>
            <td><?php echo $ss5?></td>
            <td><?php echo $ft5?></td>
            <td><?php echo $st5?></td>
        </tr>
<?php
}
?>
    </table>
</body>
</html>
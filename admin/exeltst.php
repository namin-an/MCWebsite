<?php
include ("conn/conn.php");
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = excel_test.xls" ); 
header( "Content-Description: PHP4 Generated Data" );


$EXCEL_FILE = "

<table border='1'>

    <tr>

       <td>사용자ID</td>

       <td>이름</td>

       <td>성</td>

       <td>E-mail</td>

       <td>Phone</td>

    </tr>

";



$qry = "SELECT a.idx, b.fs1, b.ft1, b.fs2, b.ft2, b.fs3, b.ft3, b.fs4, b.ft4, b.fs5, b.ft5, c.ss1, c.st1, c.ss2, c.st2, c.ss3, c.st3, c.ss4, c.st4, c.ss5, c.st5 from UserData as a, rd1_fa as b, rd1_sa as c where a.idx=b.idx and a.idx=c.idx";

$res = $mysqli->query($qry);


while ($row = $res->fetch_object()) {

    $EXCEL_FILE .= "

    <tr>

       <td>".$row->idx."</td>

       <td>".$row->fs1."</td>

       <td>".$row->ft1."</td>

       <td>".$row->fs2."</td>

       <td>".$row->fs3."</td>

    </tr>

";

}



$EXCEL_FILE .= "</table>";


echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>

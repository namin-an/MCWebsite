<?php
include ("conn/conn.php");

header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = post_test.xls" );
header( "Content-Description: PHP4 Generated Data" );

$EXCEL_FILE = "

<table border='1'>
    <tr>
       <td>유저식별아이디</td>
       <td>나이</td>
       <td>성별</td>
       <td>학력</td>
       <td>시력</td>
       <td>참여일자</td>
       <td>MC구분</td>
       <td>문제A</td>
       <td>답A-1</td>
       <td>답A-2</td>
       <td>문제B</td>
       <td>답B-1</td>
       <td>답B-2</td>
       <td>문제C</td>
       <td>답C-1</td>
       <td>답C-2</td>
       <td>문제D</td>
       <td>답D-1</td>
       <td>답D-2</td>
       <td>문제E</td>
       <td>답E-1</td>
       <td>답E-2</td>
       <td>문제F</td>
       <td>답F-1</td>
       <td>답F-2</td>
    </tr>

";


$qry = "SELECT uid, Age, Gender, Grade, Sight, S_time, SelectMC, POST_Q1, POST_A_A1, POST_A_A2, POST_Q2, POST_B_A1, POST_B_A2, POST_Q3, POST_C_A1, POST_C_A2, POST_Q4, POST_C_A1, POST_C_A2, POST_Q4, POST_D_A1, POST_D_A2, POST_Q5, POST_E_A1, POST_E_A2, POST_Q6, POST_F_A1, POST_F_A2 from Data_Users";
$res = $mysqli->query($qry);

while ($row = $res->fetch_object()) {

    $EXCEL_FILE .= "

    <tr>
       <td>".$row->uid."</td>
       <td>".$row->Age."</td>
       <td>".$row->Gender."</td>
       <td>".$row->Grade."</td>
       <td>".$row->Sight."</td>
       <td>".$row->S_time."</td>
       <td>".$row->SelectMC."</td>
       <td>".$row->POST_Q1."</td>
       <td>".$row->POST_A_A1."</td>
       <td>".$row->POST_A_A2."</td>
       <td>".$row->POST_Q2."</td>
       <td>".$row->POST_B_A1."</td>
       <td>".$row->POST_B_A2."</td>
       <td>".$row->POST_Q3."</td>
       <td>".$row->POST_C_A1."</td>
       <td>".$row->POST_C_A2."</td>
       <td>".$row->POST_Q4."</td>
       <td>".$row->POST_D_A1."</td>
       <td>".$row->POST_D_A2."</td>
       <td>".$row->POST_Q5."</td>
       <td>".$row->POST_E_A1."</td>
       <td>".$row->POST_E_A2."</td>
       <td>".$row->POST_Q6."</td>
       <td>".$row->POST_F_A1."</td>
       <td>".$row->POST_F_A2."</td>
    </tr>

";

}



$EXCEL_FILE .= "</table>";

echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>

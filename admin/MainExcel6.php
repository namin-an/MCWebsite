<?php
include ("conn/conn.php");

header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = main_test.xls" );
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
";

for($k=401; $k<481; $k++){
    $EXCEL_FILE .= "       
       <td>선택_A_".$k."</td>
       <td>시간_A_".$k."</td>
       <td>확신_".$k."</td>
       <td>선택_B_".$k."</td>
       <td>시간_B_".$k."</td>
    ";
}
"</tr>";


$qry = "SELECT u.uid, u.Age, u.Gender, u.Grade, u.Sight, u.SelectMC, ";
for($ii = 401; $ii < 481; $ii++){
    $qry .= "a2.SelectA_".$ii.", a2.TimeA_".$ii.", a2.Confidence_".$ii.", b2.SelectB_".$ii.", b2.TimeB_".$ii.",";
}
$qry .= "u.S_time from Data_Users as u, Data_A_6 as a2, Data_B_6 as b2 where u.uid = a2.uid and u.uid = b2.uid";
$res = $mysqli->query($qry);

//echo $qry;

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
       <td>".$row->SelectA_401."</td>
       <td>".$row->TimeA_401."</td>
       <td>".$row->Confidence_401."</td>
       <td>".$row->SelectB_401."</td>
       <td>".$row->TimeB_401."</td>
       <td>".$row->SelectA_402."</td>
       <td>".$row->TimeA_402."</td>
       <td>".$row->Confidence_402."</td>
       <td>".$row->SelectB_402."</td>
       <td>".$row->TimeB_402."</td>
       <td>".$row->SelectA_403."</td>
       <td>".$row->TimeA_403."</td>
       <td>".$row->Confidence_403."</td>
       <td>".$row->SelectB_403."</td>
       <td>".$row->TimeB_403."</td>
       <td>".$row->SelectA_404."</td>
       <td>".$row->TimeA_404."</td>
       <td>".$row->Confidence_404."</td>
       <td>".$row->SelectB_404."</td>
       <td>".$row->TimeB_404."</td>
       <td>".$row->SelectA_405."</td>
       <td>".$row->TimeA_405."</td>
       <td>".$row->Confidence_405."</td>
       <td>".$row->SelectB_405."</td>
       <td>".$row->TimeB_405."</td>
       <td>".$row->SelectA_406."</td>
       <td>".$row->TimeA_406."</td>
       <td>".$row->Confidence_406."</td>
       <td>".$row->SelectB_406."</td>
       <td>".$row->TimeB_406."</td>
       <td>".$row->SelectA_407."</td>
       <td>".$row->TimeA_407."</td>
       <td>".$row->Confidence_407."</td>
       <td>".$row->SelectB_407."</td>
       <td>".$row->TimeB_407."</td>
       <td>".$row->SelectA_408."</td>
       <td>".$row->TimeA_408."</td>
       <td>".$row->Confidence_408."</td>
       <td>".$row->SelectB_408."</td>
       <td>".$row->TimeB_408."</td>
       <td>".$row->SelectA_409."</td>
       <td>".$row->TimeA_409."</td>
       <td>".$row->Confidence_409."</td>
       <td>".$row->SelectB_409."</td>
       <td>".$row->TimeB_409."</td>
       <td>".$row->SelectA_410."</td>
       <td>".$row->TimeA_410."</td>
       <td>".$row->Confidence_410."</td>
       <td>".$row->SelectB_410."</td>
       <td>".$row->TimeB_410."</td>
       <td>".$row->SelectA_411."</td>
       <td>".$row->TimeA_411."</td>
       <td>".$row->Confidence_411."</td>
       <td>".$row->SelectB_411."</td>
       <td>".$row->TimeB_411."</td>
       <td>".$row->SelectA_412."</td>
       <td>".$row->TimeA_412."</td>
       <td>".$row->Confidence_412."</td>
       <td>".$row->SelectB_412."</td>
       <td>".$row->TimeB_412."</td>
       <td>".$row->SelectA_413."</td>
       <td>".$row->TimeA_413."</td>
       <td>".$row->Confidence_413."</td>
       <td>".$row->SelectB_413."</td>
       <td>".$row->TimeB_413."</td>
       <td>".$row->SelectA_414."</td>
       <td>".$row->TimeA_414."</td>
       <td>".$row->Confidence_414."</td>
       <td>".$row->SelectB_414."</td>
       <td>".$row->TimeB_414."</td>
       <td>".$row->SelectA_415."</td>
       <td>".$row->TimeA_415."</td>
       <td>".$row->Confidence_415."</td>
       <td>".$row->SelectB_415."</td>
       <td>".$row->TimeB_415."</td>
       <td>".$row->SelectA_416."</td>
       <td>".$row->TimeA_416."</td>
       <td>".$row->Confidence_416."</td>
       <td>".$row->SelectB_416."</td>
       <td>".$row->TimeB_416."</td>
       <td>".$row->SelectA_417."</td>
       <td>".$row->TimeA_417."</td>
       <td>".$row->Confidence_417."</td>
       <td>".$row->SelectB_417."</td>
       <td>".$row->TimeB_417."</td>
       <td>".$row->SelectA_418."</td>
       <td>".$row->TimeA_418."</td>
       <td>".$row->Confidence_418."</td>
       <td>".$row->SelectB_418."</td>
       <td>".$row->TimeB_418."</td>
       <td>".$row->SelectA_419."</td>
       <td>".$row->TimeA_419."</td>
       <td>".$row->Confidence_419."</td>
       <td>".$row->SelectB_419."</td>
       <td>".$row->TimeB_419."</td>
       <td>".$row->SelectA_420."</td>
       <td>".$row->TimeA_420."</td>
       <td>".$row->Confidence_420."</td>
       <td>".$row->SelectB_420."</td>
       <td>".$row->TimeB_420."</td>
       <td>".$row->SelectA_421."</td>
       <td>".$row->TimeA_421."</td>
       <td>".$row->Confidence_421."</td>
       <td>".$row->SelectB_421."</td>
       <td>".$row->TimeB_421."</td>
       <td>".$row->SelectA_422."</td>
       <td>".$row->TimeA_422."</td>
       <td>".$row->Confidence_422."</td>
       <td>".$row->SelectB_422."</td>
       <td>".$row->TimeB_422."</td>
       <td>".$row->SelectA_423."</td>
       <td>".$row->TimeA_423."</td>
       <td>".$row->Confidence_423."</td>
       <td>".$row->SelectB_423."</td>
       <td>".$row->TimeB_423."</td>
       <td>".$row->SelectA_424."</td>
       <td>".$row->TimeA_424."</td>
       <td>".$row->Confidence_424."</td>
       <td>".$row->SelectB_424."</td>
       <td>".$row->TimeB_424."</td>
       <td>".$row->SelectA_425."</td>
       <td>".$row->TimeA_425."</td>
       <td>".$row->Confidence_425."</td>
       <td>".$row->SelectB_425."</td>
       <td>".$row->TimeB_425."</td>
       <td>".$row->SelectA_426."</td>
       <td>".$row->TimeA_426."</td>
       <td>".$row->Confidence_426."</td>
       <td>".$row->SelectB_426."</td>
       <td>".$row->TimeB_426."</td>
       <td>".$row->SelectA_427."</td>
       <td>".$row->TimeA_427."</td>
       <td>".$row->Confidence_427."</td>
       <td>".$row->SelectB_427."</td>
       <td>".$row->TimeB_427."</td>
       <td>".$row->SelectA_428."</td>
       <td>".$row->TimeA_428."</td>
       <td>".$row->Confidence_428."</td>
       <td>".$row->SelectB_428."</td>
       <td>".$row->TimeB_428."</td>
       <td>".$row->SelectA_429."</td>
       <td>".$row->TimeA_429."</td>
       <td>".$row->Confidence_429."</td>
       <td>".$row->SelectB_429."</td>
       <td>".$row->TimeB_429."</td>
       <td>".$row->SelectA_430."</td>
       <td>".$row->TimeA_430."</td>
       <td>".$row->Confidence_430."</td>
       <td>".$row->SelectB_430."</td>
       <td>".$row->TimeB_430."</td>
       <td>".$row->SelectA_431."</td>
       <td>".$row->TimeA_431."</td>
       <td>".$row->Confidence_431."</td>
       <td>".$row->SelectB_431."</td>
       <td>".$row->TimeB_431."</td>
       <td>".$row->SelectA_432."</td>
       <td>".$row->TimeA_432."</td>
       <td>".$row->Confidence_432."</td>
       <td>".$row->SelectB_432."</td>
       <td>".$row->TimeB_432."</td>
       <td>".$row->SelectA_433."</td>
       <td>".$row->TimeA_433."</td>
       <td>".$row->Confidence_433."</td>
       <td>".$row->SelectB_433."</td>
       <td>".$row->TimeB_433."</td>
       <td>".$row->SelectA_434."</td>
       <td>".$row->TimeA_434."</td>
       <td>".$row->Confidence_434."</td>
       <td>".$row->SelectB_434."</td>
       <td>".$row->TimeB_434."</td>
       <td>".$row->SelectA_435."</td>
       <td>".$row->TimeA_435."</td>
       <td>".$row->Confidence_435."</td>
       <td>".$row->SelectB_435."</td>
       <td>".$row->TimeB_435."</td>
       <td>".$row->SelectA_436."</td>
       <td>".$row->TimeA_436."</td>
       <td>".$row->Confidence_436."</td>
       <td>".$row->SelectB_436."</td>
       <td>".$row->TimeB_436."</td>
       <td>".$row->SelectA_437."</td>
       <td>".$row->TimeA_437."</td>
       <td>".$row->Confidence_437."</td>
       <td>".$row->SelectB_437."</td>
       <td>".$row->TimeB_437."</td>
       <td>".$row->SelectA_438."</td>
       <td>".$row->TimeA_438."</td>
       <td>".$row->Confidence_438."</td>
       <td>".$row->SelectB_438."</td>
       <td>".$row->TimeB_438."</td>
       <td>".$row->SelectA_439."</td>
       <td>".$row->TimeA_439."</td>
       <td>".$row->Confidence_439."</td>
       <td>".$row->SelectB_439."</td>
       <td>".$row->TimeB_439."</td>
       <td>".$row->SelectA_440."</td>
       <td>".$row->TimeA_440."</td>
       <td>".$row->Confidence_440."</td>
       <td>".$row->SelectB_440."</td>
       <td>".$row->TimeB_440."</td>
       <td>".$row->SelectA_441."</td>
       <td>".$row->TimeA_441."</td>
       <td>".$row->Confidence_441."</td>
       <td>".$row->SelectB_441."</td>
       <td>".$row->TimeB_441."</td>
       <td>".$row->SelectA_442."</td>
       <td>".$row->TimeA_442."</td>
       <td>".$row->Confidence_442."</td>
       <td>".$row->SelectB_442."</td>
       <td>".$row->TimeB_442."</td>
       <td>".$row->SelectA_443."</td>
       <td>".$row->TimeA_443."</td>
       <td>".$row->Confidence_443."</td>
       <td>".$row->SelectB_443."</td>
       <td>".$row->TimeB_443."</td>
       <td>".$row->SelectA_444."</td>
       <td>".$row->TimeA_444."</td>
       <td>".$row->Confidence_444."</td>
       <td>".$row->SelectB_444."</td>
       <td>".$row->TimeB_444."</td>
       <td>".$row->SelectA_445."</td>
       <td>".$row->TimeA_445."</td>
       <td>".$row->Confidence_445."</td>
       <td>".$row->SelectB_445."</td>
       <td>".$row->TimeB_445."</td>
       <td>".$row->SelectA_446."</td>
       <td>".$row->TimeA_446."</td>
       <td>".$row->Confidence_446."</td>
       <td>".$row->SelectB_446."</td>
       <td>".$row->TimeB_446."</td>
       <td>".$row->SelectA_447."</td>
       <td>".$row->TimeA_447."</td>
       <td>".$row->Confidence_447."</td>
       <td>".$row->SelectB_447."</td>
       <td>".$row->TimeB_447."</td>
       <td>".$row->SelectA_448."</td>
       <td>".$row->TimeA_448."</td>
       <td>".$row->Confidence_448."</td>
       <td>".$row->SelectB_448."</td>
       <td>".$row->TimeB_448."</td>
       <td>".$row->SelectA_449."</td>
       <td>".$row->TimeA_449."</td>
       <td>".$row->Confidence_449."</td>
       <td>".$row->SelectB_449."</td>
       <td>".$row->TimeB_449."</td>
       <td>".$row->SelectA_450."</td>
       <td>".$row->TimeA_450."</td>
       <td>".$row->Confidence_450."</td>
       <td>".$row->SelectB_450."</td>
       <td>".$row->TimeB_450."</td>
       <td>".$row->SelectA_451."</td>
       <td>".$row->TimeA_451."</td>
       <td>".$row->Confidence_451."</td>
       <td>".$row->SelectB_451."</td>
       <td>".$row->TimeB_451."</td>
       <td>".$row->SelectA_452."</td>
       <td>".$row->TimeA_452."</td>
       <td>".$row->Confidence_452."</td>
       <td>".$row->SelectB_452."</td>
       <td>".$row->TimeB_452."</td>
       <td>".$row->SelectA_453."</td>
       <td>".$row->TimeA_453."</td>
       <td>".$row->Confidence_453."</td>
       <td>".$row->SelectB_453."</td>
       <td>".$row->TimeB_453."</td>
       <td>".$row->SelectA_454."</td>
       <td>".$row->TimeA_454."</td>
       <td>".$row->Confidence_454."</td>
       <td>".$row->SelectB_454."</td>
       <td>".$row->TimeB_454."</td>
       <td>".$row->SelectA_455."</td>
       <td>".$row->TimeA_455."</td>
       <td>".$row->Confidence_455."</td>
       <td>".$row->SelectB_455."</td>
       <td>".$row->TimeB_455."</td>
       <td>".$row->SelectA_456."</td>
       <td>".$row->TimeA_456."</td>
       <td>".$row->Confidence_456."</td>
       <td>".$row->SelectB_456."</td>
       <td>".$row->TimeB_456."</td>
       <td>".$row->SelectA_457."</td>
       <td>".$row->TimeA_457."</td>
       <td>".$row->Confidence_457."</td>
       <td>".$row->SelectB_457."</td>
       <td>".$row->TimeB_457."</td>
       <td>".$row->SelectA_458."</td>
       <td>".$row->TimeA_458."</td>
       <td>".$row->Confidence_458."</td>
       <td>".$row->SelectB_458."</td>
       <td>".$row->TimeB_458."</td>
       <td>".$row->SelectA_459."</td>
       <td>".$row->TimeA_459."</td>
       <td>".$row->Confidence_459."</td>
       <td>".$row->SelectB_459."</td>
       <td>".$row->TimeB_459."</td>
       <td>".$row->SelectA_460."</td>
       <td>".$row->TimeA_460."</td>
       <td>".$row->Confidence_460."</td>
       <td>".$row->SelectB_460."</td>
       <td>".$row->TimeB_460."</td>
       <td>".$row->SelectA_461."</td>
       <td>".$row->TimeA_461."</td>
       <td>".$row->Confidence_461."</td>
       <td>".$row->SelectB_461."</td>
       <td>".$row->TimeB_461."</td>
       <td>".$row->SelectA_462."</td>
       <td>".$row->TimeA_462."</td>
       <td>".$row->Confidence_462."</td>
       <td>".$row->SelectB_462."</td>
       <td>".$row->TimeB_462."</td>
       <td>".$row->SelectA_463."</td>
       <td>".$row->TimeA_463."</td>
       <td>".$row->Confidence_463."</td>
       <td>".$row->SelectB_463."</td>
       <td>".$row->TimeB_463."</td>
       <td>".$row->SelectA_464."</td>
       <td>".$row->TimeA_464."</td>
       <td>".$row->Confidence_464."</td>
       <td>".$row->SelectB_464."</td>
       <td>".$row->TimeB_464."</td>
       <td>".$row->SelectA_465."</td>
       <td>".$row->TimeA_465."</td>
       <td>".$row->Confidence_465."</td>
       <td>".$row->SelectB_465."</td>
       <td>".$row->TimeB_465."</td>
       <td>".$row->SelectA_466."</td>
       <td>".$row->TimeA_466."</td>
       <td>".$row->Confidence_466."</td>
       <td>".$row->SelectB_466."</td>
       <td>".$row->TimeB_466."</td>
       <td>".$row->SelectA_467."</td>
       <td>".$row->TimeA_467."</td>
       <td>".$row->Confidence_467."</td>
       <td>".$row->SelectB_467."</td>
       <td>".$row->TimeB_467."</td>
       <td>".$row->SelectA_468."</td>
       <td>".$row->TimeA_468."</td>
       <td>".$row->Confidence_468."</td>
       <td>".$row->SelectB_468."</td>
       <td>".$row->TimeB_468."</td>
       <td>".$row->SelectA_469."</td>
       <td>".$row->TimeA_469."</td>
       <td>".$row->Confidence_469."</td>
       <td>".$row->SelectB_469."</td>
       <td>".$row->TimeB_469."</td>
       <td>".$row->SelectA_470."</td>
       <td>".$row->TimeA_470."</td>
       <td>".$row->Confidence_470."</td>
       <td>".$row->SelectB_470."</td>
       <td>".$row->TimeB_470."</td>
       <td>".$row->SelectA_471."</td>
       <td>".$row->TimeA_471."</td>
       <td>".$row->Confidence_471."</td>
       <td>".$row->SelectB_471."</td>
       <td>".$row->TimeB_471."</td>
       <td>".$row->SelectA_472."</td>
       <td>".$row->TimeA_472."</td>
       <td>".$row->Confidence_472."</td>
       <td>".$row->SelectB_472."</td>
       <td>".$row->TimeB_472."</td>
       <td>".$row->SelectA_473."</td>
       <td>".$row->TimeA_473."</td>
       <td>".$row->Confidence_473."</td>
       <td>".$row->SelectB_473."</td>
       <td>".$row->TimeB_473."</td>
       <td>".$row->SelectA_474."</td>
       <td>".$row->TimeA_474."</td>
       <td>".$row->Confidence_474."</td>
       <td>".$row->SelectB_474."</td>
       <td>".$row->TimeB_474."</td>
       <td>".$row->SelectA_475."</td>
       <td>".$row->TimeA_475."</td>
       <td>".$row->Confidence_475."</td>
       <td>".$row->SelectB_475."</td>
       <td>".$row->TimeB_475."</td>
       <td>".$row->SelectA_476."</td>
       <td>".$row->TimeA_476."</td>
       <td>".$row->Confidence_476."</td>
       <td>".$row->SelectB_476."</td>
       <td>".$row->TimeB_476."</td>
       <td>".$row->SelectA_477."</td>
       <td>".$row->TimeA_477."</td>
       <td>".$row->Confidence_477."</td>
       <td>".$row->SelectB_477."</td>
       <td>".$row->TimeB_477."</td>
       <td>".$row->SelectA_478."</td>
       <td>".$row->TimeA_478."</td>
       <td>".$row->Confidence_478."</td>
       <td>".$row->SelectB_478."</td>
       <td>".$row->TimeB_478."</td>
       <td>".$row->SelectA_479."</td>
       <td>".$row->TimeA_479."</td>
       <td>".$row->Confidence_479."</td>
       <td>".$row->SelectB_479."</td>
       <td>".$row->TimeB_479."</td>
       <td>".$row->SelectA_480."</td>
       <td>".$row->TimeA_480."</td>
       <td>".$row->Confidence_480."</td>
       <td>".$row->SelectB_480."</td>
       <td>".$row->TimeB_480."</td>
    </tr>

";

}


$EXCEL_FILE .= "</table>";

echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>

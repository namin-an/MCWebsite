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

for($k=241; $k<321; $k++){
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
for($ii = 241; $ii < 321; $ii++){
    $qry .= "a2.SelectA_".$ii.", a2.TimeA_".$ii.", a2.Confidence_".$ii.", b2.SelectB_".$ii.", b2.TimeB_".$ii.",";
}
$qry .= "u.S_time from Data_Users as u, Data_A_4 as a2, Data_B_4 as b2 where u.uid = a2.uid and u.uid = b2.uid";
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
       <td>".$row->SelectA_241."</td>
       <td>".$row->TimeA_241."</td>
       <td>".$row->Confidence_241."</td>
       <td>".$row->SelectB_241."</td>
       <td>".$row->TimeB_241."</td>
       <td>".$row->SelectA_242."</td>
       <td>".$row->TimeA_242."</td>
       <td>".$row->Confidence_242."</td>
       <td>".$row->SelectB_242."</td>
       <td>".$row->TimeB_242."</td>
       <td>".$row->SelectA_243."</td>
       <td>".$row->TimeA_243."</td>
       <td>".$row->Confidence_243."</td>
       <td>".$row->SelectB_243."</td>
       <td>".$row->TimeB_243."</td>
       <td>".$row->SelectA_244."</td>
       <td>".$row->TimeA_244."</td>
       <td>".$row->Confidence_244."</td>
       <td>".$row->SelectB_244."</td>
       <td>".$row->TimeB_244."</td>
       <td>".$row->SelectA_245."</td>
       <td>".$row->TimeA_245."</td>
       <td>".$row->Confidence_245."</td>
       <td>".$row->SelectB_245."</td>
       <td>".$row->TimeB_245."</td>
       <td>".$row->SelectA_246."</td>
       <td>".$row->TimeA_246."</td>
       <td>".$row->Confidence_246."</td>
       <td>".$row->SelectB_246."</td>
       <td>".$row->TimeB_246."</td>
       <td>".$row->SelectA_247."</td>
       <td>".$row->TimeA_247."</td>
       <td>".$row->Confidence_247."</td>
       <td>".$row->SelectB_247."</td>
       <td>".$row->TimeB_247."</td>
       <td>".$row->SelectA_248."</td>
       <td>".$row->TimeA_248."</td>
       <td>".$row->Confidence_248."</td>
       <td>".$row->SelectB_248."</td>
       <td>".$row->TimeB_248."</td>
       <td>".$row->SelectA_249."</td>
       <td>".$row->TimeA_249."</td>
       <td>".$row->Confidence_249."</td>
       <td>".$row->SelectB_249."</td>
       <td>".$row->TimeB_249."</td>
       <td>".$row->SelectA_250."</td>
       <td>".$row->TimeA_250."</td>
       <td>".$row->Confidence_250."</td>
       <td>".$row->SelectB_250."</td>
       <td>".$row->TimeB_250."</td>
       <td>".$row->SelectA_251."</td>
       <td>".$row->TimeA_251."</td>
       <td>".$row->Confidence_251."</td>
       <td>".$row->SelectB_251."</td>
       <td>".$row->TimeB_251."</td>
       <td>".$row->SelectA_252."</td>
       <td>".$row->TimeA_252."</td>
       <td>".$row->Confidence_252."</td>
       <td>".$row->SelectB_252."</td>
       <td>".$row->TimeB_252."</td>
       <td>".$row->SelectA_253."</td>
       <td>".$row->TimeA_253."</td>
       <td>".$row->Confidence_253."</td>
       <td>".$row->SelectB_253."</td>
       <td>".$row->TimeB_253."</td>
       <td>".$row->SelectA_254."</td>
       <td>".$row->TimeA_254."</td>
       <td>".$row->Confidence_254."</td>
       <td>".$row->SelectB_254."</td>
       <td>".$row->TimeB_254."</td>
       <td>".$row->SelectA_255."</td>
       <td>".$row->TimeA_255."</td>
       <td>".$row->Confidence_255."</td>
       <td>".$row->SelectB_255."</td>
       <td>".$row->TimeB_255."</td>
       <td>".$row->SelectA_256."</td>
       <td>".$row->TimeA_256."</td>
       <td>".$row->Confidence_256."</td>
       <td>".$row->SelectB_256."</td>
       <td>".$row->TimeB_256."</td>
       <td>".$row->SelectA_257."</td>
       <td>".$row->TimeA_257."</td>
       <td>".$row->Confidence_257."</td>
       <td>".$row->SelectB_257."</td>
       <td>".$row->TimeB_257."</td>
       <td>".$row->SelectA_258."</td>
       <td>".$row->TimeA_258."</td>
       <td>".$row->Confidence_258."</td>
       <td>".$row->SelectB_258."</td>
       <td>".$row->TimeB_258."</td>
       <td>".$row->SelectA_259."</td>
       <td>".$row->TimeA_259."</td>
       <td>".$row->Confidence_259."</td>
       <td>".$row->SelectB_259."</td>
       <td>".$row->TimeB_259."</td>
       <td>".$row->SelectA_260."</td>
       <td>".$row->TimeA_260."</td>
       <td>".$row->Confidence_260."</td>
       <td>".$row->SelectB_260."</td>
       <td>".$row->TimeB_260."</td>
       <td>".$row->SelectA_261."</td>
       <td>".$row->TimeA_261."</td>
       <td>".$row->Confidence_261."</td>
       <td>".$row->SelectB_261."</td>
       <td>".$row->TimeB_261."</td>
       <td>".$row->SelectA_262."</td>
       <td>".$row->TimeA_262."</td>
       <td>".$row->Confidence_262."</td>
       <td>".$row->SelectB_262."</td>
       <td>".$row->TimeB_262."</td>
       <td>".$row->SelectA_263."</td>
       <td>".$row->TimeA_263."</td>
       <td>".$row->Confidence_263."</td>
       <td>".$row->SelectB_263."</td>
       <td>".$row->TimeB_263."</td>
       <td>".$row->SelectA_264."</td>
       <td>".$row->TimeA_264."</td>
       <td>".$row->Confidence_264."</td>
       <td>".$row->SelectB_264."</td>
       <td>".$row->TimeB_264."</td>
       <td>".$row->SelectA_265."</td>
       <td>".$row->TimeA_265."</td>
       <td>".$row->Confidence_265."</td>
       <td>".$row->SelectB_265."</td>
       <td>".$row->TimeB_265."</td>
       <td>".$row->SelectA_266."</td>
       <td>".$row->TimeA_266."</td>
       <td>".$row->Confidence_266."</td>
       <td>".$row->SelectB_266."</td>
       <td>".$row->TimeB_266."</td>
       <td>".$row->SelectA_267."</td>
       <td>".$row->TimeA_267."</td>
       <td>".$row->Confidence_267."</td>
       <td>".$row->SelectB_267."</td>
       <td>".$row->TimeB_267."</td>
       <td>".$row->SelectA_268."</td>
       <td>".$row->TimeA_268."</td>
       <td>".$row->Confidence_268."</td>
       <td>".$row->SelectB_268."</td>
       <td>".$row->TimeB_268."</td>
       <td>".$row->SelectA_269."</td>
       <td>".$row->TimeA_269."</td>
       <td>".$row->Confidence_269."</td>
       <td>".$row->SelectB_269."</td>
       <td>".$row->TimeB_269."</td>
       <td>".$row->SelectA_270."</td>
       <td>".$row->TimeA_270."</td>
       <td>".$row->Confidence_270."</td>
       <td>".$row->SelectB_270."</td>
       <td>".$row->TimeB_270."</td>
       <td>".$row->SelectA_271."</td>
       <td>".$row->TimeA_271."</td>
       <td>".$row->Confidence_271."</td>
       <td>".$row->SelectB_271."</td>
       <td>".$row->TimeB_271."</td>
       <td>".$row->SelectA_272."</td>
       <td>".$row->TimeA_272."</td>
       <td>".$row->Confidence_272."</td>
       <td>".$row->SelectB_272."</td>
       <td>".$row->TimeB_272."</td>
       <td>".$row->SelectA_273."</td>
       <td>".$row->TimeA_273."</td>
       <td>".$row->Confidence_273."</td>
       <td>".$row->SelectB_273."</td>
       <td>".$row->TimeB_273."</td>
       <td>".$row->SelectA_274."</td>
       <td>".$row->TimeA_274."</td>
       <td>".$row->Confidence_274."</td>
       <td>".$row->SelectB_274."</td>
       <td>".$row->TimeB_274."</td>
       <td>".$row->SelectA_275."</td>
       <td>".$row->TimeA_275."</td>
       <td>".$row->Confidence_275."</td>
       <td>".$row->SelectB_275."</td>
       <td>".$row->TimeB_275."</td>
       <td>".$row->SelectA_276."</td>
       <td>".$row->TimeA_276."</td>
       <td>".$row->Confidence_276."</td>
       <td>".$row->SelectB_276."</td>
       <td>".$row->TimeB_276."</td>
       <td>".$row->SelectA_277."</td>
       <td>".$row->TimeA_277."</td>
       <td>".$row->Confidence_277."</td>
       <td>".$row->SelectB_277."</td>
       <td>".$row->TimeB_277."</td>
       <td>".$row->SelectA_278."</td>
       <td>".$row->TimeA_278."</td>
       <td>".$row->Confidence_278."</td>
       <td>".$row->SelectB_278."</td>
       <td>".$row->TimeB_278."</td>
       <td>".$row->SelectA_279."</td>
       <td>".$row->TimeA_279."</td>
       <td>".$row->Confidence_279."</td>
       <td>".$row->SelectB_279."</td>
       <td>".$row->TimeB_279."</td>
       <td>".$row->SelectA_280."</td>
       <td>".$row->TimeA_280."</td>
       <td>".$row->Confidence_280."</td>
       <td>".$row->SelectB_280."</td>
       <td>".$row->TimeB_280."</td>
       <td>".$row->SelectA_281."</td>
       <td>".$row->TimeA_281."</td>
       <td>".$row->Confidence_281."</td>
       <td>".$row->SelectB_281."</td>
       <td>".$row->TimeB_281."</td>
       <td>".$row->SelectA_282."</td>
       <td>".$row->TimeA_282."</td>
       <td>".$row->Confidence_282."</td>
       <td>".$row->SelectB_282."</td>
       <td>".$row->TimeB_282."</td>
       <td>".$row->SelectA_283."</td>
       <td>".$row->TimeA_283."</td>
       <td>".$row->Confidence_283."</td>
       <td>".$row->SelectB_283."</td>
       <td>".$row->TimeB_283."</td>
       <td>".$row->SelectA_284."</td>
       <td>".$row->TimeA_284."</td>
       <td>".$row->Confidence_284."</td>
       <td>".$row->SelectB_284."</td>
       <td>".$row->TimeB_284."</td>
       <td>".$row->SelectA_285."</td>
       <td>".$row->TimeA_285."</td>
       <td>".$row->Confidence_285."</td>
       <td>".$row->SelectB_285."</td>
       <td>".$row->TimeB_285."</td>
       <td>".$row->SelectA_286."</td>
       <td>".$row->TimeA_286."</td>
       <td>".$row->Confidence_286."</td>
       <td>".$row->SelectB_286."</td>
       <td>".$row->TimeB_286."</td>
       <td>".$row->SelectA_287."</td>
       <td>".$row->TimeA_287."</td>
       <td>".$row->Confidence_287."</td>
       <td>".$row->SelectB_287."</td>
       <td>".$row->TimeB_287."</td>
       <td>".$row->SelectA_288."</td>
       <td>".$row->TimeA_288."</td>
       <td>".$row->Confidence_288."</td>
       <td>".$row->SelectB_288."</td>
       <td>".$row->TimeB_288."</td>
       <td>".$row->SelectA_289."</td>
       <td>".$row->TimeA_289."</td>
       <td>".$row->Confidence_289."</td>
       <td>".$row->SelectB_289."</td>
       <td>".$row->TimeB_289."</td>
       <td>".$row->SelectA_290."</td>
       <td>".$row->TimeA_290."</td>
       <td>".$row->Confidence_290."</td>
       <td>".$row->SelectB_290."</td>
       <td>".$row->TimeB_290."</td>
       <td>".$row->SelectA_291."</td>
       <td>".$row->TimeA_291."</td>
       <td>".$row->Confidence_291."</td>
       <td>".$row->SelectB_291."</td>
       <td>".$row->TimeB_291."</td>
       <td>".$row->SelectA_292."</td>
       <td>".$row->TimeA_292."</td>
       <td>".$row->Confidence_292."</td>
       <td>".$row->SelectB_292."</td>
       <td>".$row->TimeB_292."</td>
       <td>".$row->SelectA_293."</td>
       <td>".$row->TimeA_293."</td>
       <td>".$row->Confidence_293."</td>
       <td>".$row->SelectB_293."</td>
       <td>".$row->TimeB_293."</td>
       <td>".$row->SelectA_294."</td>
       <td>".$row->TimeA_294."</td>
       <td>".$row->Confidence_294."</td>
       <td>".$row->SelectB_294."</td>
       <td>".$row->TimeB_294."</td>
       <td>".$row->SelectA_295."</td>
       <td>".$row->TimeA_295."</td>
       <td>".$row->Confidence_295."</td>
       <td>".$row->SelectB_295."</td>
       <td>".$row->TimeB_295."</td>
       <td>".$row->SelectA_296."</td>
       <td>".$row->TimeA_296."</td>
       <td>".$row->Confidence_296."</td>
       <td>".$row->SelectB_296."</td>
       <td>".$row->TimeB_296."</td>
       <td>".$row->SelectA_297."</td>
       <td>".$row->TimeA_297."</td>
       <td>".$row->Confidence_297."</td>
       <td>".$row->SelectB_297."</td>
       <td>".$row->TimeB_297."</td>
       <td>".$row->SelectA_298."</td>
       <td>".$row->TimeA_298."</td>
       <td>".$row->Confidence_298."</td>
       <td>".$row->SelectB_298."</td>
       <td>".$row->TimeB_298."</td>
       <td>".$row->SelectA_299."</td>
       <td>".$row->TimeA_299."</td>
       <td>".$row->Confidence_299."</td>
       <td>".$row->SelectB_299."</td>
       <td>".$row->TimeB_299."</td>
       <td>".$row->SelectA_300."</td>
       <td>".$row->TimeA_300."</td>
       <td>".$row->Confidence_300."</td>
       <td>".$row->SelectB_300."</td>
       <td>".$row->TimeB_300."</td>
       <td>".$row->SelectA_301."</td>
       <td>".$row->TimeA_301."</td>
       <td>".$row->Confidence_301."</td>
       <td>".$row->SelectB_301."</td>
       <td>".$row->TimeB_301."</td>
       <td>".$row->SelectA_302."</td>
       <td>".$row->TimeA_302."</td>
       <td>".$row->Confidence_302."</td>
       <td>".$row->SelectB_302."</td>
       <td>".$row->TimeB_302."</td>
       <td>".$row->SelectA_303."</td>
       <td>".$row->TimeA_303."</td>
       <td>".$row->Confidence_303."</td>
       <td>".$row->SelectB_303."</td>
       <td>".$row->TimeB_303."</td>
       <td>".$row->SelectA_304."</td>
       <td>".$row->TimeA_304."</td>
       <td>".$row->Confidence_304."</td>
       <td>".$row->SelectB_304."</td>
       <td>".$row->TimeB_304."</td>
       <td>".$row->SelectA_305."</td>
       <td>".$row->TimeA_305."</td>
       <td>".$row->Confidence_305."</td>
       <td>".$row->SelectB_305."</td>
       <td>".$row->TimeB_305."</td>
       <td>".$row->SelectA_306."</td>
       <td>".$row->TimeA_306."</td>
       <td>".$row->Confidence_306."</td>
       <td>".$row->SelectB_306."</td>
       <td>".$row->TimeB_306."</td>
       <td>".$row->SelectA_307."</td>
       <td>".$row->TimeA_307."</td>
       <td>".$row->Confidence_307."</td>
       <td>".$row->SelectB_307."</td>
       <td>".$row->TimeB_307."</td>
       <td>".$row->SelectA_308."</td>
       <td>".$row->TimeA_308."</td>
       <td>".$row->Confidence_308."</td>
       <td>".$row->SelectB_308."</td>
       <td>".$row->TimeB_308."</td>
       <td>".$row->SelectA_309."</td>
       <td>".$row->TimeA_309."</td>
       <td>".$row->Confidence_309."</td>
       <td>".$row->SelectB_309."</td>
       <td>".$row->TimeB_309."</td>
       <td>".$row->SelectA_310."</td>
       <td>".$row->TimeA_310."</td>
       <td>".$row->Confidence_310."</td>
       <td>".$row->SelectB_310."</td>
       <td>".$row->TimeB_310."</td>
       <td>".$row->SelectA_311."</td>
       <td>".$row->TimeA_311."</td>
       <td>".$row->Confidence_311."</td>
       <td>".$row->SelectB_311."</td>
       <td>".$row->TimeB_311."</td>
       <td>".$row->SelectA_312."</td>
       <td>".$row->TimeA_312."</td>
       <td>".$row->Confidence_312."</td>
       <td>".$row->SelectB_312."</td>
       <td>".$row->TimeB_312."</td>
       <td>".$row->SelectA_313."</td>
       <td>".$row->TimeA_313."</td>
       <td>".$row->Confidence_313."</td>
       <td>".$row->SelectB_313."</td>
       <td>".$row->TimeB_313."</td>
       <td>".$row->SelectA_314."</td>
       <td>".$row->TimeA_314."</td>
       <td>".$row->Confidence_314."</td>
       <td>".$row->SelectB_314."</td>
       <td>".$row->TimeB_314."</td>
       <td>".$row->SelectA_315."</td>
       <td>".$row->TimeA_315."</td>
       <td>".$row->Confidence_315."</td>
       <td>".$row->SelectB_315."</td>
       <td>".$row->TimeB_315."</td>
       <td>".$row->SelectA_316."</td>
       <td>".$row->TimeA_316."</td>
       <td>".$row->Confidence_316."</td>
       <td>".$row->SelectB_316."</td>
       <td>".$row->TimeB_316."</td>
       <td>".$row->SelectA_317."</td>
       <td>".$row->TimeA_317."</td>
       <td>".$row->Confidence_317."</td>
       <td>".$row->SelectB_317."</td>
       <td>".$row->TimeB_317."</td>
       <td>".$row->SelectA_318."</td>
       <td>".$row->TimeA_318."</td>
       <td>".$row->Confidence_318."</td>
       <td>".$row->SelectB_318."</td>
       <td>".$row->TimeB_318."</td>
       <td>".$row->SelectA_319."</td>
       <td>".$row->TimeA_319."</td>
       <td>".$row->Confidence_319."</td>
       <td>".$row->SelectB_319."</td>
       <td>".$row->TimeB_319."</td>
       <td>".$row->SelectA_320."</td>
       <td>".$row->TimeA_320."</td>
       <td>".$row->Confidence_320."</td>
       <td>".$row->SelectB_320."</td>
       <td>".$row->TimeB_320."</td>
    </tr>

";

}


$EXCEL_FILE .= "</table>";

echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>
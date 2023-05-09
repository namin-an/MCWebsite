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

for($k=81; $k<161; $k++){
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
for($ii = 81; $ii < 161; $ii++){
    $qry .= "a2.SelectA_".$ii.", a2.TimeA_".$ii.", a2.Confidence_".$ii.", b2.SelectB_".$ii.", b2.TimeB_".$ii.",";
}
$qry .= "u.S_time from Data_Users as u, Data_A_2 as a2, Data_B_2 as b2 where u.uid = a2.uid and u.uid = b2.uid";
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
       <td>".$row->SelectA_81."</td>
       <td>".$row->TimeA_81."</td>
       <td>".$row->Confidence_81."</td>
       <td>".$row->SelectB_81."</td>
       <td>".$row->TimeB_81."</td>
       <td>".$row->SelectA_82."</td>
       <td>".$row->TimeA_82."</td>
       <td>".$row->Confidence_82."</td>
       <td>".$row->SelectB_82."</td>
       <td>".$row->TimeB_82."</td>
       <td>".$row->SelectA_83."</td>
       <td>".$row->TimeA_83."</td>
       <td>".$row->Confidence_83."</td>
       <td>".$row->SelectB_83."</td>
       <td>".$row->TimeB_83."</td>
       <td>".$row->SelectA_84."</td>
       <td>".$row->TimeA_84."</td>
       <td>".$row->Confidence_84."</td>
       <td>".$row->SelectB_84."</td>
       <td>".$row->TimeB_84."</td>
       <td>".$row->SelectA_85."</td>
       <td>".$row->TimeA_85."</td>
       <td>".$row->Confidence_85."</td>
       <td>".$row->SelectB_85."</td>
       <td>".$row->TimeB_85."</td>
       <td>".$row->SelectA_86."</td>
       <td>".$row->TimeA_86."</td>
       <td>".$row->Confidence_86."</td>
       <td>".$row->SelectB_86."</td>
       <td>".$row->TimeB_86."</td>
       <td>".$row->SelectA_87."</td>
       <td>".$row->TimeA_87."</td>
       <td>".$row->Confidence_87."</td>
       <td>".$row->SelectB_87."</td>
       <td>".$row->TimeB_87."</td>
       <td>".$row->SelectA_88."</td>
       <td>".$row->TimeA_88."</td>
       <td>".$row->Confidence_88."</td>
       <td>".$row->SelectB_88."</td>
       <td>".$row->TimeB_88."</td>
       <td>".$row->SelectA_89."</td>
       <td>".$row->TimeA_89."</td>
       <td>".$row->Confidence_89."</td>
       <td>".$row->SelectB_89."</td>
       <td>".$row->TimeB_89."</td>
       <td>".$row->SelectA_90."</td>
       <td>".$row->TimeA_90."</td>
       <td>".$row->Confidence_90."</td>
       <td>".$row->SelectB_90."</td>
       <td>".$row->TimeB_90."</td>
       <td>".$row->SelectA_91."</td>
       <td>".$row->TimeA_91."</td>
       <td>".$row->Confidence_91."</td>
       <td>".$row->SelectB_91."</td>
       <td>".$row->TimeB_91."</td>
       <td>".$row->SelectA_92."</td>
       <td>".$row->TimeA_92."</td>
       <td>".$row->Confidence_92."</td>
       <td>".$row->SelectB_92."</td>
       <td>".$row->TimeB_92."</td>
       <td>".$row->SelectA_93."</td>
       <td>".$row->TimeA_93."</td>
       <td>".$row->Confidence_93."</td>
       <td>".$row->SelectB_93."</td>
       <td>".$row->TimeB_93."</td>
       <td>".$row->SelectA_94."</td>
       <td>".$row->TimeA_94."</td>
       <td>".$row->Confidence_94."</td>
       <td>".$row->SelectB_94."</td>
       <td>".$row->TimeB_94."</td>
       <td>".$row->SelectA_95."</td>
       <td>".$row->TimeA_95."</td>
       <td>".$row->Confidence_95."</td>
       <td>".$row->SelectB_95."</td>
       <td>".$row->TimeB_95."</td>
       <td>".$row->SelectA_96."</td>
       <td>".$row->TimeA_96."</td>
       <td>".$row->Confidence_96."</td>
       <td>".$row->SelectB_96."</td>
       <td>".$row->TimeB_96."</td>
       <td>".$row->SelectA_97."</td>
       <td>".$row->TimeA_97."</td>
       <td>".$row->Confidence_97."</td>
       <td>".$row->SelectB_97."</td>
       <td>".$row->TimeB_97."</td>
       <td>".$row->SelectA_98."</td>
       <td>".$row->TimeA_98."</td>
       <td>".$row->Confidence_98."</td>
       <td>".$row->SelectB_98."</td>
       <td>".$row->TimeB_98."</td>
       <td>".$row->SelectA_99."</td>
       <td>".$row->TimeA_99."</td>
       <td>".$row->Confidence_99."</td>
       <td>".$row->SelectB_99."</td>
       <td>".$row->TimeB_99."</td>
       <td>".$row->SelectA_100."</td>
       <td>".$row->TimeA_100."</td>
       <td>".$row->Confidence_100."</td>
       <td>".$row->SelectB_100."</td>
       <td>".$row->TimeB_100."</td>
       <td>".$row->SelectA_101."</td>
       <td>".$row->TimeA_101."</td>
       <td>".$row->Confidence_101."</td>
       <td>".$row->SelectB_101."</td>
       <td>".$row->TimeB_101."</td>
       <td>".$row->SelectA_102."</td>
       <td>".$row->TimeA_102."</td>
       <td>".$row->Confidence_102."</td>
       <td>".$row->SelectB_102."</td>
       <td>".$row->TimeB_102."</td>
       <td>".$row->SelectA_103."</td>
       <td>".$row->TimeA_103."</td>
       <td>".$row->Confidence_103."</td>
       <td>".$row->SelectB_103."</td>
       <td>".$row->TimeB_103."</td>
       <td>".$row->SelectA_104."</td>
       <td>".$row->TimeA_104."</td>
       <td>".$row->Confidence_104."</td>
       <td>".$row->SelectB_104."</td>
       <td>".$row->TimeB_104."</td>
       <td>".$row->SelectA_105."</td>
       <td>".$row->TimeA_105."</td>
       <td>".$row->Confidence_105."</td>
       <td>".$row->SelectB_105."</td>
       <td>".$row->TimeB_105."</td>
       <td>".$row->SelectA_106."</td>
       <td>".$row->TimeA_106."</td>
       <td>".$row->Confidence_106."</td>
       <td>".$row->SelectB_106."</td>
       <td>".$row->TimeB_106."</td>
       <td>".$row->SelectA_107."</td>
       <td>".$row->TimeA_107."</td>
       <td>".$row->Confidence_107."</td>
       <td>".$row->SelectB_107."</td>
       <td>".$row->TimeB_107."</td>
       <td>".$row->SelectA_108."</td>
       <td>".$row->TimeA_108."</td>
       <td>".$row->Confidence_108."</td>
       <td>".$row->SelectB_108."</td>
       <td>".$row->TimeB_108."</td>
       <td>".$row->SelectA_109."</td>
       <td>".$row->TimeA_109."</td>
       <td>".$row->Confidence_109."</td>
       <td>".$row->SelectB_109."</td>
       <td>".$row->TimeB_109."</td>
       <td>".$row->SelectA_110."</td>
       <td>".$row->TimeA_110."</td>
       <td>".$row->Confidence_110."</td>
       <td>".$row->SelectB_110."</td>
       <td>".$row->TimeB_110."</td>
       <td>".$row->SelectA_111."</td>
       <td>".$row->TimeA_111."</td>
       <td>".$row->Confidence_111."</td>
       <td>".$row->SelectB_111."</td>
       <td>".$row->TimeB_111."</td>
       <td>".$row->SelectA_112."</td>
       <td>".$row->TimeA_112."</td>
       <td>".$row->Confidence_112."</td>
       <td>".$row->SelectB_112."</td>
       <td>".$row->TimeB_112."</td>
       <td>".$row->SelectA_113."</td>
       <td>".$row->TimeA_113."</td>
       <td>".$row->Confidence_113."</td>
       <td>".$row->SelectB_113."</td>
       <td>".$row->TimeB_113."</td>
       <td>".$row->SelectA_114."</td>
       <td>".$row->TimeA_114."</td>
       <td>".$row->Confidence_114."</td>
       <td>".$row->SelectB_114."</td>
       <td>".$row->TimeB_114."</td>
       <td>".$row->SelectA_115."</td>
       <td>".$row->TimeA_115."</td>
       <td>".$row->Confidence_115."</td>
       <td>".$row->SelectB_115."</td>
       <td>".$row->TimeB_115."</td>
       <td>".$row->SelectA_116."</td>
       <td>".$row->TimeA_116."</td>
       <td>".$row->Confidence_116."</td>
       <td>".$row->SelectB_116."</td>
       <td>".$row->TimeB_116."</td>
       <td>".$row->SelectA_117."</td>
       <td>".$row->TimeA_117."</td>
       <td>".$row->Confidence_117."</td>
       <td>".$row->SelectB_117."</td>
       <td>".$row->TimeB_117."</td>
       <td>".$row->SelectA_118."</td>
       <td>".$row->TimeA_118."</td>
       <td>".$row->Confidence_118."</td>
       <td>".$row->SelectB_118."</td>
       <td>".$row->TimeB_118."</td>
       <td>".$row->SelectA_119."</td>
       <td>".$row->TimeA_119."</td>
       <td>".$row->Confidence_119."</td>
       <td>".$row->SelectB_119."</td>
       <td>".$row->TimeB_119."</td>
       <td>".$row->SelectA_120."</td>
       <td>".$row->TimeA_120."</td>
       <td>".$row->Confidence_120."</td>
       <td>".$row->SelectB_120."</td>
       <td>".$row->TimeB_120."</td>
       <td>".$row->SelectA_121."</td>
       <td>".$row->TimeA_121."</td>
       <td>".$row->Confidence_121."</td>
       <td>".$row->SelectB_121."</td>
       <td>".$row->TimeB_121."</td>
       <td>".$row->SelectA_122."</td>
       <td>".$row->TimeA_122."</td>
       <td>".$row->Confidence_122."</td>
       <td>".$row->SelectB_122."</td>
       <td>".$row->TimeB_122."</td>
       <td>".$row->SelectA_123."</td>
       <td>".$row->TimeA_123."</td>
       <td>".$row->Confidence_123."</td>
       <td>".$row->SelectB_123."</td>
       <td>".$row->TimeB_123."</td>
       <td>".$row->SelectA_124."</td>
       <td>".$row->TimeA_124."</td>
       <td>".$row->Confidence_124."</td>
       <td>".$row->SelectB_124."</td>
       <td>".$row->TimeB_124."</td>
       <td>".$row->SelectA_125."</td>
       <td>".$row->TimeA_125."</td>
       <td>".$row->Confidence_125."</td>
       <td>".$row->SelectB_125."</td>
       <td>".$row->TimeB_125."</td>
       <td>".$row->SelectA_126."</td>
       <td>".$row->TimeA_126."</td>
       <td>".$row->Confidence_126."</td>
       <td>".$row->SelectB_126."</td>
       <td>".$row->TimeB_126."</td>
       <td>".$row->SelectA_127."</td>
       <td>".$row->TimeA_127."</td>
       <td>".$row->Confidence_127."</td>
       <td>".$row->SelectB_127."</td>
       <td>".$row->TimeB_127."</td>
       <td>".$row->SelectA_128."</td>
       <td>".$row->TimeA_128."</td>
       <td>".$row->Confidence_128."</td>
       <td>".$row->SelectB_128."</td>
       <td>".$row->TimeB_128."</td>
       <td>".$row->SelectA_129."</td>
       <td>".$row->TimeA_129."</td>
       <td>".$row->Confidence_129."</td>
       <td>".$row->SelectB_129."</td>
       <td>".$row->TimeB_129."</td>
       <td>".$row->SelectA_130."</td>
       <td>".$row->TimeA_130."</td>
       <td>".$row->Confidence_130."</td>
       <td>".$row->SelectB_130."</td>
       <td>".$row->TimeB_130."</td>
       <td>".$row->SelectA_131."</td>
       <td>".$row->TimeA_131."</td>
       <td>".$row->Confidence_131."</td>
       <td>".$row->SelectB_131."</td>
       <td>".$row->TimeB_131."</td>
       <td>".$row->SelectA_132."</td>
       <td>".$row->TimeA_132."</td>
       <td>".$row->Confidence_132."</td>
       <td>".$row->SelectB_132."</td>
       <td>".$row->TimeB_132."</td>
       <td>".$row->SelectA_133."</td>
       <td>".$row->TimeA_133."</td>
       <td>".$row->Confidence_133."</td>
       <td>".$row->SelectB_133."</td>
       <td>".$row->TimeB_133."</td>
       <td>".$row->SelectA_134."</td>
       <td>".$row->TimeA_134."</td>
       <td>".$row->Confidence_134."</td>
       <td>".$row->SelectB_134."</td>
       <td>".$row->TimeB_134."</td>
       <td>".$row->SelectA_135."</td>
       <td>".$row->TimeA_135."</td>
       <td>".$row->Confidence_135."</td>
       <td>".$row->SelectB_135."</td>
       <td>".$row->TimeB_135."</td>
       <td>".$row->SelectA_136."</td>
       <td>".$row->TimeA_136."</td>
       <td>".$row->Confidence_136."</td>
       <td>".$row->SelectB_136."</td>
       <td>".$row->TimeB_136."</td>
       <td>".$row->SelectA_137."</td>
       <td>".$row->TimeA_137."</td>
       <td>".$row->Confidence_137."</td>
       <td>".$row->SelectB_137."</td>
       <td>".$row->TimeB_137."</td>
       <td>".$row->SelectA_138."</td>
       <td>".$row->TimeA_138."</td>
       <td>".$row->Confidence_138."</td>
       <td>".$row->SelectB_138."</td>
       <td>".$row->TimeB_138."</td>
       <td>".$row->SelectA_139."</td>
       <td>".$row->TimeA_139."</td>
       <td>".$row->Confidence_139."</td>
       <td>".$row->SelectB_139."</td>
       <td>".$row->TimeB_139."</td>
       <td>".$row->SelectA_140."</td>
       <td>".$row->TimeA_140."</td>
       <td>".$row->Confidence_140."</td>
       <td>".$row->SelectB_140."</td>
       <td>".$row->TimeB_140."</td>
       <td>".$row->SelectA_141."</td>
       <td>".$row->TimeA_141."</td>
       <td>".$row->Confidence_141."</td>
       <td>".$row->SelectB_141."</td>
       <td>".$row->TimeB_141."</td>
       <td>".$row->SelectA_142."</td>
       <td>".$row->TimeA_142."</td>
       <td>".$row->Confidence_142."</td>
       <td>".$row->SelectB_142."</td>
       <td>".$row->TimeB_142."</td>
       <td>".$row->SelectA_143."</td>
       <td>".$row->TimeA_143."</td>
       <td>".$row->Confidence_143."</td>
       <td>".$row->SelectB_143."</td>
       <td>".$row->TimeB_143."</td>
       <td>".$row->SelectA_144."</td>
       <td>".$row->TimeA_144."</td>
       <td>".$row->Confidence_144."</td>
       <td>".$row->SelectB_144."</td>
       <td>".$row->TimeB_144."</td>
       <td>".$row->SelectA_145."</td>
       <td>".$row->TimeA_145."</td>
       <td>".$row->Confidence_145."</td>
       <td>".$row->SelectB_145."</td>
       <td>".$row->TimeB_145."</td>
       <td>".$row->SelectA_146."</td>
       <td>".$row->TimeA_146."</td>
       <td>".$row->Confidence_146."</td>
       <td>".$row->SelectB_146."</td>
       <td>".$row->TimeB_146."</td>
       <td>".$row->SelectA_147."</td>
       <td>".$row->TimeA_147."</td>
       <td>".$row->Confidence_147."</td>
       <td>".$row->SelectB_147."</td>
       <td>".$row->TimeB_147."</td>
       <td>".$row->SelectA_148."</td>
       <td>".$row->TimeA_148."</td>
       <td>".$row->Confidence_148."</td>
       <td>".$row->SelectB_148."</td>
       <td>".$row->TimeB_148."</td>
       <td>".$row->SelectA_149."</td>
       <td>".$row->TimeA_149."</td>
       <td>".$row->Confidence_149."</td>
       <td>".$row->SelectB_149."</td>
       <td>".$row->TimeB_149."</td>
       <td>".$row->SelectA_150."</td>
       <td>".$row->TimeA_150."</td>
       <td>".$row->Confidence_150."</td>
       <td>".$row->SelectB_150."</td>
       <td>".$row->TimeB_150."</td>
       <td>".$row->SelectA_151."</td>
       <td>".$row->TimeA_151."</td>
       <td>".$row->Confidence_151."</td>
       <td>".$row->SelectB_151."</td>
       <td>".$row->TimeB_151."</td>
       <td>".$row->SelectA_152."</td>
       <td>".$row->TimeA_152."</td>
       <td>".$row->Confidence_152."</td>
       <td>".$row->SelectB_152."</td>
       <td>".$row->TimeB_152."</td>
       <td>".$row->SelectA_153."</td>
       <td>".$row->TimeA_153."</td>
       <td>".$row->Confidence_153."</td>
       <td>".$row->SelectB_153."</td>
       <td>".$row->TimeB_153."</td>
       <td>".$row->SelectA_154."</td>
       <td>".$row->TimeA_154."</td>
       <td>".$row->Confidence_154."</td>
       <td>".$row->SelectB_154."</td>
       <td>".$row->TimeB_154."</td>
       <td>".$row->SelectA_155."</td>
       <td>".$row->TimeA_155."</td>
       <td>".$row->Confidence_155."</td>
       <td>".$row->SelectB_155."</td>
       <td>".$row->TimeB_155."</td>
       <td>".$row->SelectA_156."</td>
       <td>".$row->TimeA_156."</td>
       <td>".$row->Confidence_156."</td>
       <td>".$row->SelectB_156."</td>
       <td>".$row->TimeB_156."</td>
       <td>".$row->SelectA_157."</td>
       <td>".$row->TimeA_157."</td>
       <td>".$row->Confidence_157."</td>
       <td>".$row->SelectB_157."</td>
       <td>".$row->TimeB_157."</td>
       <td>".$row->SelectA_158."</td>
       <td>".$row->TimeA_158."</td>
       <td>".$row->Confidence_158."</td>
       <td>".$row->SelectB_158."</td>
       <td>".$row->TimeB_158."</td>
       <td>".$row->SelectA_159."</td>
       <td>".$row->TimeA_159."</td>
       <td>".$row->Confidence_159."</td>
       <td>".$row->SelectB_159."</td>
       <td>".$row->TimeB_159."</td>
       <td>".$row->SelectA_160."</td>
       <td>".$row->TimeA_160."</td>
       <td>".$row->Confidence_160."</td>
       <td>".$row->SelectB_160."</td>
       <td>".$row->TimeB_160."</td>
    </tr>

";

}


$EXCEL_FILE .= "</table>";

echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>

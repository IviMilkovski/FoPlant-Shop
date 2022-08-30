<?php
ob_start();
require_once "../../config/conn.php";
global $conn;
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
}
$fileName = "types_excel". date('Y-m-d') . ".xls";
$fields = array('ID', 'NAME');
$excelData = implode("\t", array_values($fields)) . "\n";
$query = $conn->query("SELECT * FROM types ORDER BY id ASC");
if($query){
    // while($row = $query->mysqli_fetch_assoc(PDO::FETCH_ASSOC)){ 
    // $lineData = array($row['id'], $row['name']);
    // array_walk($lineData, 'filterData'); 
    // $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    // }
    $types = $row= $query->fetchAll();
    foreach($types as $t){
        $excelData .= $t->id."\t".$t->name."\n";
    }
}else{
    $excelData .= 'No records found...'. "\n";
}

header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
echo $excelData; 
 
exit;


?>
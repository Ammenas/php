<?php
$landinfo = array(
    array("Hoofdstad" => "Berlijn", "Land" => "Duitsland", "Taal" => "Duits"), 
    array("Hoofdstad" => "Brussel", "Land" => "België", "Taal" => "Vlaams/Frans"), 
    array("Hoofdstad" => "Parijs", "Land" => "Frankrijk", "Taal" => "Frans"), 
    array("Hoofdstad" => "Rome", "Land" => "Italië", "Taal" => "Italiaams"));

$fp = fopen('csv/file.csv', 'w');

foreach ($landinfo as $fields){
    fputcsv($fp, $fields);
}
echo "success";
fclose($fp);

?>

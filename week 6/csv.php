<?php
$behandel = fopen("csv/test.csv", "r");

$i = 0;
while ($record = fgetcsv($behandel, 1000, ",")){
    echo "naam: " . $record[0] . " ";
    echo "achternaam: " . $record[1] . " ";
    echo "leeftijd: " . $record[2] . "<br />";
    $mijnarrray[$i][0] = $record[0];
    $mijnarrray[$i][1] = $record[1];
    $mijnarrray[$i][2] = $record[2];
    $i++;
}

 

echo "<pre>";
print_r($mijnarrray);
echo "</pre>";

?>

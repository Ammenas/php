<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <div>     
            <?php
            
            $display = fopen("csv/files.csv", "r");

            $i = 0;
            while ($tabel = fgetcsv($display, 1000, ",")){
            
            $mijnarrray[$i][0] = $tabel[0];
            $mijnarrray[$i][1] = $tabel[1];
            $mijnarrray[$i][2] = $tabel[2];
            $mijnarrray[$i][3] = $tabel[3];
            $mijnarrray[$i][4] = $tabel[4];
            $mijnarrray[$i][5] = $tabel[5];
            $mijnarrray[$i][6] = $tabel[6];
            $mijnarrray[$i][7] = $tabel[7];
            $mijnarrray[$i][8] = $i;
            $i++;
            }
            echo("<table border='1'> " . "<caption> <strong> Leden gegevens </strong> </caption>
            <thread><tr><th>muteren</th><th>Voornaam</th><th>Achtenaam</th><th>Geboortedatum</th><th>Adres</th>
            <th>Postcode</th><th>Woonplaats</th><th>Telefoonnummer</th><th>E-mail adres</th></tr></thread><tbody>");
            foreach ($mijnarrray as $hoofdarray){
            echo ("<tr>" . "<td>" . "<a href=" . "muteren.php?id=". $hoofdarray[8] . ">" . "test" . "</a>" . "</td>");
            foreach ($hoofdarray as $subarray){
            echo ("<td>". $subarray . "</td>");
            }
            echo ("</tr>");
            }
            ?>
        </div>
    </body>
</html>
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
            $id = $_GET["id"];
            ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <div>     
            <form action="csv-form.php" method="post">
                Voornaam:
                <input type="text" id="voornaam" name="voornaam" value="<?php echo $mijnarrray[$id][0]; ?>"/><br>
                Achternaam:
                <input type="text" id="achternaam" name="achternaam" /><br>
                Geboortedatum:
                <input type="text" id="datum" name="datum"  /><br>
                Adres:
                <input type="text" id="adres" name="adres"  /><br>
                Postcode:
                <input type="text" id="postcode" name="postcode" /><br>
                Woonplaats:
                <input type="text" id="plaats" name="plaats"  /><br>
                Telefoonnummer:
                <input type="text" id="nummer" name="nummer"  /><br>
                E-mailadres:
                <input type="text" id="email" name="email"  /><br>
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <input type="submit" id="submit" name="submit" />
            </form>
        </div>
    </body>
</html>
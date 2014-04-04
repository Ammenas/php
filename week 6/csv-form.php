<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <div>
            
            <form action="csv-form.php" method="post">
                 
                                Voornaam:
                                <input type="text" id="naam" name="naam" /><br>
                                Achternaam:
                                <input type="text" id="adres" name="adres" /><br>
                                Geboortedatum:
                                <input type="text" id="plaats" name="plaats"  /><br>
                                Adres:
                                <input type="text" id="plaats" name="plaats"  /><br>
                                Postcode:
                                <input type="text" id="postcode" name="postcode" /><br>
                                Woonplaats:
                                <input type="text" id="plaats" name="plaats"  /><br>
                                Telefoonnummer:
                                <input type="text" id="plaats" name="plaats"  /><br>
                                E-mailadres:
                                <input type="text" id="plaats" name="plaats"  /><br>
                                
                                <input type="submit" id="submit" name="submit" />
                                
            </form>
        </div>
    </body>
</html>
<?php
if (!empty($_POST["naam"]) and !empty($_POST["adres"]) and !empty($_POST["postcode"]) and !empty($_POST["plaats"]))
{

$test[0][] = $_POST["naam"];
$test[0][] = $_POST["adres"];
$test[0][] = $_POST["postcode"];
$test[0][] = $_POST["plaats"];
echo "<pre>";
print_r($test);
echo "</pre>";

$fp = fopen('csv/files.csv', 'w');

foreach ($test as $fields){
    fputcsv($fp, $fields);
}
echo "success";
fclose($fp);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>arrays</title>
    </head>
    <body>
        <h3>Hash-array</h3>
        <?php
        $landinfo = array(array("Hoofdstad" => "Berlijn", "Land" => "Duitsland", "Taal" => "Duits"), array("Hoofdstad" => "Brussel", "Land" => "België", "Taal" => "Vlaams/Frans"), array("Hoofdstad" => "Parijs", "Land" => "Frankrijk", "Taal" => "Frans"), array("Hoofdstad" => "Rome", "Land" => "Italië", "Taal" => "Italiaams"));
        ?>
        <pre>
        <?php
        print_r($landinfo);
        ?>
        </pre>
    </body>
</html>
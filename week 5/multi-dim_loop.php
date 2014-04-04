<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>arrays</title>
    </head>
    <body>
    <?php
    echo("<table border='1'> " . "<caption> <strong> land info </strong> </caption>
            <thread><tr><th>Hoofdstad</th><th>Land</th><th>Taal</th></tr></thread><tbody>");
    $landinfo = array(array("Hoofdstad" => "Berlijn", "Land" => "Duitsland", "Taal" => "Duits"), array("Hoofdstad" => "Brussel", "Land" => "België", "Taal" => "Vlaams/Frans"), array("Hoofdstad" => "Parijs", "Land" => "Frankrijk", "Taal" => "Frans"), array("Hoofdstad" => "Rome", "Land" => "Italië", "Taal" => "Italiaams"));
    foreach ($landinfo as $hoofdarray){
        echo ("<tr>");
        foreach ($hoofdarray as $subarray){
            echo ("<td>". $subarray . "</td>");
        }
        echo ("</tr>");
    }
    
    ?>
 </body>
</html>
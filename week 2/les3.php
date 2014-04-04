<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>mijn php script</title>
    </head>
    <body>
        <h3>Variabelen</h3>
        <?php
        $breedte = 10;
        $lengte = $breedte * 2;
        $hoogte = 5;
        $oppervlakte = $lengte * $breedte;
        $volume = $oppervlakte * $hoogte;
        $totaal = $lengte + $breedte;
        echo("Oppervlakte is: " . $oppervlakte . "<br />");
        echo("Volume is: " . $volume . "<br />");
        echo("Half volume is: " . $volume / 2 . "<br />");
        echo("totaal is: " . $totaal . "<br />");
        $totaal += $hoogte;
        echo("nieuw totaal: " . $totaal . "<br>");
        echo 'lengte is: $lengte <br>';
        echo($hoogte == 5) . "<br>";
        define("NAAM","Francesco Eremita");
        echo NAAM;
        ?>
    </body>
</html>

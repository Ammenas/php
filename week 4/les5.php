<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lab 2</title>
    </head>
    <body>
        <h3>de if opdracht</h3>
        <?php
        $gewrkteuren = 41;
        $uurtarief = 15.00;
        $bruto = $gewrkteuren * $uurtarief;
        if($gewrkteuren > 40)
        {
            $bonus = 90.00;
            echo ("uw salaris met bonus is: €".($bruto+$bonus)."<br />");
        }
        else
        {
            echo ("Uw salaris is: €".$bruto."<br />");
        }
        $sparen = ($bruto >= 700 || $bruto+$bonus >= 700 ? "U kunt maximaal 100 euro sparen" : "U kunt maximaal 50 euro sparen");
        echo $sparen;
        ?>
    </body>
</html>
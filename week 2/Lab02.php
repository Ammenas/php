<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lab 2</title>
    </head>
    <body>
        <h3>Lab02</h3>
        <?php
        $toshiba["merk"] = " toshiba satelite ";
        $toshiba["model"] = " A100 ";
        $toshiba["OS"] = " Windows XP ";
        $toshiba["voorraad"] = " 80 ";
        $toshiba["prijs"] = 999;
        $acer["merk"] = " Acer aspire ";
        $acer["model"] = " 5732Z ";
        $acer["OS"] = " Linux ";
        $acer["voorraad"] = " 0 ";
        $acer["prijs"] = 888;
        $HP["merk"] = " HP ";
        $HP["model"] = " 200X ";
        $HP["OS"] = " Vista ";
        $HP["voorraad"] = " 50 ";
        $HP["prijs"] = 777;
        $totaal = $toshiba["prijs"] + $acer["prijs"] + $HP["prijs"];
        echo("<table border='1'> " . "<caption> <strong> SML Laptops </strong> </caption>
            <thread><tr><th>Merk</th><th>Model</th><th>Operating system</th><th>voorraad</th><th>prijs</th></tr></thread>
            <tbody><tr><td>" . $toshiba["merk"] . "</td>" . "<td>" . $toshiba["model"] . "</td>" . "<td>" . $toshiba["OS"] . "</td>" ."<td>" . $toshiba["voorraad"] . "</td>" ."<td>" . $toshiba["prijs"] . "</td>" . "</tr>
            <tr><td>" . $acer["merk"] . "</td>" . "<td>" . $acer["model"] . "</td>" . "<td>" . $acer["OS"] . "</td>" ."<td>" . $acer["voorraad"] . "</td>" ."<td>" . $acer["prijs"] . "</td>" . "</tr>
            <tr><td>" . $HP["merk"] . "</td>" . "<td>" . $HP["model"] . "</td>" . "<td>" . $HP["OS"] . "</td>" ."<td>" . $HP["voorraad"] . "</td>" ."<td>" . $HP["prijs"] . "</td>" . "</tr> </tbody>
            <tfoot> <tr><td colspan='4'>Totaal</td><td>" . $totaal . "</td></tr></tfoot></table>");
        ?>
    </body>
</html>
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
        $voorraad = ($toshiba["voorraad"] >= 1 ? "in voorraad" : "niet in voorraad");
        $voorraad1 = ($acer["voorraad"] >= 1 ? "in voorraad" : "niet in voorraad");
        $voorraad2 = ($HP["voorraad"] >= 1 ? "in voorraad" : "niet in voorraad");
        $prijs = ($toshiba["voorraad"] > 0 ? $toshiba["prijs"] = 999 : $toshiba["prijs"] = "---" );
        $prijs2 = ($acer["voorraad"] > 0 ? $acer["prijs"] = 888 : $acer["prijs"] = "---" );
        $prijs3 = ($HP["voorraad"] > 0 ? $HP["prijs"] = 777 : $HP["prijs"] = "---" );
        $totaal = $toshiba["prijs"] + $acer["prijs"] + $HP["prijs"];
        echo("<table border='1'> " . "<caption> <strong> SML Laptops </strong> </caption>
            <thread><tr><th>Merk</th><th>Model</th><th>Operating system</th><th>voorraad</th><th>prijs</th></tr></thread>
            <tbody><tr><td>" . $toshiba["merk"] . "</td>" . "<td>" . $toshiba["model"] . "</td>" . "<td>" . $toshiba["OS"] . "</td>" ."<td>" . $voorraad . "</td>" ."<td>" . $toshiba["prijs"] . "</td>" . "</tr>
            <tr><td>" . $acer["merk"] . "</td>" . "<td>" . $acer["model"] . "</td>" . "<td>" . $acer["OS"] . "</td>" ."<td>" . $voorraad1 . "</td>" ."<td>" . $acer["prijs"] . "</td>" . "</tr>
            <tr><td>" . $HP["merk"] . "</td>" . "<td>" . $HP["model"] . "</td>" . "<td>" . $HP["OS"] . "</td>" ."<td>" . $voorraad2 . "</td>" ."<td>" . $HP["prijs"] . "</td>" . "</tr> </tbody>
            <tfoot> <tr><td colspan='4'>Totaal</td><td>" . $totaal . "</td></tr></tfoot></table>");
        ?>
    </body>
</html>
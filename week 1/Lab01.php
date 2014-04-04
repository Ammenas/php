<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lab 01</title>
    </head>
    <body>
        <h3>PHP lab 01</h3>
        <?php
        $merk = " Toshiba Satellite ";
        $model = " A100 ";
        $os = " Windows XP ";
        $voorraad = 80;
        $prijs = 999;
        $totaal = 0;
        $totaal += $prijs;
        $merk2 = " Acer Aspire ";
        $model2 = " 5732Z ";
        $os2 = " Linux ";
        $voorraad2 = 0;
        $prijs2 = 888;
        $totaal += $prijs2;
        
        echo("<table border='1'> " . 
        " <caption>
        <strong>SML laptops</strong>
        </caption>
        <thread>
        <tr><th>Merk</th><th>Model</th><th>Operating system</th><th>Voorraad</th><th>Prijs</th></tr>
        </thread>
        <tbody>
        <tr>
        <td>" . $merk . "</td>" . "<td>" . $model . "</td>" . "<td>" . $os . "</td>" . "<td>" . $voorraad . "</td>" . "<td>" . $prijs . "</td>" . "</tr>
        <tr>
        <td>" . $merk2 . "</td>" . "<td>" . $model2 . "</td>" . "<td>" . $os2 . "</td>" . "<td>" . $voorraad2 . "</td>" . "<td>" . $prijs2 . "</td>" . "</tr>
        <tfoot>
        <tr><td colspan='4'>Totaal</td><td>" . $totaal . "</td></tr></tfoot></table>");
        ?>
    </body>
</html>

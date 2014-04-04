<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>arrays</title>
    </head>
    <body>
        <h3>Hash-array</h3>
        <?php
        $hoofdstad = array("DE" => "Berlijn", "BE" => "Brussel", "FR" => "Parijs", "GB" => "London", "NL" => "Amsterdam");
        ?>
        <pre>
        <?php
        $hoofdstad["IT"] = "Rome";
        $hoofdstad["VS"] = "Washington DC";
        $hoofdstad["JP"] = "Kyoto";
        $hoofdstad["RU"] = "Moskou";
        print_r($hoofdstad);
        echo "$hoofdstad[DE] ". "<br />". "$hoofdstad[BE] ". "<br />". "$hoofdstad[FR] ". "<br />". "$hoofdstad[GB] ". "<br />". "$hoofdstad[NL]";
        ?>
        </pre>
    </body>
</html>

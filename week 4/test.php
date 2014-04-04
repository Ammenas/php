<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>arrays</title>
    </head>
    <body>
        <h3>Hash-array</h3>
        <?php
        $hoofdstad = array("Berlijn", "Brussel", "Parijs", "London", "Amsterdam");
        ?>
        <pre>
        <?php
        $hoofdstad[5] = "Rome";
        $hoofdstad[6] = "Washington DC";
        $hoofdstad[7] = "Kyoto";
        $hoofdstad[9] = "Moskou";
        $hoofdstad[] = "Lissabon";
        print_r($hoofdstad);
        echo "$hoofdstad[1] ". "<br />". "$hoofdstad[0]] ". "<br />". "$hoofdstad[6] ". "<br />". "$hoofdstad[9] ". "<br />". "$hoofdstad[7]";
        ?>
        </pre>
    </body>
</html>
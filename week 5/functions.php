<?php
function groet($naam)
{
    echo "hallo " . $naam . ", wat zie je er goed uit vandaag!";
}
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Functies</title>
    </head>
    <body>
        <h3>Functies</h3>
        <?php
        groet("Francesco");
        ?>
    </body>
</html>
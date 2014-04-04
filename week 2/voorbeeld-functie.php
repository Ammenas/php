<?php

function drank($leeftijd, $money){
if ( $leeftijd >= 18 && $money >= 5 )
{
    echo "Hij kan drank kopen en heeft genoeg geld";
}
elseif ( $leeftijd >= 18 && $money <= 5 )
{
    echo "hij mag wel drank kopen, maar heeft niet genoeg geld";
}
elseif ( $leeftijd <= 18 && $money >= 5 )
{
    echo "hij mag geen drank kopen, maar heeft wel genoeg geld";
}
else
{
    echo "hij mag geen drank kopen en heeft niet genoeg geld";
}
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
        echo "komt een man bij de kassa.. <br />";
        drank(24, 20);
        echo "<br />man verlaat de winkel <br /><br /><br />";
        echo "komt een andere man bij de kassa.. <br />";
        drank(18, 4);
        echo "<br />man verlaat de winkel<br /><br /><br />";
        echo "komt een andere man bij de kassa.. <br />";
        drank(16, 8);
        echo "<br />man verlaat de winkel<br /><br /><br />";
        ?>
    </body>
</html>
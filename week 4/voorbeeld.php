<?php
$mijnleeftijd = 24;
$nix18 = 18;
$geld = 10;
$prijs = 5;

echo "komt een man bij de kassa.. <br />";
if ( $mijnleeftijd >= $nix18 && $geld >= $prijs )
{
    echo "Hij kan drank kopen en heeft genoeg geld";
}
elseif ( $mijnleeftijd >= $nix18 && $geld <=$prijs )
{
    echo "hij mag wel drank kopen, maar heeft niet genoeg geld";
}
elseif ( $mijnleeftijd <= $nix18 && $geld >=$prijs )
{
    echo "hij mag geen drank kopen, maar heeft wel genoeg geld";
}
else
{
    echo "hij mag geen drank kopen en heeft niet genoeg geld";
}
echo "<br />man verlaat de winkel"
?>

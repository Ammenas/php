<?php
if (!empty($_POST["naam"]) and !empty($_POST["adres"]) and !empty($_POST["postcode"]) and !empty($_POST["plaats"]))
{
$_POST["naam"];
echo $_POST["naam"] . "<br />";
$_POST["adres"];
echo $_POST["adres"] . "<br />";
$_POST["postcode"];
echo $_POST["postcode"] . "<br />";
$_POST["plaats"];
echo $_POST["plaats"] . "<br />";
}
else
{
    echo "u moet iets invullen";
}
if (empty($_POST["naam"]) || empty($_POST["adres"]) || empty($_POST["postcode"]) || empty($_POST["plaats"]))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <div>
            
            <form action="form.php" method="post">
                 
                            naam:
                                <input type="text" id="naam" name="naam" /><br>
                            adres:
                                <input type="text" id="adres" name="adres" /><br>
                            postcode:
                                <input type="text" id="postcode" name="postcode" /><br>
                            plaats:
                                <input type="text" id="plaats" name="plaats"  /><br>
                                <input type="submit" id="submit" name="submit" />
                                
            </form>
        </div>
    </body>
</html>
<?php
}

?>
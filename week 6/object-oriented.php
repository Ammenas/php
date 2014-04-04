<?php
class auto{
    public $merk;
    public $kleur;
    public $brandstof;
    function geluid(){
        echo "vrrrroooeeeemmmm";
    }
}
$alfa = new auto();
$alfa->merk = "alfa romeo";
$alfa->kleur = "donker blauw";
$alfa->brandstof = "benzine";
$alfa->geluid();

$vanquish = new auto();
$vanquish->merk = "aston martin";
$vanquish->kleur = "zilver";
$vanquish->brandstof = "diesel";
$vanquish->geluid();

    echo "<pre>";
    print_r($alfa);
    print_r($vanquish);
    echo "</pre>";

?>

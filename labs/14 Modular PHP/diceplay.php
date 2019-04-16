<?php

include("diceclasses.inc.php");

$faces = $_GET["faces"];
$throws = $_GET["throws"];
$huijjaus = 1;
$material = "regular";

if (isset($_GET["huijjaus"]))
{
    $huijjaus = $_GET["huijjaus"];
}
if (isset($_GET["material"]))
{
    $material = $_GET["material"];
}

$results = array();

// make dice
$dice = new Dice($faces, $huijjaus, $material);
for ($i = 1; $i<=$throws; $i++) {
    $res = $dice->cast();
    $kesk = $dice->average();
    $results[] = array('id' => strval($i), 'res' => strval($res), 'keskiarvo' => strval($kesk));
}
$freqs = array();
for ($i = 1; $i<=$faces; $i++) {
    $freqs[] = array ('eyes' => strval($i), 'frequency' => strval($dice->getFreq($i)));
}
echo json_encode(array('faces'=>$faces,'results'=>$results,'frequencies'=>$freqs,
    'keskiarvo'=>$kesk, 'CHEATCODES' =>$huijjaus, 'Material = ' => $material));



?>
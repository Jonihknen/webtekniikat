<?php
// Array with names
$a[] = "Anna";
$a[] = "Arja";
$a[] = "Leo";
$a[] = "Aleksi";
$a[] = "Aino";
$a[] = "Sari";
$a[] = "Teemu";
$a[] = "Heikki";
$a[] = "Inga";
$a[] = "Maltti";
$a[] = "Kirsi";
$a[] = "Laila";
$a[] = "Nina";
$a[] = "Orvokki";
$a[] = "Pekka";
$a[] = "Amanda";
$a[] = "Raimo";
$a[] = "Sirpa";
$a[] = "Liisa";
$a[] = "Erkki";
$a[] = "Aimo";
$a[] = "Risto";
$a[] = "Markku";
$a[] = "Peppi";
$a[] = "Visa";
$a[] = "Elisa";
$a[] = "Eila";
$a[] = "Ellen";
$a[] = "Valtti";
$a[] = "Vihtori";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

$lista = array();

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                //$asd ->firstname = $hint;
                array_push($lista, $hint);
                //$lista = array('firstname' => $hint);
                $hint .= ", $name";
            }
        }
    }
}
$taa = $lista[0];
$lista2 = array('firstname' => $taa);
$palauta = json_encode($lista2);
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $palauta;
?>

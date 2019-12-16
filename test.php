<?php
$znak = $_GET["znak"];
$liczba1 = $_GET["liczba1"];
$liczba2 = $_GET["liczba2"];
if($znak=="+"){
    $wynik = $liczba1 + $liczba2;
    print"<h1>$liczba1 $znak $liczba2 = $wynik</h1>";
}
else if($znak=="-"){
    $wynik = $liczba1 - $liczba2;
    print"<h1>$liczba1 $znak $liczba2 = $wynik</h1>";
}
else if($znak=="*"){
    $wynik = $liczba1 * $liczba2;
    print"<h1>$liczba1 $znak $liczba2 = $wynik</h1>";
}
else if($znak=="/"){
    $wynik = $liczba1 / $liczba2;
    print"<h1>$liczba1 $znak $liczba2 = $wynik</h1>";
}
else
    print("Podano bledny znak");



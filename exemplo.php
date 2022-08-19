<?php
/*
$xyz = "
        <ul>
        <li>Item 0</li>
        <li>Item 1</li>
        <li>Item 2</li>
        </ul>
    ";
    echo $xyz;
*/

$lista = "<ul>";

    for ($i=0; $i < 5 ; $i++) { 
        //echo "Valor do i => $i <br>";
        $lista .= "<li>Item $i</li>";
    }

    $lista .= "</ul>";

    echo $lista;

?>
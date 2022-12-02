<?php


function culc($count)
{
    $fruits = ["りんご" => "300", "みかん" => "150", "もも" => "3000"];
    foreach ($fruits as $key => $value) {
        echo $key . "は" . $value * $count . "円です";
        echo '<br>';
    }
}

culc(2);

?>
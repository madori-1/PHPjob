<?php


function culc($count)
{
    $fruits = ["りんご" => "300", "みかん" => "150", "もも" => "3000"];
    foreach ($fruits as $key => $value) {
        echo $key . "は" . $value * $count . "円です";
        echo '<br>';
    }
}

/*以下、任意の個数を記入*/
culc(1);

?>
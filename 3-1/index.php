<?php

$num = 0;

for ($i = 0; $i < 101; $i++) {
    $num = $i;
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz!!";
    } elseif ($i % 3 == 0) {
        echo "Fizz!";
    } elseif ($i % 5 == 0) {
        echo "Buzz!";
    } else {
        echo $num;
    }
   echo '<br>';
}
?>
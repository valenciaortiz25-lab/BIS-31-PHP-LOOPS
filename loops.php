<?php

function loop1() {
    for ($i = 1; $i <= 18; $i++) {
        echo "<li>$i</li>";
    }
}

function loop2() {
    $i = 1;
    while ($i <= 27) {
        echo "<li>$i</li>";
        $i++;
    }
}

function loop3() {
    $i = 1;
    do {
        echo "<li>$i</li>";
        $i++;
    } while ($i <= 15);
}

function sumOdd() {
    $sum = 0;
    for ($i = 2; $i <= 21; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    echo "The sum of odd numbers from 2 to 21 is: $sum";
}

function productEven() {
    $product = 1;
    for ($i = 3; $i <= 17; $i++) {
        if ($i % 2 == 0) {
            $product *= $i;
        }
    }
    echo "The product of even numbers from 3 to 17 is: $product";
}

?>
<?php

for ($i=9; $i > 0; $i--) { 
    for ($j=9; $j > 0; $j--) {
        $total = $i * $j;
        if ($total < 10) {
            echo ' ' . $total;
        } else {
            echo $total;
        }
        echo ' ';
    }
    echo PHP_EOL;
}
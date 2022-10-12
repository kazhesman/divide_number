<?php
$n = 50;
// $k = 2;
echo "$n:";
for ($i=2; $i <= $n; $i++) { 
    if($n % $i != 0) {
        continue;
    }
    else {
        echo "$i</br>\n";
    }
    
}
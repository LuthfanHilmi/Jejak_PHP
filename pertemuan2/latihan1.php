<?php

for ($i = 1; $i <= 5; $i++) {
    echo $i;
    if ($i == 3) { 
        break;
    } else {
        continue;
    }
}

?>
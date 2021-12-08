<?php

for ($contador = 1; $contador <= 100; $contador++) {
    if ($contador % 2 != 1) {
        continue;
    }
    echo $contador . PHP_EOL;
};

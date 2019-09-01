<?php

const SIZE = 10;
$result;

for($index = 1; $index <= SIZE; $index++) {
    $result += 1/$index;
}

print $result;
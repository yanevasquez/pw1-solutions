<?php

// Numbers-for
$result1;

foreach (range(0, 99) as $number) {
    $result1 .= ($number < 10) ? '0' . $number . ' ' : $number . ' ';
    if (($number + 1) % 10 == 0)
        $result1 .= "\n";
}

print $result1;




// Numbers-forfor
$result2;

foreach (range(0, 9) as $i) {
    foreach(range(0, 9) as $j) {
        $result2 .= $i . $j . ' ';
    }
    $result2 .= "\n";
}

print $result2;




// Numbers-reverse-for
$result3;

foreach (range(99, 0) as $number) {
    $result3 .= ($number < 10) ? '0' . $number . ' ' : $number . ' ';
    if ($number % 10 == 0)
        $result3 .= "\n";
}

print $result3;




// Numbers-reverse-odd-for
$result4;

foreach (range(99, 0) as $number) {
    if ($number % 2 !== 0)
        $result4 .= ($number < 10) ? '0' . $number . ' ' : $number .  ' ';
        if ($number % 10 == 1)
            $result4 .= "\n";
}

print $result4;
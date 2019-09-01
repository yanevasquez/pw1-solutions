<?php
$weigth = 60.0;
$height = 1.65;
$bmi = $weigth/$height**2;
$result;

switch (true) {
    case $bmi < 18.5:
        $result = "BMI: " .  $bmi . "\nResult: Underweight";
        break;
    case $bmi <= 24.9:
        $result = "BMI: " .  $bmi . "\nResult: Normal weight";
        break;
    case $bmi <= 29.9:
        $result = "BMI: " .  $bmi . "\nResult: Overweight";
        break;
    default:
        $result = "BMI: " .  $bmi . "\nResult: Obesity";
}

print $result;
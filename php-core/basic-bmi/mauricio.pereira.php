<?php

$weight = 60.0;
$height = 1.65;
$result;
$BMI = $weight / ($height ** 2);

// utilizando IF

print("BMI: $BMI\n");

if($BMI < 18.5) {
    $result = "Result: Underweight";
} elseif($BMI < 25) {
    $result = "Result: Normal weight";
} elseif($BMI < 30) {
    $result = "Result: Overweight";
} else {
    $result = "Result: Obesity";
}

print("$result\n");

// utilizando SWITCH

switch ($BMI) {
    case ($BMI < 18.5):
        $result = "Result: Underweight";
        break;
    case ($BMI < 25):
        $result = "Result: Normal weight";
        break;
    case ($BMI < 30):
        $result = "Result: Overweight";
        break;
    default:
        $result = "Result: Obesity";
}
print($result);

?>

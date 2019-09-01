<?php
const SALARY = 3500;
$result;

switch (true) {
    case SALARY < 1903.99:
        $result = 'IRRF: 0';
        break;
    case SALARY <= 2826.65:
        $tax = SALARY * 0.075 - 142.80;
        $result = 'IRRF: ' .  $tax;
        break;
    case SALARY <= 3751.05:
        $tax = SALARY * 0.15 - 354.80;
        $result = 'IRRF: ' .  $tax;
        break;
    case SALARY <= 4664.68:
        $tax = SALARY * 0.225 - 636.13;
        $result = 'IRRF: ' .  $tax;
        break;
    default:
        $tax = SALARY * 0.275 - 869.36;
        $result = 'IRRF: ' .  $tax;
}

print $result;
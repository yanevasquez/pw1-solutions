<?php

const salary = 3500;

if (salary < 1903.99){
    $tax = salary;
} elseif (salary < 2826.65){
    $tax = salary * 0.075 - 142.8;
} else if (salary < 3751.06) {
    $tax = salary * 0.15 - 354.8;
} else if (salary < 4664.69) {
    $tax = salary * 0.225 - 636.13;
} else {
    $tax = salary * 0.275 - 869.36;
}

print("IRRF: $tax");

?>
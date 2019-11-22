<?php

function triangleChecker($a, $b, $c)
{
  if($a >= $b + $c || $b >= $c + $a || $c >= $a + $b){
    return 'none';
  } else if ($a == $b && $b == $c){
    return 'equilateral';
  } else if ($a != $b && $b != $c && $c != $a) {
    return 'scalene';
  } else {
    return 'isosceles';
  }
}

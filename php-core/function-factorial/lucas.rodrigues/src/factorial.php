<?php

function factorial($number)
{
  $result = 1;
  for ($i=1; $i <= $number; $i++) { 
    $result *= $i; 
  }
  return $result;
}

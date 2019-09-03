<?php

const size = 10;
$result=0;
for($i = 1;$i<= size;$i++){
    $result += 1/$i;
}
echo "h(".size."): $result\n";

?>
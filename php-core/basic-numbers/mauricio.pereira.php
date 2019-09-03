<?php

// utilizando FOR

$j=0;
for($i = 0; $j <= 9; $i++ ){
    print("".$j.$i." ");
        if($i == 9){
            print("\n");
    $i=-1;
    $j++;
    }
}

// utilizando FOR FOR

for($i = 0; $i <= 9; $i++ ){
    for($j = 0; $j <= 9; $j++ ){
        print("".$i.$j." ");
    }
    print("\n");
}

// utilizando FOR FOR, exibindo os números ímpares

for($i = 0; $i <= 9; $i++ ){
    for($j = 0; $j <= 9; $j++ ){
        if($j % 2 !== 0){
            print("".$i.$j." ");
        }
    }
    print("\n");
}
   
?>
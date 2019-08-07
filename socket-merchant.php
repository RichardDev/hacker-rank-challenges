<?php
/**
 * Problem Socket-Merchant
 * 
 * Link of this challenge:
 * 
 * https://www.hackerrank.com/challenges/sock-merchant/problem?h_l=interview&playlist_slugs%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D=warmup
 * 
 */

function sockMerchant($n , $arr) {
     sort($arr); 
     $i = 0;
     $pairs = 0;
     while($i < $n) {         
         if ($arr[$i] == $arr[$i+1]) {             
             $pairs++;
             $i++;
         }
         
         $i++;
     }     
     return $pairs;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
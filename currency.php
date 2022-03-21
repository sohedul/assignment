<?php

$amount= 1000  ;

$type=  'USD';

switch($type) {

case 'USD':
$rate= 86.24 ;
break;

case 'CAD' :
$rate= 68.42 ;
break;

case 'Pound' :
$rate= 113.68 ;
break;

case 'Euro' :
$rate= 95.47 ;
break;

case 'Won ' :
$rate= 0.071 ;
break;

default :
$rate = 0;
break;

}

$bdt= $amount * $rate;

echo "{$amount} {$type} = '{$bdt}' BDT.";



?>




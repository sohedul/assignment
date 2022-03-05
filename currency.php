<?php

$amount= 100  ;

$type=  'Dollar';

switch($type) {

case 'Dollar':
$rate= 85.5 ;
break;

case 'Pound' :
$rate= 120.0 ;
break;

case 'Won' :
$rate= 85.5 ;
break;

case 'Euro' :
$rate= 220.0 ;
break;

default :
$rate = 0;
break;

}

$bdt= $amount * $rate;

echo "{$amount} {$type} = '{$bdt}' BDT.";

?>

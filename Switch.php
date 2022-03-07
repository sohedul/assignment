<?php

$amount= 500;

$currency= 'Dollar'; 

switch($currency){

    case 'Dollar':
    $rate=85.5;
    break;

    case 'Pound':
        $rate=120;
        break;

        case 'Won':
            $rate=85.5;
            break;

            case 'Euro':
                $rate=220;
                break;

default :
$rate=0;
break;

}


$Bdt= $amount * $rate ;

echo " Total amount is {$Bdt} Taka";


?>


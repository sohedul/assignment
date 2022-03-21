<?php

/**
 * Function: BMI calculation when weight and height will be given
 * Function: Area
 * Function: Age calculation
 * Function: Borohat
 * Function: Chotohat
 */

 /*
function getBMI($weight, $height){

    $bmi = $weight/ ( $height * $height);
    
    if($bmi < 18.5) {
    
        echo "You are underweight";
    
    }elseif ($bmi>=18.5 && $bmi<=25.0){
    
            echo "You are Normal";
    
        }elseif ($bmi>=25 && $bmi<30){
    
                echo "You are Overweight";
    
            }elseif ($bmi>30 ){
    
                    echo "You are obesity";
                }
            }

*/

function getArea($type ='r' , $length , $width = null){

$area ='';

$area_type = '';

switch ($type) {
    case 'r':
        $area= $length * $width;
        $area_type = 'Rectangular';
        break;
    
    case 's':
        $area= $length * $length;
        $area_type = 'Square';
        break;
           
    case 't':
        $area= 0.5 * ($length * $width);
        $area_type = 'Triangle';
        break;
        
    case 'c':
        $area= 3.1416 * ($length * $length);
        $area_type = 'Radious';
        break;


    default:
        $area= 'Undefined';
        $area_type = 'Undefined';
        break;
}

return "Area of this {$area_type} is {$area}";

}



/*

function ageCal (string $name, int $year){

    $age = 2022 - $year;

echo "Hi {$name}, You are {$year} years old" ;

}

*/

/*
function boroHat($txt) {

    echo "<span style = 'text-transform : uppercase;'>{$txt}</span>" ;

}

*/
/*
function chotoHat($txt) {

    return "<span style = 'text-transform : lowercase;'> {$txt} </span>" ;

}

*/




?>


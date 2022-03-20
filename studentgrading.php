<?php

$marks= 80  ;

switch($marks){

case $marks>=80 && $marks<=100:
    $result= 'Goldern A+';
    break;

    case $marks<80 && $marks>=70:
        $result= 'A';
        break;

        case $marks<70 && $marks>=60:
            $result= 'A-';
            break;

            case $marks<60 && $marks>=50:
                $result= 'B';
                break;

                case $marks<50 && $marks>=40:
                    $result= 'B-';
                    break;

                    case $marks<40 && $marks>=33:
                        $result= 'Pass';
                        break;

                        case $marks<33 && $marks>=0:
                            $result= 'Fail/Not successful';
                            break;

}

echo "Your result is $result"

?>

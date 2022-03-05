<?php
$marks      =   80;

if ($marks>=80 && $marks<=100){
    echo "<h1 style=\"color:#FFD700;\"> He has stood Grade A+</h1>";
}elseif($marks>=70 && $marks<80){
    echo "<h1 style=\"color:orangered;\"> He has stood Grade A</h1>";
}elseif($marks>=60 && $marks<70){
    echo "<h1 style=\"color:skyblue;\"> He has stood Grade A-</h1>";
}elseif($marks>=50 && $marks<60){
    echo "<h1 style=\"color:green;\"> He has stood Grade B</h1>";
}elseif($marks>=40 && $marks<50){
    echo "<h1 style=\"color:blue;\"> He has stood Grade C</h1>";
}elseif($marks>=33 && $marks<40){ 
    echo "<h1 style=\"color:orange;\"> He has stood Grade Pass</h1>";
}elseif($marks>=0 && $marks<=32){ 
    echo "<h1 style=\"color:red;\"> He could not be succeeded</h1>";
}else  {
echo    "<h1 style=\"color:yellow;\"> The result is not valid. Please check consistency.</h1>";
}
?>

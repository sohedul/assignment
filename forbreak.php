<?php

for($i=1; $i<=1000; $i=$i+ 2){

   echo  "I love PHP {$i} <hr>";

   if($i % 15 == 0) {

      break;

   }
}

?>

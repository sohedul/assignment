<?

for($i=1; $i<=1000; $i=$i+ 3){

   echo  "I love PHP {$i} <hr>";

   if($i % 11 == 0) {

      break;

   }
}

?>

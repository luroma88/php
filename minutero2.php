<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");
$hr=date("H");
$min=date("i");

echo "La hora es $hr:$min hs. <br>";

for($i=0;$i<59;$i++){
    echo "La hora es " . (($hr >=0 && $hr <=9)? "0$hr" : $hr) . ":" . (($min >=0 && $min <=9)? "0$min" : $min) . "<br>" ;
    $min++;
    
    if( $min ==60 ){
        $min=00;
        $hr++;
     
   
    }
    if($hr ==24) {
        $hr=00;
       
    }
    echo "La hora es " . (($hr >=0 && $hr <=9)? "0$hr" : $hr) . ":" . (($min >=0 && $min <=9)? "0$min" : $min) . "<br>" ;


}

?>
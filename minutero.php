<?php 
$hr=21;
$min=10;
echo "La hora es $hr:$min hs. <br>";

for($i=0;$i<59;$i++){
    $min++;
    
    if( $min ==60 ){
        $min=00;
        $hr++;
     
   
    }
    if($hr ==24) {
        $hr=00;
       
    }
    echo "La hora es $hr:$min hs. <br>";


}

?>
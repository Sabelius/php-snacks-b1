<?php 
    $array = [];

    while(count($array) < 15){
        $random = rand(0,100);

        if(!in_array($random, $array)){
            $array[] = $random;
        }
    }

    var_dump($array);

?>



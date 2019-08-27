<?php
namespace corephp; 


    function getMultiples(){
        for($i=1;$i<=100;$i++){
            switch ($i) {
                case ($i%3==0 && $i%5==0) :
                    echo 'Linianos ';
                    break;
                case ($i%3==0) :
                    echo 'Linio ';
                    break;
                case ($i%5==0) :
                    echo 'IT ';
                    break;
                default :
                    echo ' '.$i.' ';
            }
        }
    }
    getMultiples();

?>

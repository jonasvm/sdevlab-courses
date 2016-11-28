<?php
   $carros = array("Uno", "Fox", "Brasilia");
   $numeros = array(7, 3, 1, 5, 11);
   $idades = array("João"=>"15", "Maria"=>"17", "Zezinho"=>"13");

   sort($carros );
   sort($numeros );

   rsort($carros );
   rsort($numeros );

   asort($idades );

   ksort($idades );

   arsort($idades );

   krsort($idades );
?>
<?php
   $x = 101;
   $y = 10;

   function testeSoma() {
      global $x, $y;
      $y = $x + $y;
   }
   testeSoma();
   echo $y; // Resultado da soma = 111
?>
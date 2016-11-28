<?php
   function teste() {
      static $x = 0;    // para a variável x ser do tipo estática,
      echo $x;         //  deve se usar a keyword static antes de sua declaração
      $x++;
   }
   teste();
?>

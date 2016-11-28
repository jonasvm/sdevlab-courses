<?php
   $x = null;
   $x = "Isto é uma string!";
   $x = 100;
   $x = 100.1;
   $x = true;
   $nomes = array("João","Maria");

   class Car {
      function Car() {
        $this - > model = "VW";
      }
    }
   
   // create an object
   $herbie = new Car();
   // show object properties
   echo $herbie - > model;
?>
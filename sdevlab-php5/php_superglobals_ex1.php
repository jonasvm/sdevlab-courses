<?php
   $x = 75;
   $y = 25;
   $z;
?>

<?php
   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
?>

<?php
   echo $_SERVER['PHP_SELF'];
?>
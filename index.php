<!DOCTYPE html>
<html>
  <body>
    <h1>PHP Einführung</h1>
<?php
$meineVariable = "<b>Text</b>";
for($i=1; $i<10; $i++){
echo "Dieser Text wird mit php ausgegeben: ".$meineVariable. "hier geht es wieder weiter ".$meineVariable;
  echo "<br>";
}

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
    for($n=0; $n<count($cars); $n++){
     echo $cars[$n]; 
    }
    
    ?>
  </body>
    </html>

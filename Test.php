<?php

    $myfile = fopen("product_costs.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  
  $array = explode("\n", $myfile);
  $float_value_of_var = floatval($array);
    echo $float_value_of_var[0];
}
fclose($myfile);
?>

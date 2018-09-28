<?php
echo "RIMAC AUTOMOBILI";
$cars = array("C_One"=>"35", "C_Two"=>"37", "E30"=>"43");

foreach($cars as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
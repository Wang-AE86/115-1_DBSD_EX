<?php
include "ch.php";
echo "EX03<br/>";
$arr = array(
    "Color" => "Black",
    "name" => "Chen-Hu-An",
    "Shape" => "Triangle",
    100
);
$arr["type"] = "PHP";
unset($arr["type"]);
foreach ($arr as $key => $value) {
    echo "$key=>$value ";
}
echo "<br/>";
print_r($arr);
<?php
function printHeader(){
    echo"<h3>SID : C113181148</h3>";
    echo"<h3>Name : 王智弘</h3>";
    echo"<h3>EX06</h3>";
    
}
$weight = 75;
$bmi = function ($height) use ($weight) {
    $height = $height / 100.0;
    return $weight / $height / $height;
};
printHeader();

$h = 175;
echo "BMI = ". $bmi($h) . "<br/>";
<?php
$array1=array(
    "key1"=>10,
    "key2"=>20,
    "key3"=>30,

);
$array2=array(50,60,70,80);
$array_brackets=["value1","value2","value3"];
$array3=array(
"first"=>array("first_first"=>20),
"second"=>array("second_first"=>20,
"second_second"=>array(
    "second_second_first"=>"sub sub array")
    )    
);
echo"<pre>";
print_r($array1);
print_r($array2);
print_r($array_brackets);
print_r($array3);
rsort($array1);
rsort($array2);
print_r($array1);
print_r($array2);

?>


<?php
$arr = array("apple","banana","cherry","orange","coconut");
$arr2 = array("name"=>"Jasvinder","email"=>"jasvinder@gmail.com");
echo $arr2['name'];
echo "<br>";
asort($arr2);

print_r($arr2);

rsort($arr);
print_r($arr);
?>
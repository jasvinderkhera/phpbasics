<?php

$arr = array("Gaurav","Jatin","Karan","Ravi");

$users = array(
    array("name"=>"Jai", "gender"=>"male"),
    array("name"=>"sheela", "gender"=>"female"),
    array("name"=>"Jai", "gender"=>"male"),
);

// function cap($item){
// return strtoupper($item);
// }
// $convertedItem = array_map("cap",$arr);
// var_dump($convertedItem) ;

function adding($item){
    if($item['gender'] == 'male'){
        return "Mr."." ". $item['name'];
    } else{
        return "Ms."." ". $item['name'];
    }
}

$added = array_map("adding",$users);
var_dump($added);

?>
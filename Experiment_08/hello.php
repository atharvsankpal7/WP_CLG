<?php

$name = "Tyler Durden";
$age = 29;
$isStudent = true;

$total = $age + 5;

$fruits = array("apple", "banana", "orange");

if ($age > 18) {
    echo "You are eligible to vote";
} else {
    echo "You are not eligible to vote";
}

for ($i = 0; $i < count($fruits); $i++) {
    echo "Fruit: $fruits[$i]\n";
}

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}

switch ($age) {
    case 18:
        echo "You are a young adult";
        break;
    case 30:
        echo "You are in your prime";
        break;
    default:
        echo "Your age is unknown";
        break;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> AR 5 </title>
</head>
<body>
    <h1> Ejercicio 3 </h1>
<?php

$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];

$capitals = [];
for ($i = 0; $i < count($city); $i++) {
    for ($i = 0; $i < count($city); $i++) {
        $capitals[] = [
            'city' => $city[$i],
            'country' => $country[$i]
        ];
    }
} 
    echo "<pre>";
    var_dump($capitals);
?>
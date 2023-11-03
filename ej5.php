<!DOCTYPE html>
<html>
<head>
    <title> AR 5 </title>
</head>
<body>
    <h1> Ejercicio 5 </h1>
<?php

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";

$city_array = explode(",", $data);
$capitals = [];

$city_array [count($city_array) -1] =
rtrim($city_array[count($city_array) -1], ',');
echo "<pre>";
print_r($city_array);
?>
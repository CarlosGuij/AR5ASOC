<!DOCTYPE html>
<html>
<head>
    <title> AR 5 </title>
</head>
<body>
    <h1> Ejercicio 4 </h1>
<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$city_array = explode(",", $city);
$country_array = explode(",", $country);
$capitals = [];

for ($i = 0; $i < count($city_array); $i++) {
    $capitals[] = [
        'country' => $country_array[$i],
        'city' => $city_array[$i]
    ];
}
echo "<pre>";
var_dump($capitals);

?>
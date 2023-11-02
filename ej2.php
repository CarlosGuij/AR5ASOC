<!DOCTYPE html>
<html>
<head>
    <title> AR 5 </title>
</head>
<body>
    <h1> Ejercicio 2 </h1>
<?php

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryArray = explode(",",$country);
$capitals = [];
for ($i = 0; $i < count($countryArray); $i++) {
    $countryCity["city"] = $countryArray[$i];
    array_push($capitals, $countryCity);
}
echo "<pre>";
var_dump($capitals); 

?>
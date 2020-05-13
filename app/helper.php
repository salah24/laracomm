<?php
 function getPrice($priceDEC){
    $price= floatval($priceDEC) /100;

     return number_format($price, 2,',',' ') . "$";

 }
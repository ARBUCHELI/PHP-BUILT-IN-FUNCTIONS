<?php
namespace Codecademy;

// Write your code below:
function calculateDistance($num1, $num2) {
  return abs($num1 - $num2);
}

echo calculateDistance(-1, 4);
echo calculateDistance(4, -1);
echo calculateDistance(3, 7);
echo calculateDistance(7, 3);

function calculateTip($cost) {
  return round($cost + ($cost * 0.18));
}

echo calculateTip(100);
echo calculateTip(35);
echo calculateTip(88.77);
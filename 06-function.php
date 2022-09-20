<?php

function register($email) {
    echo $email . ' register';
}

// register('Apu');

function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
}

$number = sum();
// echo $number;

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

// echo $subtract(5, 3);

$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(3, 4);
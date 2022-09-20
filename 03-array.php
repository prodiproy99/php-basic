<?php
// simple array
$numbers = [1, 44, 55, 22];
$fruits = ['apple', 'oragne', 'pear'];
// var_dump($numbers);
// echo $fruits[0];

// Associative Arrray
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
// echo $hex ['blue'];

$person = [
    'first_name' => 'Dipto',
    'last_name' => 'Roy',
    'email' => 'dipto@gmail.com',
];
// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Dipto',
        'last_name' => 'Roy',
        'email' => 'dipto@gmail.com',
    ],
    [
        'first_name' => 'Prodip',
        'last_name' => 'Roy',
        'email' => 'prodip@gmail.com',
    ],
    [
        'first_name' => 'Apu',
        'last_name' => 'Roy',
        'email' => 'apu@gmail.com',
    ]
    ];

    // echo $people[0]['email'];

    var_dump(json_encode($people));


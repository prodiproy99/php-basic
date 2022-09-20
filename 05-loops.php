<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

// for($x = 0; $x <= 10; $x++){
//     echo 'Number ' . $x . '<br>';
// }

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;
// while($x <= 15){
//     echo 'Number' . $x . '<br>';
    
//     $x = $x + 1;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 6;

// do{
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while($x <= 5);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count($posts); $x++){
//     echo $posts[$x];
// }

// foreach($posts as $post){
//     echo $post;
// }


// foreach($posts as $index => $post){
//     echo $index + 1 . '-' . $post . '<br>';
// }

$person = [
    'first_name' => 'Dipto',
    'last_name' => 'Roy',
    'email' => 'dipto@gmail.com',
];

foreach($person as $key => $value) {
    echo "$key - $value <br>";
}


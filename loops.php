<?php
    # Loops - Execute code set number of times

    /*
      - For Loop
      - While Loops
      - Do..While Loop
      - For Each Loop
    */

    # For Loop

    for($i = 0; $i < 10; $i++) {
      // echo $i;
    }

    # While Loop

    $i = 0;
    while ($i < 11){
      // echo $i;

      $i++;

    }

    # Do...While Loop

    $i = 0;

    do {
      // echo $i;
      // echo '<br>';
      $i++;
    }
    while($i < 10);

    # For...Each Loop for Arrays

    $people = array('Nomi','Shah', 'Elliot');

    foreach($people as $person) {
      // echo $person;
    }


    $people = array('Nomi' => 'nomi@gmail.com','Shah' => 'shah@gmail.com', 'Elliot' => 'elliot@gmail.com');

    foreach($people as $person => $email) {
      echo $person .' : ' . $email;
      echo '<br>';
    }


 ?>

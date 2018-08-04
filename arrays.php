<?php
    # Arrays - Variable that holds multiple values

    /*
      - Indexed
      - Associative
      - Multi-dimentionals
    */


    # Indexed Arrays

    $people = array('Nome', 'Shah', 'Elliot');
    $ints = array(1 ,2 ,3 ,4 ,5);
    $cars = ['Honda', 'Toyota', 'Fords'];

    // echo count($cars);
     // var_dump($cars);          # Good for Debugging
     // print_r($people);         # Good for Debgging


    // echo $people[2];
    // echo $cars[1];
    // echo $ints[1];

    # Associative Array
    $people = array('Nomi' => 20, 'Shah' => 21, 'Elliot' => 26);
    $age = array(20 => 'Nomi', 21 => 'Shah', 26 => 'Elliot');

    // echo $people['Nomi'];
    // echo $age[26];

    # Multi-Dimentional Arrays

    $cars = array(
      array('Honda', 20, 33),
      array('Toyota', 21, 30),
      array('Ford', 15, 35)
    );

    echo $cars[1][2];


 ?>

<?php

    # FUNCTIONS - Code that can be repeatedly called

    /*
      - CamelCame  myFunction()
      - Lower Case  my_funtion()
      - Pascal Case  MyFunction()
    */

    function greeting(){
      // echo 'Hello World';
    }

    greeting();

    function hello($name) {
      // echo "Hello $name <br>";
    }
    hello('Nomi');

    function sum($num1, $num2) {
      return $num1 + $num2;
    }

    // echo sum(5,10);

    # Pass by Refference

    $Mynum = 5;

    function addOne($num) {
      $num += 1;
    }

    function addFive(&$num) {
      $num += 5;
    }

    addOne($Mynum);
    echo "AddOne: $Mynum <br>";

    addFive($Mynum);
    echo "AddFive: $Mynum <br>";

  ?>

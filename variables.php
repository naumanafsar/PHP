<?php
    // Single Line Comment
    # Single Line Comment

    /*
    Multiline
    Comment
    */

    # Variables
      /*
          - Prefix $
          - Starts with a Letter or an Underscore
          - Only Letters, numbers and Underscores
          - Case Sensitive
      */

    # DataTypes
      /*
        - String
        - Integers
        - Boolean
        - Arrays
        - Objects
        - NULL
        - Resource
      */

      $output = 'Hello World!';
      // echo $output;

      $num1 = 5;
      $num2 = 5;
      $sum = $num1 + $num2;
      // echo $sum;

      $string1 = 'Hello';
      $string2 = 'World';
      $greeting = $string1 . ' ' . $string2;
      // echo $greeting;
      // echo "$string1 $string2 !";   # Notice the Double Quotes


      # Constants

      define('GREETING', 'Hello Everyone');
      echo GREETING;

 ?>

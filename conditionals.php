<?php

    /*
      ==
      ===
      <
      >
      >=
      <=
      !=
      !==
    */

    $num = 5;

    if($num > 5) {
      echo "$num is greater than 5";
    } elseif($num == 5) {
      echo "$num is equal to 5";
    }
    else {
      echo "$num is less than 5";
    }


    # SWITCH CASE STATEMENTS

    $favColor = 'red';

    switch($favColor){
      case 'red':
      echo 'Your Favorite color is red';
      break;

      case 'blue':
      echo 'You fav color is blue';
      break;

      case 'green';
      echo 'your fav color is green';
      break;

      default:
      echo 'Whatever';
    }

  ?>

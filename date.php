<?php

// echo date('d');    // Day
// echo date('m');    // Month
// echo date('Y');    //Year

// echo date('l');      // Day of the week

// echo date('h');         // Hour
// echo date('i');         // Minute
// echo date('s');             // Seconds
// echo date('a');             // AM or PM

// echo date( 'd-m-Y');
// echo date('h:i:sa');

$timestamp = mktime(2, 23 , 45, 9, 10 , 1998);
// echo $timestamp;

// echo date('d/m/Y h:i:sa', $timestamp);

$timestamp1 = strtotime('10:34Pm August 03 2018');

$timestamp2 = strtotime('tomorrow');

echo date('d/m/Y h:i:sa', $timestamp2);
  ?>

<?php
// Test Case 1
  $a = 100;
  $b = 200;
  $c = 300;
  if($a < $b && $a < $c){
    echo "A Is Not Larger Than B Or C";
    echo "<br>";
  }
  elseif($a > $b && $a < $c){
    echo "A Is Larger Than B";
    echo "<br>";
  }
  elseif($a < $b && $a > $c){
    echo "A Is Larger Than C";
    echo "<br>";
  }

// Test Case 2
  $a = 200;
  $b = 100;
  $c = 300;
  if($a < $b && $a < $c){
    echo "A Is Not Larger Than B Or C";
    echo "<br>";
  }
  elseif($a > $b && $a < $c){
    echo "A Is Larger Than B";
    echo "<br>";
  }
  elseif($a < $b && $a > $c){
    echo "A Is Larger Than C";
    echo "<br>";
  }

// Test Case 3
  $a = 200;
  $b = 200;
  $c = 100;
  if($a < $b && $a < $c){
    echo "A Is Not Larger Than B Or C";
    echo "<br>";
  }
  elseif($a > $b && $a < $c){
    echo "A Is Larger Than B";
    echo "<br>";
  }
  elseif($a <= $b && $a > $c){
    echo "A Is Larger Than C";
    echo "<br>";
  }


<?php 
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
 session_start();
   $deck = [
  "C",
  "H",
  "S",
  "D",
];

    $deck1 = [
      "1"=>"A",2, 3, 4, 5, 6, 7, 8 ,9,10,
      'J',
      'Q',
      'K',
 ];
        $wrong_letter = 0;
        $wrong_number = 0;
        $arr = explode (" ", $_SESSION['Select_card_deck']);
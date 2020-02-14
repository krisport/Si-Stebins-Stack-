<?php 
for ($k=0; $k < count($value); $k++) { 
	if($deck[$first_letter_index] != $value[$k][1] || empty($value[$k][1])){
		 $wrong_letter = $k;
		break;

      }
	if($first_letter_index < (count($deck)-1)){
		$first_letter_index++;
	
    }
	else{
		$first_letter_index = 0;
      }
}



 
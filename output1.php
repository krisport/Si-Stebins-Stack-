<?php 
for ($i=0; $i < count($arr); $i++) { 
 if(strlen($arr[$i]) == 2){
  $value[$i] = str_split($arr[$i]);	
}
else
{
  $value[$i] = str_split($arr[$i], 2);
}
}
  $first_letter = $value[0][1];
for ($j=0; $j <count($deck) ; $j++) { 
	if($first_letter == $deck[$j]){
		$first_letter_index = $j;
		break;
	}
	else
	{
		continue;
	}
}



 ?>
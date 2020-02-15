<?php 
$first_number = $value[0][0];
for ($d=1; $d <=count($deck1) ; $d++) { 
	if($first_number == $deck1[$d]){
		$first_number_index = $d;
		break;
	}
	else{
		continue;
	}
}

for ($s=0; $s < count($value); $s++) { 
	if($deck1[$first_number_index] != $value[$s][0] ){
		$wrong_number = $s;
		break;
	}
	if($first_number_index < (count($deck1)-2)){
		$first_number_index+=3;
	}
	else{
		if(13-$first_number_index == 0){
			$first_number_index = 3;
		}
		elseif(13-$first_number_index == 1){
			$first_number_index = 2;	
		}
		elseif(13-$first_number_index == 2){
		$first_number_index = 1;
		}
		else{
			$first_number_index+=3; 
		}
	}
}

 ?>
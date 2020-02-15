<?php 
  if($wrong_letter == $wrong_number){
	$res = $wrong_number+1;
		echo $res;
}
  else{
	if($wrong_letter == 0){
		$res = $wrong_number+1;
		echo $res;
 }
	elseif($wrong_number == 0){
		$res = $wrong_number+1;
		echo $res;
 }
	elseif ($wrong_number > $wrong_letter) {
	$res = $wrong_number+1;
		echo $res;
 }
	elseif($wrong_number < $wrong_letter){
	$res = $wrong_number+3;
		echo $res;
 }
}
        echo "<br>" . $arr[$res-2] . "</br>";
    $show_picture = $res-2;
        echo "<br>" . $arr[$show_picture] . "</br>";

        echo "<img width='10%' src='images/$arr[$show_picture].png' >";
 ?>






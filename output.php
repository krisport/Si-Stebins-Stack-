<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Si Stebbins Stack</title>
	<link rel="stylesheet" type="text/css" href="styles/style1.css">
	<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Day 1 Start
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

for ($i=0; $i < count($arr); $i++) { 
	if(strlen($arr[$i]) == 2){
		$value[$i] = str_split($arr[$i]);	
}
else{
	$value[$i] = str_split($arr[$i], 2);
}
}
$first_letter = $value[0][1];
for ($j=0; $j <count($deck) ; $j++) { 
	if($first_letter == $deck[$j]){
		$first_letter_index = $j;
		break;
	}
	else{
		continue;
	}
}

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

if($wrong_letter == $wrong_number){
	$res = $wrong_number+1;
		echo "<span class='class1'>" . $res . "</span>";		
}
else{
	if($wrong_letter == 0){
		$res = $wrong_number+1;
		echo "<span class='class1'>" . $res . "</span>";
	}
	elseif($wrong_number == 0){
		$res = $wrong_number+1;
		echo "<span class='class1'>" . $res . "</span>";
	}
	elseif ($wrong_number > $wrong_letter) {
	$res = $wrong_number+1;
		echo "<span class='class1'>" . $res . "</span>";
	}
	elseif($wrong_number < $wrong_letter){
	$res = $wrong_number+3;
		echo "<span class='class1'>" . $res . "</span>";
	}
}
    $show_picture = $res-1;

        echo "<img width='10%' src='images/$arr[$show_picture].png' >";
?>
<a href="index.php"><i class="fas fa-reply-all"></i> Back to decks</a>
</body>
</html>
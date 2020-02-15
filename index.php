<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Si Stebbins Stack</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
     <center><h1 style="color: limegreen;" class = "title">Si Stebbins Stack</h1></center>
     <form action="#" method="post">
     	<font color="red"><p>Select card deck:</p></font>
		<select name = 'Select card deck'>Select card deck
			<option value = "10D KC 3H">10D KC 3H</option>
			<option value =  "9C QH 4S 7D 10H">9C QH 4S 7D 10H</option>
			<option value =  "10D KC 3H AH">10D KC 3H AH</option>
			<option value = "10D">10D</option>
			<option value = "10H AD">10H AD</option>
			<option value = "8H JS AD 4C 7H">8H JS AD 4C 7H</option>
			<option value =  "KC 3H 6S 9D QC 2H 5S 8D">KC 3H 6S 9D QC 2H 5S 8D</option>
			<option value =  "QS 2D 5C 8H JS AD 4C 7H 10H KC 3C 6C 9D 6S 2C 5S 9H JC AH 4H QH QD 9C">QS 2D 5C 8H JS AD 4C 7H 10H KC 3C 6C 9D 6S 2C 5S 9H JC AH 4H QH QD 9C</option>
			<option value =  "7C 10H KS 3D 6C 9H QS AD">7C 10H KS 3D 6C 9H QS AD</option>
			<option value = "JD AC 4H 7S 10D KC 3H 6S 9D QC 2H">JD AC 4H 7S 10D KC 3H 6S 9D QC 2H</option>
			<option value = "7D AC 8H 5S 2D 10C AH 6S 5D 6C">7D AC 8H 5S 2D 10C AH 6S 5D 6C</option>
			<option value = "6H 9S QD 2C 5H 8S JD AC 4H 7S 10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH">6H 9S QD 2C 5H 8S JD AC 4H 7S 10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH</option>
			<option value = "6H 9S QD 2C 5H 8S JD AC 4H 7S 10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH">6H 9S QD 2C 5H 8S JD AC 4H 7S 10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH</option>
			<option value = "4H 7S 10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH AS 4D 7C 10H KS 3D 6C 9">4H 7S 10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH AS 4D 7C 10H KS 3D 6C 9</option>
			<option value = "6D 9C QH 2S 5D 8C JH AS 4D">6D 9C QH 2S 5D 8C JH AS 4D</option>
			<option value = "4S 7D 10C KH 2S 6D 9C QH 3S 5D">4S 7D 10C KH 2S 6D 9C QH 3S 5D</option>
			<option value =  "10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH">10D KC 3H 6S 9D QC 2H 5S 8D JC AH 4S 7D 10C KH 3S 6D 9C QH 2S 5D 8C JH</option>
			<option value = "6S 9D QC 2D 5C">6S 9D QC 2D 5C</option>
			<option value = "7C 10H KS 3D 6C 9H QS 2D 5C 8H JS AD 4C 7H 10S KD 3C 6H">7C 10H KS 3D 6C 9H QS 2D 5C 8H JS AD 4C 7H 10S KD 3C 6H</option>
	     </select>
		<input type="submit" name="submit" value="Check the deck">
	</form>
<?php
if(!empty($_POST['Select_card_deck'])){

	$_SESSION['Select_card_deck'] = $_POST['Select_card_deck'];
	header("location: output.php");
}
    



 ?>
</body>
</html>

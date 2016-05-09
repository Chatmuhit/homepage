<!DOCTYPE html>
<?php
$isGamer = $_POST["isGamer"];
$ownsEquipment = $_POST["ownsEquipment"];
$ownPC = $_POST["ownPC"];
$ownMac = $_POST["ownMac"];
$ownMobile = $_POST["ownMobile"];
$ownPS4 = $_POST["ownPS4"];
$ownVita = $_POST["ownVita"];
$ownXbone = $_POST["ownXbone"];
$ownWiiU = $_POST["ownWiiU"];
$own3DS = $_POST["own3DS"];
$numHoursPlayed = $_POST["numHoursPlayed"];

$myFile= fopen("voteCount.txt", "r+");
$numVotes = fread($myFile, filesize("voteCount.txt"));
if($_SESSION["hasVoted"] == 1){
	$_SESSION["hasVoted"] = 1;
	$numVotes = $numVotes + 1;
	fwrite($myFile, $numVotes);
}
fclose($myFile);
?>

<html>
<head></head>
<body>
<?php

switch($isGamer){
	case 0:
		echo "Is not Gamer\n";
		break;
	case 1:
		echo "Is Gamer\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownsEquipment){
	case 0:
		echo "Does not own\n";
		break;
	case 1:
		echo "Owns\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownPC){
	case 0:
		echo "Doesn't own PC\n";
		break;
	case 1:
		echo "Owns PC\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownMac){
	case 0:
		echo "Doesn't own Mac\n";
		break;
	case 1:
		echo "Owns Mac\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownMobile){
	case 0:
		echo "Doesn't own Mobile\n";
		break;
	case 1:
		echo "Owns Mobile\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownPS4){
	case 0:
		echo "Doesn't own PS4\n";
		break;
	case 1:
		echo "Owns PS4\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownVita){
	case 0:
		echo "Doesn't own Vita\n";
		break;
	case 1:
		echo "Owns Vita\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownXbone){
	case 0:
		echo "Doesn't own Xbone\n";
		break;
	case 1:
		echo "Owns Xbone\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($ownWiiU){
	case 0:
		echo "Doesn't own Wii U\n";
		break;
	case 1:
		echo "Owns Wii U\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
switch($own3DS){
	case 0:
		echo "Doesn't own 3DS\n";
		break;
	case 1:
		echo "Owns 3DS\n";
		break;
	default:
		echo "Else";
		break;
}
echo "<br />";
echo "<span>".$numHoursPlayed."</span><br />";
echo "Number of votes: " . $numVotes . "<br />";
session_unset();
session_destroy();
?>
</body>
</html>

<!DOCTYPE html>
<?php
$isGamer = $_POST["isGamer"];
$ownsEquipment = $_POST["ownsEquipment"];

?>

<html>
<head></head>
<body>
<?php

switch($isGamer){
	case 0:
		echo "False";
		break;
	case 1:
		echo "True";
		break;
	default:
		echo "Else";
		break;
}
?>
</body>
</html>

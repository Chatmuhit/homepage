<!DOCTYPE html>
<?php
$isGamer = $_POST["isGamer"];
$ownsEquipment = $_POST["ownsEquipment"];

?>

<html>
<head></head>
<body>
<?php
switch($_POST["isGamer"]){
	case true:
	echo "True";
	break;
	case false:
	echo "False";
	break;
	default:
	echo "Else";
	break;
	}
if($isGamer){
	echo "True";
	}
else{
	echo "False;"
	}
?>
</body>
</html>

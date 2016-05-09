<!DOCTYPE html>
<?php
$isGamer = $_POST["isGamer"];
$ownsEquipment = $_POST["ownsEquipment"];

?>

<html>
<head></head>
<body>
<?php

if($isGamer == true){
	echo "True";
	}
else{
	echo "False";
	}
?>
</body>
</html>

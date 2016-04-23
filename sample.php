<?php
	$ozone = 25.98;
	$sulfurDioxide = 0.5/1000;
	$particulateMatter = 28.08;
	$carbonMonoxide = 0.06983;
	$nitrogenDioxide = 17.61/1000;
	$temperature = 295;
	$humidity = 38;

	echo json_encode(["ozone"=>$ozone, "sulfurDioxide"=>$sulfurDioxide, "particulateMatter"=>$particulateMatter, "carbonMonoxide"=>$carbonMonoxide, "nitrogenDioxide"=>$nitrogenDioxide, "temperature"=>$temperature, "humidity"=>$humidity]);
?>
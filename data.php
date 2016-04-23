<?php
	$data["ozone"]["value"] = $_GET["o3"];
	$data["ozone"]["constant"] = 82; //ppb

	$data["sulfurDioxide"]["value"] = $_GET["so2"];
	$data["sulfurDioxide"]["constant"] = 200; //ppb

	$data["particulateMatter"]["value"] = $_GET["pm"];
	$data["particulateMatter"]["constant"] = 35; //ng/m^3

	$data["carbonMonoxide"]["value"] = $_GET["co"];
	$data["carbonMonoxide"]["constant"] = 30; //ppm

	$data["nitrogenDioxide"]["value"] = $_GET["no2"];
	$data["nitrogenDioxide"]["constant"] = 213; //ppb

	$temperature = $_GET["temp"]; //kelvin
	$humidity = $_GET["hum"]; //%

	$city = $_GET["city"];

	$globalConst = 50;

	function calculateAirQuality($data, $globalConst){
		$AQI = [];
		foreach ($data as $key => $value) {
			array_push($AQI, $data[$key]["value"] / $data[$key]["constant"] * $globalConst);
		}	
		
		return ceil(max($AQI));
	}

	function calculateFireChance($temperature){
		if ($temperature >= 522)
			return 1;
		return 0;
	}

	$result = [];
	$result["airQualityIndex"] = calculateAirQuality($data, $globalConst);
	$result["ozone"] = $data["ozone"]["value"];
	$result["sulfurDioxide"] = $data["sulfurDioxide"]["value"];
	$result["particulateMatter"] = $data["particulateMatter"]["value"];
	$result["carbonMonoxide"] = $data["carbonMonoxide"]["value"];
	$result["temperature"] = $temperature;
	$result["nitrogenDioxide"] = $data["nitrogenDioxide"]["value"];
	$result["fireChance"] = calculateFireChance($temperature);
	$result["humidity"] = $humidity;
	$result["city"] = $city;
	
	echo json_encode($result);
?>
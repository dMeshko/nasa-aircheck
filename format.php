<?php
	//var_dump($_POST);
	$return = [];

	$niz = array_values($_POST);
	//print_r($niz);
	$totalCounter = 0;

	$SkopjeSubItems = 7;
	$totalCounter += $SkopjeSubItems;
	$return["Skopje"]["PM10"] = 0;
	$return["Skopje"]["PM25"] = 0;
	$return["Skopje"]["NO2"] = 0;
	$return["Skopje"]["CO"] = 0;
	$return["Skopje"]["SO2"] = 0;
	$return["Skopje"]["O3"] = 0;
	$return["Skopje"]["aqi"] = 0;
	$return["Skopje"]["humidity"] = 49;
	$return["Skopje"]["temperature"] = 19.4;
	for ($i = 0; $i < $totalCounter; $i++)
	{
		$return["Skopje"]["PM10"] += $niz[$i]["PM10"];
		$return["Skopje"]["PM25"] += $niz[$i]["PM25"];
		$return["Skopje"]["NO2"] += $niz[$i]["NO2"];
		$return["Skopje"]["CO"] += $niz[$i]["CO"];
		$return["Skopje"]["SO2"] += $niz[$i]["SO2"];
		$return["Skopje"]["O3"] += $niz[$i]["O3"];
		$return["Skopje"]["aqi"] += $niz[$i]["aqi"];
	}
	$return["Skopje"]["PM10"] /= $SkopjeSubItems;
	$return["Skopje"]["PM25"] /= $SkopjeSubItems;
	$return["Skopje"]["NO2"] /= $SkopjeSubItems;
	$return["Skopje"]["CO"] /= $SkopjeSubItems;
	$return["Skopje"]["SO2"] /= $SkopjeSubItems;
	$return["Skopje"]["O3"] /= $SkopjeSubItems;
	$return["Skopje"]["aqi"] /= $SkopjeSubItems;


	$BitolaSubItems = 2;
	$totalCounter += $BitolaSubItems;
	$return["Bitola"]["PM10"] = 0;
	$return["Bitola"]["PM25"] = 0;
	$return["Bitola"]["NO2"] = 0;
	$return["Bitola"]["CO"] = 0;
	$return["Bitola"]["SO2"] = 0;
	$return["Bitola"]["O3"] = 0;
	$return["Bitola"]["aqi"] = 0;
	$return["Bitola"]["humidity"] = 69.7;
	$return["Bitola"]["temperature"] = 16.4;
	for ($i = $totalCounter - $BitolaSubItems; $i < $totalCounter; $i++){
		$return["Bitola"]["PM10"] += $niz[$i]["PM10"];
		$return["Bitola"]["PM25"] += $niz[$i]["PM25"];
		$return["Bitola"]["NO2"] += $niz[$i]["NO2"];
		$return["Bitola"]["CO"] += $niz[$i]["CO"];
		$return["Bitola"]["SO2"] += $niz[$i]["SO2"];
		$return["Bitola"]["O3"] += $niz[$i]["O3"];
		$return["Bitola"]["aqi"] += $niz[$i]["aqi"];
	}
	$return["Bitola"]["PM10"] /= $BitolaSubItems;
	$return["Bitola"]["PM25"] /= $BitolaSubItems;
	$return["Bitola"]["NO2"] /= $BitolaSubItems;
	$return["Bitola"]["CO"] /= $BitolaSubItems;
	$return["Bitola"]["SO2"] /= $BitolaSubItems;
	$return["Bitola"]["O3"] /= $BitolaSubItems;
	$return["Bitola"]["aqi"] /= $BitolaSubItems;

	$KicevoSubItems = 1;
	$totalCounter += $KicevoSubItems;
	$return["Kicevo"]["PM10"] = $niz[$totalCounter-1]["PM10"];
	$return["Kicevo"]["PM25"] = $niz[$totalCounter-1]["PM25"];
	$return["Kicevo"]["NO2"] = $niz[$totalCounter-1]["NO2"];
	$return["Kicevo"]["CO"] = $niz[$totalCounter-1]["CO"];
	$return["Kicevo"]["SO2"] = $niz[$totalCounter-1]["SO2"];
	$return["Kicevo"]["O3"] = $niz[$totalCounter-1]["O3"];
	$return["Kicevo"]["aqi"] = $niz[$totalCounter-1]["aqi"];
	$return["Kicevo"]["humidity"] = 68.7;
	$return["Kicevo"]["temperature"] = 14.4;

	$LazaropoleSubItems = 1;
	$totalCounter += $LazaropoleSubItems;
	$return["Lazaropole"]["PM10"] = $niz[$totalCounter-1]["PM10"];
	$return["Lazaropole"]["PM25"] = $niz[$totalCounter-1]["PM25"];
	$return["Lazaropole"]["NO2"] = $niz[$totalCounter-1]["NO2"];
	$return["Lazaropole"]["CO"] = $niz[$totalCounter-1]["CO"];
	$return["Lazaropole"]["SO2"] = $niz[$totalCounter-1]["SO2"];
	$return["Lazaropole"]["O3"] = $niz[$totalCounter-1]["O3"];
	$return["Lazaropole"]["aqi"] = $niz[$totalCounter-1]["aqi"];
	$return["Lazaropole"]["humidity"] = 50.2;
	$return["Lazaropole"]["temperature"] = 16.9;

	$TetovoSubItems = 1;
	$totalCounter += $TetovoSubItems;
	$return["Tetovo"]["PM10"] = $niz[$totalCounter-1]["PM10"];
	$return["Tetovo"]["PM25"] = $niz[$totalCounter-1]["PM25"];
	$return["Tetovo"]["NO2"] = $niz[$totalCounter-1]["NO2"];
	$return["Tetovo"]["CO"] = $niz[$totalCounter-1]["CO"];
	$return["Tetovo"]["SO2"] = $niz[$totalCounter-1]["SO2"];
	$return["Tetovo"]["O3"] = $niz[$totalCounter-1]["O3"];
	$return["Tetovo"]["aqi"] = $niz[$totalCounter-1]["aqi"];
	$return["Tetovo"]["humidity"] = 66;
	$return["Tetovo"]["temperature"] = 13.5;

	$VelesSubItems = 2;
	$totalCounter += $VelesSubItems;
	$return["Veles"]["PM10"] = 0;
	$return["Veles"]["PM25"] = 0;
	$return["Veles"]["NO2"] = 0;
	$return["Veles"]["CO"] = 0;
	$return["Veles"]["SO2"] = 0;
	$return["Veles"]["O3"] = 0;
	$return["Veles"]["aqi"] = 0;
	$return["Veles"]["humidity"] = 55;
	$return["Veles"]["temperature"] = 16;
	for ($i = $totalCounter - $VelesSubItems; $i < $totalCounter; $i++){
		$return["Veles"]["PM10"] += $niz[$i]["PM10"];
		$return["Veles"]["PM25"] += $niz[$i]["PM25"];
		$return["Veles"]["NO2"] += $niz[$i]["NO2"];
		$return["Veles"]["CO"] += $niz[$i]["CO"];
		$return["Veles"]["SO2"] += $niz[$i]["SO2"];
		$return["Veles"]["O3"] += $niz[$i]["O3"];
		$return["Veles"]["aqi"] += $niz[$i]["aqi"];
	}
	$return["Veles"]["PM10"] /= $VelesSubItems;
	$return["Veles"]["PM25"] /= $VelesSubItems;
	$return["Veles"]["NO2"] /= $VelesSubItems;
	$return["Veles"]["CO"] /= $VelesSubItems;
	$return["Veles"]["SO2"] /= $VelesSubItems;
	$return["Veles"]["O3"] /= $VelesSubItems;
	$return["Veles"]["aqi"] /= $VelesSubItems;

	$KocaniSubItems = 1;
	$totalCounter += $KocaniSubItems;
	$return["Kocani"]["PM10"] = $niz[$totalCounter-1]["PM10"];
	$return["Kocani"]["PM25"] = $niz[$totalCounter-1]["PM25"];
	$return["Kocani"]["NO2"] = $niz[$totalCounter-1]["NO2"];
	$return["Kocani"]["CO"] = $niz[$totalCounter-1]["CO"];
	$return["Kocani"]["SO2"] = $niz[$totalCounter-1]["SO2"];
	$return["Kocani"]["O3"] = $niz[$totalCounter-1]["O3"];
	$return["Kocani"]["aqi"] = $niz[$totalCounter-1]["aqi"];
	$return["Kocani"]["humidity"] = 55.5;
	$return["Kocani"]["temperature"] = 12.0;

	$KavadarciSubItems = 1;
	$totalCounter += $KavadarciSubItems;
	$return["Kavadarci"]["PM10"] = $niz[$totalCounter-1]["PM10"];
	$return["Kavadarci"]["PM25"] = $niz[$totalCounter-1]["PM25"];
	$return["Kavadarci"]["NO2"] = $niz[$totalCounter-1]["NO2"];
	$return["Kavadarci"]["CO"] = $niz[$totalCounter-1]["CO"];
	$return["Kavadarci"]["SO2"] = $niz[$totalCounter-1]["SO2"];
	$return["Kavadarci"]["O3"] = $niz[$totalCounter-1]["O3"];
	$return["Kavadarci"]["aqi"] = $niz[$totalCounter-1]["aqi"];
	$return["Kavadarci"]["humidity"] = 60.5;
	$return["Kavadarci"]["temperature"] = 14.0;

	$KumanovoSubItems = 1;
	$totalCounter += $KumanovoSubItems;
	$return["Kumanovo"]["PM10"] = $niz[$totalCounter-1]["PM10"];
	$return["Kumanovo"]["PM25"] = $niz[$totalCounter-1]["PM25"];
	$return["Kumanovo"]["NO2"] = $niz[$totalCounter-1]["NO2"];
	$return["Kumanovo"]["CO"] = $niz[$totalCounter-1]["CO"];
	$return["Kumanovo"]["SO2"] = $niz[$totalCounter-1]["SO2"];
	$return["Kumanovo"]["O3"] = $niz[$totalCounter-1]["O3"];
	$return["Kumanovo"]["aqi"] = $niz[$totalCounter-1]["aqi"];
	$return["Kumanovo"]["humidity"] = 45.9;
	$return["Kumanovo"]["temperature"] = 8.0;

	echo json_encode($return);
?>
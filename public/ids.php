<?php
$AADC = [];
if($_GET["DAAR"]){
	$DAAR = $_GET["DAAR"];
	if($DAAR == 0){
		$DAAR = 114;
	}
	for($x = 0; $x <= 15; $x++){
		array_push($AADC, (int)$DAAR);
	}
}
if($_GET["AAR"] == 0){
	$AAR = $_GET["DAAR"];
}else if($_GET["AAR"]){
	$AAR = $_GET["AAR"];
        $HS = $_GET["HS"];
        $HE = $_GET["HE"];
	for($x = $HS; $x <= $HE; $x++){
		$AADC[$x] = (int)$AAR;
	}
}
echo $AADC;
file_put_contents('./AAR.txt', json_encode($AADC));
?>

<?php

	$maths =$_POST ["S1"];
	$sd1= $_POST ["S2"];
	$prof= $_POST["S3"];
	$hci= $_POST["S4"];
	$db= $_POST["S5"];
	$sa= $_POST["S6"];
	$ai= $_POST["S7"];
	$ss= $_POST["S8"];
	$sd2= $_POST["S9"];
	$sysdev= $_POST["S10"];
	$netwk= $_POST["S11"];
	$dwa= $_POST["S12"];
	$da= $_POST["S13"];
	$ppm= $_POST["S14"];
	$csp1= $_POST["S15"];
	$csp2= $_POST["S16"];
	$cloud= $_POST["S17"];
	$wad= $_POST["S18"];
	
	
	
	//echo "Before we calculate the grades and save
	//in database please have a look at your year 1 marks which you have entered in the form". "<br>"  ;

	//echo "Maths:   " .$maths.  "<br>";
	
	//echo "SoftDev1:   " .$sd1. "<br>" ;
	
	//echo "Professionalism:   "  .$prof. "<br>";
	
	
	$year2avg= (($ai+ $ss+ $sd2+ $sysdev+ $netwk+ $dwa)/600) *30;
	$year3avg= (($da+ $ppm+ $csp1+ $csp2+ $cloud+ $wad)/600) *70;
	$totalavg= $year2avg+$year3avg;
	
	echo "Your overall average grade is  ".$totalavg. "<br>";
	
	if($totalavg >=70 && $totalavg<=100) {
		echo "Congrats, you got a first class";
	}
	else if($totalavg >=60 && $totalavg<=69) {
		echo "Congrats, you got a 2:1 class";
	}
	else if($totalavg >=50 && $totalavg<=59) {
		echo "Congrats, you got a 2:2 class";
	}
	else if($totalavg >=40 && $totalavg<=49) {
		echo "Congrats, you got a Pass";
	}
	else if($totalavg <40 ) {
		echo "You have failed";
	}


$servername = "localhost";
$username ="root";
$password = "";
$dbname = "calculator";

$conn = new mysqli ($servername, $username, $password, $dbname);


$sql = "INSERT INTO Grade ('ID', 'Average') VALUES ($totalavg)";


if($conn->query($sql) ==TRUE) {

	echo "SAVED SUCCESFULLY";
}
	
else {
	echo $conn->error();
}

$conn-> close();
	


?>
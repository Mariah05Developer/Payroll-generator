<html>
<body>
<?php
$txtName =  $_POST["txtName"];
$decWage =  $_POST["txtWage"];
$decHours = $_POST["txtHours"];

$decNormal = 0;
$decOT = 0; 
$decGross = 0;

if ($decHours > 40) {
	$decNormal = 40 * $decWage;
	$decOT = ($decHours - 40) * ($decWage * 1.5);
	$decGross = $decNormal + $decOT;
} else {
	$decNormal = $decHours * $decWage;
	$decOT = 0; 
	$decGross = $decNormal;
}
?>


Name: <?php echo $txtName;?><br>
Wage: <?php echo $decWage;?><br>
Hours:<?php echo $decHours;?><br>
Normal Pay:<?php echo $decNormal;?><br>
OT Pay:<?php echo $decOT;?><br>ross:<?php echo $decGross;?>

</body>
</html> 
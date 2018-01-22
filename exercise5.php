<?php
$birthdate = new DateTime("1981-11-03");
$nowdate = new Datetime("2013-09-04");
$interval = $birthdate->diff($nowdate);
echo "Difference = ".$interval->y . " Years, " . $interval->m. " Months, ".$interval->d." Days ";

?>


<?php
$first_date = new DateTime("1981-11-03");
$second_date = new Datetime("2013-09-04");
$interval = $first_date->diff($second_date);
echo "Difference = ".$interval->y . " Years, " . $interval->m. " Months, ".$interval->d." Days ";

?>


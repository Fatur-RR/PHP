<?php 
$date_array = getdate();

foreach ($date_array as $key => $val) {
    print "$key = $val<br />";
}

$formated_date = "Today's date: ";
$formated_date .= $date_array['mday'] . "/";
$formated_date .= $date_array['mon'] . "/";
$formated_date .= $date_array['year'];

print $formated_date;
?>
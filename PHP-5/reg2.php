<?php
$subject = 'Give me 12 eggs then 12 more.';
$pattern = '~\d+~';
$newstring = preg_replace($pattern, "6", $subject);
echo $newstring;
?>
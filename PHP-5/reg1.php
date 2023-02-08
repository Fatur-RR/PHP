<?php
$subject = 'Give me 10 eggs';
$pattern = '~\b(\d+)\s*(\w+)$~';

$succes = preg_match($pattern, $subject, $match);
if ($succes) {
    echo "Match: " . $match[0] . "<br />";
    echo "Group 1: " . $match[1] . "<br />";
    echo "Group 2: " . $match[2] . "<br />";
}
?>
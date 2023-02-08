<?php 
$line = "Vi is the greatest word processor ever created!";
if (preg_match("/\bVi\b/i", $line,$match)):
    print "Match found!";
endif;
?>
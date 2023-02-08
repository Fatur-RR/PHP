<!DOCTYPE html>
<html>
<body>
<?php
$x=25; // global scope
$y=50; // global scope
function myTest()
{
global $x,$y;
$y=$x+$y;
}
myTest(); // run function
echo $y; // output the new value for variable $y
?>
</body>
</html>
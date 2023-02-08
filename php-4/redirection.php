<?php
if(isset($_POST['submit']))
{ 
    $location = $_POST["location"];
    header( "Location:$location");
    Exit();
}
?>
<html>
<body>
    <p>Choose a site to visit :</p>
    <form action="?php $_PHP_SELF ?>" method="POST">
        <select name="location">
            <option value="http://w3c.org">
                world wise web consortium
</option>
<option value="http://www.google.com">
    google search page 
</option>
</select>
<input type="submit" name="submit"/>
</form>
</body>
</html>
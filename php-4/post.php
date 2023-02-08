<?php
if(isset($_POST['submit']))
{ 
    echo "Welcome ". $_POST['name']. "<br />";
    echo "you are ".$_POST['age']. "years old.";
    exit();
}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
        Name :<input type="text" name="name" />
        Age:<input type="text" name="age" />
        <input type="submit" name="submit"/>
</form>
</body>
</html>

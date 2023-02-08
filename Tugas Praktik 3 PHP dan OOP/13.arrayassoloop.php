<html>
    <head>
        <title>array associative loop</title>
    </head>

    <body>
        <?php

        $age = array('Peter' => '35', 'Bed' => '37', 'Joe' => '43');

        foreach ($age as $x => $value){
            echo 'key = ' . $x . '.Value =' . $value;
            echo '<br>';
        }
        ?>
    </body>
</html>
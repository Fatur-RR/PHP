<html>
    <head>
        <title>array multi</title>
    </head>

    <body>
        <?php

        $cars = array(
            array('Volvo', 22, 18),
            array('BMW', 15, 13),
            array('Toyota', 17, 18)
        );

        for ($row=0;$row <3;$row++){
            echo '<p><b> Row Number' .$row.'</b></p>';
            echo '<ul>';
            for ($col=0; $col <3;$col++){
                echo '<li>'.$cars[$row][$col].'</li>';
            }
            echo '<ul>';
        }
        ?>
    </body>
</html>
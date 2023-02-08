<html>
    <head>
        <title>if else statement</title>
    </head>

    <body>
        <?php
        $t=date("H");
            if ($t<"10"){
                echo "Have a good day";
            }elseif ($t<"20"){
                echo "Have a good day";
            }else{
                echo "Have a good Night";
            }
        ?>
    </body>
</html>

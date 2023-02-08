<html>
    <head>
        <title>switch</title>
    </head>

    <body>
        <?php
        $favcolor = 'red';

            switch($favcolor){
            case 'red':
                echo "Your favorite colour is red!";
                break;
            case 'blue':
                echo "your favourite colour is blue!";
                break;
            case 'green':
                echo 'your favorite colour is green!    ';
                break;
            default:
                echo 'your favorite colour is neither red,blue nor green';
                break;
            }

        ?>
    </body>
</html>

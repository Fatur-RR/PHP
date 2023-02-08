<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cyan-300 flex justify-center p-10">
<div class="bg-gray-700 w-max p-10 rounded-md text-gray-300">
    <center>
    <form method="GET">
    <?php echo"X awal, Y awal";?>
        <br>
        <input type="text" name="X" id="">
        <br>
        <?php echo"X akhir, Y akhir";?>
        <br>
        <input type="text" name="Y" id="">
        <br>
        <button class="bg-green-600 px-2 py-1 rounded-md hover:bg-green-500 duration-200 ease-linear hover:text-white hover:rounded-2xl shadow-md">submit</button>
    </form>
    <h1>HASIL</h1>
    <?php
    $x1=explode(',',$_GET['X'])[0];
    $x2=explode(',',$_GET['Y'])[0];
    $y1=explode(',',$_GET['X'])[1];
    $y2=explode(',',$_GET['Y'])[1];
    $x=(int)$x2-(int)$x1;
    $y=(int)$y2-(int)$y1;
    
    if($x>0){
        echo "kekanan ", $x ," langkah";
    }else if($x==0){
        echo "diam";
    }else{
        echo "kekiri ", abs($x) ," langkah";
    };
    
    echo"<br>";
    if($y>0){
       echo "maju ", $y ," langkah";
    }else if($y==0){
        echo "diam";
    }else{
        echo "mundur ", abs($y) ," langkah";
    };
    ?>
    
        
    </center>
</div>

    

    

</body>
</html>
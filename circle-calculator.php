<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>  
        <form action="circle-calculator.php" method="post">
            <label for="radius">Radius:</label>
            <input type="text" id="radius" name="radius"> <br>
            <input type="submit"> <br>
        </form>
    </body>
</html>

<?php
    if (isset($_POST["radius"])) {
        $radius = $_POST["radius"];

        $circumference = 2 * pi() * $radius;
        $circumference = round($circumference, 2);

        $area = pi() * pow($radius, 2);
        $area = round($area, 2);

        $volume = (4/3) * pi() * pow($radius, 3);
        $volume = round($volume, 2);

        echo "Circumference of a circle: {$circumference} <br>";
        echo "Area of a circle: {$area} <br>";
        echo "Volume of a circle: {$volume} <br>";
    }
?>
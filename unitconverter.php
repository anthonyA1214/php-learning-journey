<?php
    $conversion = "";
    $calculated = 0;

    if (!empty($_POST["unit"])) {
        $conversion = $_POST["conversion"];
        $unit = $_POST["unit"];

        switch ($conversion) {
            case "ctof":
                $calculated = celciusToFahreiheit($unit);
                break;
            case "mtof":
                $calculated = metersToFeet($unit);
                break;
            case "kgtolb":
                $calculated = kilogramsToPounds($unit);
                break;
            case "phptousd":
                $calculated = pesoToUSDollars($unit);
                break;
        }
    }

    function celciusToFahreiheit($unit) {
        return $unit * 9/5 + 32;
    }

    function metersToFeet($unit) {
        return $unit * 3.28084;
    }

    function kilogramsToPounds($unit) {
        return $unit * 2.20462;
    }

    function pesoToUSDollars($unit) {
        return $unit / 56.25;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
</head>
<body>
    <h1>Unit Converter</h1>
    <form method="post" action="unitconverter.php">

        <input type="number" name="unit" min="1"/>

        <select name="conversion">
            <option value="ctof">Celcius to Fahreinheit</option>
            <option value="mtof">Meters to Feet</option>
            <option value="kgtolb">Kilograms to Pounds</option>
            <option value="phptousd">Pesos to US Dollars</option>
        </select>

        <button type="submit">Submit</button>
    </form>
    
    <?php
        if ($calculated != 0 and $conversion == "ctof") {
            echo "<p>Result: {$calculated} Fahrenheit</p>";
        } 
        elseif ($calculated != 0 and $conversion == "mtof") {
            echo "<p>Result: {$calculated} Feet";
        } 
        else if ($calculated != 0 and $conversion == "kgtolb") {
            echo "<p>Result: {$calculated} Pounds";
        } 
        else if ($calculated != 0 and $conversion == "phptousd") {
            echo "<p>Result: {$calculated} Dollars";
        }
    ?>
    
</body>
</html>
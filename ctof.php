<?php
    $fahrenheight = 0;

    if (isset($_POST['celcius'])) {
        $celcius = $_POST['celcius'];
        $fahrenheight = $celcius * 9/5 + 32;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="post" action="ctof.php">
        <label for="celcius">Celcius: </label>
        <input type="text" name="celcius" id="celcius" placeholder="celcius">
        <button type="submit">Calculate</button><br><br>

        <?php if ($fahrenheight != 0) : ?>
            <p><?php echo $fahrenheight; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>


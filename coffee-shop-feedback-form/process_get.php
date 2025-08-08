<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coffee Shop</title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="d-flex flex-column mt-5 border border-2 p-3 shadow-sm">
                <h1 class="border-bottom border-black border-2 display-3 mb-4 text-center">Coffee Shop</h1>
                <h2 class="mt-3 text-center">Welcome <?php echo $_GET['name'] ?></h2>
            </div>
        </div>
    </body>

</html>

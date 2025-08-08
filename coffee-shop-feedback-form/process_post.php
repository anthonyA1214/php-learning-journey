<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];
?>

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
                <div class="row d-flex align-items-center justify-content-center">
                    <div style="max-width: 300px">
                        <p><span class="fw-bold">Name</span>: <?php echo $name ?></p>
                        <p><span class="fw-bold">Email</span>: <?php echo $email ?></p>
                        <p><span class="fw-bold">Rating</span>: <?php echo $rating ?></p>
                        <p><span class="fw-bold">Comments</span>: <?php echo $comments ?></p>
                    </div>
                </div>

                <h4 class="mt-3 text-center mt-5">Thank you for feedback</h4>
            </div>
        </div>
    </body>

</html>

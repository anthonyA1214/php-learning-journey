<?php
    include("database.php");

    $message = "";

    if (isset($_POST["register"])) {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];

        if (empty($username) && empty($password)) {
            $message = "All fields are required.";
        } else {
            $hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";

           if (mysqli_query($conn, $sql)) {
                $message = "✅ Registered successfully!";
            } else {
                $message = "❌ Error: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
    }  
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container my-5">
            <h2 class="text-center mb-4">Register</h2>

            <?php if (!empty($message)) : ?>
                <div class="alert alert-info text-center"><?php echo $message; ?></div>
            <?php endif; ?>

            <form action="register.php" method="post" class="mx-auto" style="max-width: 400px;">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>

                <input type="submit" class="btn btn-primary w-100" name="register" value="Register">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
require "../../private/autoload.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $password = escape_slash($_POST['password']);

    if (!empty($email) && !empty($password)){

        $querry = "select * from account where email = '$email' && password = $password limit 1";
        $result = mysqli_query($con, $querry);
        echo mysqli_num_rows($result);
        if ($result){
            if ($result && mysqli_num_rows($result) > 0){

                $user_data = mysqli_fetch_assoc($result);

                if (is_array($user_data) && count($user_data) > 0){

                    $_SESSION['account_id'] = $user_data['account_id'];
                    header("Location: ../index.php");
                    die;
                }

            }

        }

    }


}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container">
    <h1>Login</h1>

    <form method="post">
        <h4>Enter your account credentials</h4><br>
        <label for="email">Email</label>
        <input id="email" name="email" type="text"><br>
        <br>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" >
        <br>
        <br>
        <input type="submit" value="Login">
        <br>
        <a href="register.php">No account? Sign up here.</a>
    </form>
</div>


</body>
</html>

<?php
require "../../private/autoload.php";
$email = "";
$full_name = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = escape_slash($_POST['password']);
    $full_name = escape_slash($_POST['full_name']);
    $account_id = get_random_string(60);


    if (!empty($email) && !empty($password) && !empty($full_name) && !empty($telephone)) {

        $query = "select * from account where email = '$email' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {

                echo $query;

                $user_data = mysqli_fetch_assoc($result);
                $query = "inster into account (account_id,email,password,full_name,telephone) values ('$account_id','$email','$password','$full_name','$telephone')";

                mysqli_query($con, $query);
                header("Location: login.php");
                die;
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
    <title>Register</title>
</head>
<body>

<div class="container">
    <h1>Sign Up</h1>
    <form method="post">


        <label for="email">Email</label><br>
        <input  style="margin: auto; width: 50%"id="email" type="email" name="email" value="<?=htmlspecialchars($email)?>" required>
        <br>
        <label for="telephone">Phone number</label><br>
        <input  id="telephone" type="text" name="telephone">
        <br>
        <label for="full_name">Full name</label><br>
        <input id="full_name" type="text" name="full_name" value="<?=htmlspecialchars($full_name)?>" required>
        <br>
        <label for="password">Password</label><br>
        <input id="password" type="password" name="password" required>
        <br>
        <input type="submit" value="Register"><br>

        <a href="login.php">Already an account? Login here.</a>
    </form>
</div>
</body>
</html>

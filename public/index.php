<?php

require "../private/autoload.php";

$user_data = check_login($con);

$full_name = "";
$telephone = "";
$email = "";
if(isset($user_data['full_name'])){
    $full_name = $user_data['full_name'];
    $telephone = $user_data['telephone'];
    $email = $user_data['email'];

}

if (!empty($_POST)){
    session_start();
    $shipment = [$_POST['length'],$_POST['height'],$_POST['width'],$_POST['weight'],$_POST['country_s'],$_POST['city_s'],$_POST['street_s'],
        $_POST['country_d'],$_POST['city_d'],$_POST['street_d'],$_POST['fullname_r'],$_POST['telephone_r'],$_POST['email_r']];

    $_SESSION['shipment'] = $shipment;
    header("Location: accountviews/quotation.php");
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
    <title>Logistics application</title>
</head>
<body class="bg-light">

<div class="container">
    <h1>Worldwide logistics</h1>
    <h4>Complete the information in the forms to get a quotation</h4>
    <br>
    <form method="post">
        <h4>Package details in CM and KG</h4>
        <label for="length">Length</label>
        <input id="length" name="length" type="text">
        <label for="height">Height</label>
        <input id="height" name="height" type="text">
        <label for="width">Width</label>
        <input id="width" name="width" type="text">
        <br>
        <br>
        <label for="weight">Weight</label>
        <input id="weight" name="weight" type="text">

        <h4>Starting point and destination</h4>


        <h5>Starting point</h5>

        <label for="country_s">Country</label>
        <input id="country_s" type="text" name="country_s">
        <label for="city_s">City</label>
        <input id="city_s" type="text" name="city_s">
        <label for="street_s">Street with number</label>
        <input id="street_s" type="text" name="street_s">

        <h5>Destination point</h5>

        <label for="country_d">Country</label>
        <input id="country_d" type="text" name="country_d">
        <label for="city_d">City</label>
        <input id="city_d" type="text" name="city_d">
        <label for="street_d">Street with number</label>
        <input id="street_d" type="text" name="street_d">

        <h4>Personal and recipient information</h4>

        <h5>Personal information</h5>
        <p>Full name: <?php echo $full_name?></p>
        <p>Telephone number: <?php echo $telephone?></p>
        <p>Email: <?php echo $email?></p>

        <h5>Recipient infrmation</h5>

        <label for="fullname_r">Full name</label>
        <input id="fullname_r" type="text" name="fullname_r">
        <label for="telephone_r">Telephone number</label>
        <input id="telephone_r" type="text" name="telephone_r">
        <label for="email_r">Email address</label>
        <input id="email_r" type="text" name="email_r">

        <br>
        <br>
        <button type="submit">Get quotation</button>

    </form>
    <a href="./accountviews/logout.php">Logout</a>
</div>

</body>
</html>

<?php

if (!empty($_POST)){
    session_start();
    $package = [$_POST['length'],$_POST['height'],$_POST['width'],$_POST['weight']];
    $_SESSION['package'] = $package;
    header("Location: quotation.php");
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logistics application</title>
</head>
<body>
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
    <input id="country_s" type="text">
    <label for="city_s">City</label>
    <input id="city_s" type="text">
    <label for="street_s">Street with number</label>
    <input id="street_s" type="text">

    <h5>Destination point</h5>

    <label for="country_d">Country</label>
    <input id="country_d" type="text">
    <label for="city_d">City</label>
    <input id="city_d" type="text">
    <label for="street_d">Street with number</label>
    <input id="street_d" type="text">

    <h4>Personal and recipient information</h4>

    <h5>Personal information</h5>

    <label for="fullname_p">Full name</label>
    <input id="fullname_p" type="text">
    <label for="telephone_p">Telephone number</label>
    <input id="telephone_p" type="text">
    <label for="email_p">Email address</label>
    <input id="email_p" type="text">
    <h5>Recipient infrmation</h5>

    <label for="fullname_r">Full name</label>
    <input id="fullname_r" type="text">
    <label for="telephone_r">Telephone number</label>
    <input id="telephone_r" type="text">
    <label for="email_r">Email address</label>
    <input id="email_r" type="text">

    <br>
    <br>
    <button type="submit">Get quotation</button>

</form>


</body>
</html>

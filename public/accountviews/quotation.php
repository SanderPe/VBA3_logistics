<?php



require "../../private/autoload.php";
$user_data = check_login($con);
$package = $_SESSION['package'];
$customer_id = rand(100,100000);
$price = rand(45,4500);
$_SESSION['price'] = $price;
$_SESSION['customer_id'] = $customer_id;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotation</title>
</head>
<body class="bg-light">
<h1>Worldwide logistics</h1>

<h4>Your quotation for the given package: <?php echo $price?> CHF</h4>
<p>Download the PDF to see more information</p>

<a href="pdf.php">View PDF</a>
<h5>Your unique quotation ID: <?php echo $customer_id ?></h5>
<?php $package[0] ?>

</body>
</html>

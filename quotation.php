<?php
session_start();
$package = $_SESSION['package'];
$customer_id = rand(100,100000);
$price = rand(45,4500);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotation</title>
</head>
<body>
<h1>Worldwide logistics</h1>

<h4>Your quotation for the given package: <?php echo $price?> EUR</h4>
<p>Download the PDF to see more information</p>

<button>Download PDF</button>
<h5>Your unique quotation ID: <?php echo $customer_id ?></h5>
<?php $package[0] ?>

</body>
</html>

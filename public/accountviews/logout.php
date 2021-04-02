<?php

require "../../private/autoload.php";


if(isset($_SESSION['account_id'])){
    unset($_SESSION['account_id']);
}

header("Location: login.php");
die;

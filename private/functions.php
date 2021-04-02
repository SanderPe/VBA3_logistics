<?php
function get_random_string($length){

    $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $text = "";

    $length = rand(4,$length);

    for ($i=0;$i<$length;$i++){
        $random = rand(0,35);
        $text .= $array[$random];
    }

    return $text;

}
function escape_slash($word){
    return addslashes($word);

}
function check_login($con){

    if(isset($_SESSION['account_id'])){

        $account_id = $_SESSION['account_id'];
        $query = "select * from account where account_id = '$account_id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: ../public/accountviews/login.php");
    die;
}

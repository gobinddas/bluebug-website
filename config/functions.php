<?php
function check_login($conn){
    if(isset($_SESSION['email'])){
        $id = $_SESSION['email'];
        $query = "SELECT * FROM users WHERE email ='$id' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //  redirect to login
    header("Location: index.php");
}

function random_num($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++){

        $text = rand(0,9);
    }

    return $text;
}
function index_loginval($conn){
    if(isset($_SESSION['email'])){
        $id = $_SESSION['email'];
        $query = "SELECT * FROM users WHERE email ='$id' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0){
            $index_user_data = mysqli_fetch_assoc($result);
            return $index_user_data;
        }
    }


    
}

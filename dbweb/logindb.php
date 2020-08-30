<?php

    session_start();
    require('connect.php');

    $errors = array();

    if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        if(empty($username)){
            array_push($errors,"Username is required");
        }

        if(empty($password)){
            array_push($errors,"Password is required");
        }

    
    if(count($errors)==0){
        $query = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password'";
        $result = mysqli_query($conn,$query);
        $objsql = mysqli_fetch_assoc($result);
        
        if($objsql){
        $_SESSION['userid']=$objsql['UserID'];
        header('location: Index.php');
        }
        else{
            $_SESSION['error']='Something Wrong';
            header('location: login.php');
        }
    }
    else{
        $_SESSION['error']='Something Wrong';
        header('location: login.php');
    }
}
                ?>

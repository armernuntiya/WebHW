<?php

    
    session_start();
    require('connect.php');

    $errors = array();
    
    if(isset($_POST['reg_user'])){
        $userid = mysqli_real_escape_string($conn, $_POST['UserID']);
        $username = mysqli_real_escape_string($conn, $_POST['Username']);
        $password = mysqli_real_escape_string($conn, $_POST['Password']);
        

        if(empty($userid)){
            array_push($errors,"UserID is required");
        }

        if(empty($username)){
            array_push($errors,"Username is required");
        }

        if(empty($password)){
            array_push($errors,"Password is required");
        }

    

    $user_check_query = "SELECT * FROM user WHERE UserID = '$userid' OR Username = '$username'";
    $query = mysqli_query($conn,$user_check_query);
    $result = mysqli_fetch_assoc($query);
    
    if($result){
        if($result['Username']===$username){
            array_push($errors,"Username already exists");
        }
        if($result['UserID']===$userid){
            array_push($errors,"UserID already exists");
        }
    }

    if(count($errors)==0){
        $sql = "INSERT INTO user (UserID,Username,Password) VALUES ('$userid','$username','$password')"; 
        mysqli_query($conn,$sql);
        $_SESSION['userid']=$objsql['UserID'];
        header('location: Index.php');
    }else{
        $_SESSION['error']='Something Wrong';
        header('location: register.php');
        
    }
}
?>
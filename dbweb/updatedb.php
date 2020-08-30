
<?php

session_start();
require('connect.php');
$errors = array();
$Userid = $_SESSION['userid'];

    if(isset($_POST['Homework'])){
        $Subject   = $_POST['Subject'];
        $Mission	   = $_POST['Mission'];
        $Deadline  = $_POST['Deadline'];
        

        if(empty($Subject)){
            array_push($errors,"Subject is required");
        }

        if(empty($Mission)){
            array_push($errors,"Misson is required");
        }

        if(empty($Deadline)){
            array_push($errors,"Deadline is required");
        }

    
    

    if(count($errors)==0){
        $sql = "INSERT INTO homework VALUES ('$Userid','$Subject','$Mission','$Deadline')"; 
        mysqli_query($conn,$sql);
        header('location: Index.php');
    }else{
        $_SESSION['error']='Something Wrong';
        header('location: update.php');
    }
    }
?>
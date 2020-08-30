<?php

session_start();
require('connect.php');
$errors = array();


$Userid = $_SESSION['userid'];
$EditSubject = $_SESSION['editsubject'];
$EditMission = $_SESSION['editmission'];
$EditDate = $_SESSION['editdate'];

if(isset($_POST['editHW'])){
    $Subject = $_POST['Subject'];
    $Mission = $_POST['Mission'];
    $Deadline = $_POST['Deadline'];

    

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
    $sql = "UPDATE homework SET Subject = '$Subject' , Mission = '$Mission' , DeadLine = '$Deadline' WHERE UserID = '$Userid' AND Subject = '$EditSubject' AND Mission = '$EditMission' AND DeadLine = '$EditDate'"; 
    mysqli_query($conn,$sql);
    unset($_SESSION['editsubject']);
    unset($_SESSION['editmission']);
    unset($_SESSION['editdate']);
    header('location: Index.php');
}else{
    $_SESSION['error']='Something Wrong';
    header("location: edit.php?Subject=$EditSubject&Mission=$EditMission&DeadLine=$EditDate");

}

}
?>
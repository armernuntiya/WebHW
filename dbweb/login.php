<?php 
    session_start();
    unset($_SESSION['userid']);
?>

<!doctype HTML>
<html>

<head>
<title>Login</title>
<link rel='stylesheet' href='style.css'>
</head>

<body>

    <table>
    <tr>
        <td><h2>Login</h2>
        </td>
    </tr>
    <form action="logindb.php" method="POST">
       
    <tr>
        <td><input type='text' name='username' placeholder='uesername'> 
        <p>
        <input type='text' name='password' placeholder="password">
        </td>
    </tr>
    <tr>
        <td class='btn'>
        <input type="submit" name="login_user" value="log in"></form><p>
        <a href="register.php">Register</a>
        </td>
    </tr>
    </table>
   <?php 
   if(isset($_SESSION['error'])){
    echo "<p align='center'>".$_SESSION['error'];
    unset($_SESSION['error']);
    }?>
</body>

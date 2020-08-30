<?php 
    session_start();
    unset($_SESSION['userid']);
?>

<html>

<head>
<title>Register</title>
<link rel='stylesheet' href='style.css'></head>

<body>
    <h2>Register</h2>
    <form action="registerdb.php" method="POST">
        <table border="1">
            <tr>
            <div class='input'>
                <td>UserID : 
                <input type="text" name="UserID">
            </div>
            </td>
            </tr>
            <tr>
            <div class='input'>
                <td>Username : 
                <input type="text" name="Username">
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div class='input'>
                    Password : 
            <input type="text" name="Password"></div></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="reg_user" value="complete"><br>
                <a href="login.php">Login</a>
            </td>
            </tr>
        </form>
        <?php 
   if(isset($_SESSION['error'])){
    echo "<p align='center' font-color='red'>".$_SESSION['error'];
    unset($_SESSION['error']);
    }?>
</body>

</html>
<?php 
    session_start();
    unset($_SESSION['userid']);
?>

<html>

<head>
<title>Register</title>
<link rel='stylesheet' href='style.css'></head>

<body>
    <form action="registerdb.php" method="POST">
        <table border="1">
        <tr>
        <td><h2>Register</h2>
        </td>
    </tr>
            <tr>
                <td> 
                <input type="text" name="UserID" placeholder="UserID">
                <p>
                <input type="text" name="Username" placeholder="username">
                <p>
                <input type="text" name="Password" placeholder="password"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="reg_user" value="complete"><br>
                <a href="login.php">Login</a>
            </td>
            </tr>
        </form>
        <?php 
   if(isset($_SESSION['error'])){
    echo "<p>".$_SESSION['error'];
    unset($_SESSION['error']);
    }?>
</body>

</html>

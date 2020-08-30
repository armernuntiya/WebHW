
<?php 
    session_start();
    if(!isset($_SESSION['userid'])){
        header('location: login.php');
    }
?>

<html>

<head>
    <title>Update</title>
</head>

<body>
    <h2>Insert Homework</h2>
    <form action="updatedb.php" method="post">
        <table border="1">
            <tr>
                <td>Subject : </td>
                <td>
                <input type="text" name="Subject">        
                </td>
            </tr>
            <tr>
                <td>Misson : </td>
                <td>
                <input type="text" name="Mission">
                </td>
            </tr>
                <td>Deadline : </td>
                <td><input type="date" name="Deadline"></td>
            </tr>
        </table>

        <br>
        <input type="submit" name="Homework" value="Update">
        <p>Back to <a href="Index.php">List</a>
    </form>
    <?php 
   if(isset($_SESSION['error'])){
    echo "<p>".$_SESSION['error'];
    unset($_SESSION['error']);
    }?>
</body>

</html>
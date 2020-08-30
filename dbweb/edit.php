<?php 
    session_start();
    if(!isset($_SESSION['userid'])){
        header('location: login.php');
    }
?>
<html>
<head><title>Edit</title></head>

<body>
    <?php
        $_SESSION['editsubject'] = $_GET['Subject'];
        $_SESSION['editmission'] = $_GET['Mission'];
        $_SESSION['editdate'] = $_GET['DeadLine'];
        ?>
    <h2>Edit Homework</h2>
    <form action="editdb.php" method="post">
        <table border="1">
            <tr>
                <td>Subject : </td>
                <td><input type="text" name="Subject" value=<?php echo $_SESSION['editsubject'] ?> ></td>
            </tr>
            <tr>
                <td>Mission : </td>
                <td><input type="text" name="Mission" value=<?php echo $_SESSION['editmission'] ?> >
                </td>
            </tr>
            <tr>
                <td>DeadLine : </td>
                <td><input type="date" name="Deadline" value=<?php echo $_SESSION['editdate'] ?>></td>
            </tr>
        </table>

        <br>
        <input type="submit" name="editHW" value="Edit">
    </form>
    <p>Back to <a href="Index.php">List</a>
    <?php 
   if(isset($_SESSION['error'])){
    echo "<p>".$_SESSION['error'];
    unset($_SESSION['error']);
    }?>
</body>

</html>
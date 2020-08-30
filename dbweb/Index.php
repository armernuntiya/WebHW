
<?php 
    session_start();
    $Userid = $_SESSION['userid'];
    if(!isset($Userid)){
        header('location: login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['userid']);
        header('location: login.php');
    }
?>

<!doctype HTML>
<html>

<head>
<title>Index</title>
<link rel='stylesheet' href='style.css'>
</head>

<body>
    <?php echo "<h1>List Homework of $Userid </h1>"; ?>
    <p><h3>Option : <a href="update.php">Update</a> <a href="index.php?logout='1'">Logout</a></h3>
    <?php
  require('connect.php');

  $sql = "SELECT * FROM homework WHERE UserID LIKE '$Userid' ORDER BY DeadLine ASC";

  $objQuery = mysqli_query($conn, $sql) or die("No List");
  ?>
  <table border="1">
    <tr>
      <th >
        <div align="center">No</div>
      </th>
      <th >
        <div align="center">Subject</div>
      </th>
      <th >
        <div align="center">Mission</div>
      </th>
      <th >
        <div align="center">Deadline</div>
      </th>
      <th>
        <div align="center">Edit</div>
      </th>
      <th>
        <div align="center">Delete</div>
      </th>
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["Subject"]; ?></td>
        <td><?php echo $objResult["Mission"]; ?></td>
        <td><?php echo $objResult["DeadLine"]; ?></td> 
        <td><a href="edit.php?Subject=<?php echo $objResult["Subject"]; ?>&Mission=<?php echo $objResult["Mission"]; ?>&DeadLine=<?php echo $objResult["DeadLine"]; ?>">Edit</a></td>
        <td><a href="delete.php?Subject=<?php echo $objResult["Subject"]; ?>&Mission=<?php echo $objResult["Mission"]; ?>">Delete</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
</body>
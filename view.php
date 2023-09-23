<?php
require_once('database/myDatabase.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interstelar</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
  <section class="header">
<nav>
  <!--<a href=" index.php"><img src=""></a>-->
  <div class="nav-links">
    <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="display.php">Users</a></li>
    <li><a href="signin.php">Log In</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </ul>
  </div>
  <i class="fa-solid fa-bars"  onclick="showMenu()"></i>
</nav>



  <?php
   $sql = "SELECT userName, userEmail, regDate FROM userdetails";
   $result = $conn->query($sql);
   $row = $result->fetch_row();

if ($row > 0) {
    echo "<h1>List of Users:</h1>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Date of registration</th>";
    echo "</tr>";
    

    $userCount = 0; // Initialize a user counter

    while ($row = $result->fetch_assoc()) {
        $userCount++; // Increment the user counter
        $username = $row["userName"];
        $useremail = $row["userEmail"];
        $userregdate = $row["regDate"];

        echo "<tr>";
        echo "<th>$userCount</th>";
        echo "<td>$username</td>";
        echo "<td>$useremail</td>";
        echo "<td>$userregdate</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>
    

<!--<td><?php echo $row['userName'];?></td>
<td><?php echo $row['userEmail'];?></td>
<td><?php echo $row['regDate'];?></td>-->

</tr>
</table>
  </div>


  </section>
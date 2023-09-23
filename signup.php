<!DOCTYPE html>
<html>

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
  <a href=" index.php"><img src=""></a>
  <div class="nav-links" id="nav-links">
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

<div class="wrapper">
  <div class="form-box-login">
    <h2>Register</h2>
    <form action="database/signuproc.php" class="input-group" method="post">
      <div class="input-box">
        <input type="text" name="userName" required><label>Name</label>
      </div>
      <div class="input-box">
        <input type="email" name="userEmail" required><label>Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="userPassword" required><label>Password</label>
      </div>
      <div class="input-box">
        <input type="password" name="confirmPass" required><label> Confirm Password</label>
      </div>
      <!-- <select name="role" class="input-field">
                        <option>--Select Role--</option>-->
                       <!--<?php
                        require_once "includes/dbConnect.php";

                        $sql = "SELECT * FROM roles";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?php print $row["roles"]; ?>"><?php print $row["role"]; ?></option>
                            <?php
                             }
                        } else { print '<option> No results </option>'; }
                        ?>      -->
      
      <div class="terms">
      <label><input type="checkbox">
      I agree to the Terms & Conditions.</label>
      </div>
      <div class="login">
        <p>Already a member<a href="signin.php">Log In</a>
      </div>
      <button type="submit" class="btn" name="submit-btn"> Register</button>
    </form>
  </div>
</div>



 
  </section>
</body>

</html>
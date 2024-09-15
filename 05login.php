<?php
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InvenTrack - Login</title>
    <link rel="icon" type="image/x-icon" href="images/logo1.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
      />
      <link rel="stylesheet" href="styles.css" />
      <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <nav>
        <a href="index.html">
            <h1 style="color: black;">Inven<span style="color: rgb(247, 170, 70)">Track</span></h1>
          </a>
      <ul>
        <li><a style="text-decoration: none; color: black;" href="index.html">Home</a></li>
        <li><a style="text-decoration: none; color: black;" href="services.html">Services</a></li>
        <li><a style="text-decoration: none; color: black;" href="about.html">About Us</a></li>
      </ul>
      
    </nav>

    <div class="login-container">
      <div class="login-form">
        <h2>Login to Inven<span style="color: rgb(247, 170, 70)">Track</span></h2>
        <form method="POST" action="05login.php">
          <input type="text" name="username" placeholder="Username" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit">Login</button>
        </form>
        
        <?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Using a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, username, password FROM user_details WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];
        if ($password == $hashed_password) {
            // Start a session and store user information
              
              $_SESSION['username'] = $username;
            // Redirect to a dashboard or home page
            
              header("Location: client-dashboard.php");
            
            // echo "done!!";
            exit();
        } else {
            echo "<p style='color:red;'>Login failed. Invalid password.</p>";
        }
    } else {
        echo "<p style='color:red;'>Login failed. User not found..</p>";
    }
        }
        ?>
        <p style="text-align: center; margin-top: 15px;">Don't have an account? <a href="04register.php" style="color: rgb(247, 170, 70);">Register</a></p>
      </div>
    </div>
  </body>
</html>

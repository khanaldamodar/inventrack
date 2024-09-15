
<?php
// Include the database connection file

require 'db.php';
?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="register.css">
    <link rel="icon" type="image/x-icon" href="logo1.png">
    <style>

        body{
            background-color: #1E201E; 
        }
        .register-container {
            
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .register-form .form-group {
            margin-bottom: 1rem;
        }

        .register-form label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        .register-form input,
        .register-form textarea,
        .register-form select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .register-form textarea {
            height: 100px;
            resize: vertical;
        }

        .register-btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background-color: rgb(247, 170, 70);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-btn:hover {
            background-color: rgb(230, 150, 50);
        }
    a{
        text-decoration: none;
        color: black;
    }
    .register-container p{
        text-align: center;
    }
    .register-container p a{
        color: rgb(247, 170, 70);
    }
    </style>
</head>
<body>
    <nav>
        <h1>Inven<span style="color: rgb(247, 170, 70);">Track</span></h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="02services.php">Services</a></li>
            <li><a href="03about.php">About Us</a></li>
        </ul>
    </nav>

    <div class="register-container">
        <a href="index.php">
            <h1 style="color: black;">Inven<span style="color: rgb(247, 170, 70)">Track</span></h1>
          </a>
        <form class="register-form" method="POST" action="register.php" id="register-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="company-name">Company Name:</label>
                <input type="text" id="company-name" name="company-name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required> 
            </div>
           
              

            <button type="submit" class="register-btn">Register</button>
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            try {
                //code...
                $username = $_POST['username'];
                $email = $_POST['email'];
                $company_name = $_POST['company-name'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm-password'];

                
               
           


                
                $sql = "INSERT INTO user_details (username, email, password, c_name, address) VALUES ('$username', '$email','$password', '$company_name','$address')";

                $sql1 = "SELECT * FROM user_details";
        
               

                if(strlen($password) < 8){
                    echo "<p> Password must be 8 characters!!</p>";
                }else if($password != $confirm_password){
                    echo "<p> Password Doesn't match!!</p>";
                }else{
                    if(mysqli_query($conn, $sql) == TRUE){
                        header("Location: login.php");
                        echo "<p style='color:green;'>Register Successfully! </p>";
                    }else{
                        echo "<p style='color:red;'>Failed to Register! </p>";
                    }

                }
        
               
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        ?>
        <p>Already have an account? <a href="05login.php">Login</a></p>
    </div>

    <div class="footer">
        <h1>Inven<span style="color: rgb(247, 170, 70);">Track</span></h1>
        <p>InvenTrack is a simple, real-time Inventory Management System for tracking and managing stock efficiently. It offers secure login and easy navigation for businesses of all sizes.</p>
        <div class="social-icons">
            <a href="#"> <i class="fa-brands fa-facebook"></i> &nbsp;Facebook</a>
            <a href="#"> <i class="fa-brands fa-instagram"></i> &nbsp;Instagram</a>
            <a href="#"> <i class="fa-brands fa-twitter"></i> &nbsp;Twitter</a>
        </div>
        <p>&copy; 2024 InvenTrack. All rights reserved.</p>
        <p>Made with ❤️ by <span style="color: rgb(247, 170, 70);">InvenTrack</span></p>
    </div>

    <!-- <script>
        const form = document.getElementById('register-form');
        function formHandle(e){
            // e.preventDefault()
        }
        form.addEventListener('submit', formHandle)
    </script> -->
</body>
</html>

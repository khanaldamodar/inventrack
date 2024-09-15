
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="client-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="../CSS/settings.css"/>
  </head>
  <body>
    <nav>
      <ul class="navbar">
        <li> <h1 style="color: black;">Inven<span style="color: rgb(247, 170, 70)">Track</span></h1></li>
        <li><button class="logout-btn">Logout</button></li>
      </ul>
    </nav>
    <div class="container">
    <div class="sidebar">
    <ul>
        <li><a href="client-dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="1product.php"><i class="fas fa-add"></i>Add Product</a></li>
        <li><a href="#"><i class="fas fa-list"></i>Product List</a></li>
        <li><a href="5supplier.php"><i class="fas fa-truck"></i>Add Supplier</a></li>
        <li><a href="#"><i class="fas fa-list"></i>Supplier List</a></li>
        <li><a href="4stocks.php"><i class="fas fa-cubes"></i> Stocks</a></li>
        <li><a href="2reports.php"><i class="fas fa-chart-bar"></i> Reports</a></li>
        <li><a href="3settings.php"><i class="fas fa-cog"></i> Settings</a></li>
    </ul>
    </div>
    <div class="main-content">
        <h1>Settings</h1>

        <div class="settings-section">
            <h2>Update Account Details</h2>
            <form id="update-details-form">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" name="company" required>
                </div>
                <button type="submit" class="btn-update">Update Details</button>
            </form>
        </div>

        <div class="settings-section">
            <h2>Change Password</h2>
            <form id="change-password-form">
                <div class="form-group">
                    <label for="current-password">Current Password</label>
                    <input type="password" id="current-password" name="current-password" required>
                </div>
                <div class="form-group">
                    <label for="new-password">New Password</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm New Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit" class="btn-update">Change Password</button>
            </form>
        </div>

        <div class="settings-section">
            <h2>Forgot Password</h2>
            <form id="forgot-password-form">
                <div class="form-group">
                    <label for="forgot-email">Email</label>
                    <input type="email" id="forgot-email" name="forgot-email" required>
                </div>
                <button type="submit" class="btn-reset">Reset Password</button>
            </form>
        </div>
    </div>

    <style>
        .main-content {
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .settings-section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h1, h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            color: black;
        }

        .btn-update,
        .btn-reset {
            background-color: #f7aa46;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-update:hover,
        .btn-reset:hover {
            background-color: #e59635;
        }

        .btn-reset {
            background-color: #4CAF50;
        }

        .btn-reset:hover {
            background-color: #45a049;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const updateDetailsForm = document.getElementById('update-details-form');
            const changePasswordForm = document.getElementById('change-password-form');
            const forgotPasswordForm = document.getElementById('forgot-password-form');

            updateDetailsForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the form data to your server
                alert('Account details updated successfully!');
            });

            changePasswordForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the form data to your server
                alert('Password changed successfully!');
            });

            forgotPasswordForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the form data to your server
                alert('Password reset link sent to your email!');
            });
        });
    </script>
    </div>
    

  </body>
</html>

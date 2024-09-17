<?php
require("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <ul class="navbar">
        <li> <h1>Inven<span style="color: rgb(247, 170, 70)">Track</span></h1></li>
        <li><a style="color: black; text-decoration: none; font-size: 20px;" href="01_register_admin.php">create new Admin</a></li>
        <li><button class="logout-btn"><a  href="01adminlogout.php">Logout</a></button></li>
      </ul>
    </nav>



    <div class="container">
    <div class="user-table">
        <h2>User Management</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- database bata data retrieve garne section  -->
                <tr>
                    <td>1</td>
                    <td>Damodar Khanal</td>
                    <td>damodar@gmail.com</td>
                    <td>User</td>
                    <td>
                        <button class="edit-btn" onclick="editUser(1)"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" onclick="deleteUser(1)"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Janaki</td>
                    <td>janaki@gmail.com</td>
                    <td>User</td>
                    <td>
                        <button class="edit-btn" onclick="editUser(1)"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" onclick="deleteUser(1)"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                
                 <!-- database bata aako data haru dynamically insert garne section  -->
            </tbody>
        </table>
    </div>

    

    <script>
        function editUser(userId) {
            // Implement edit functionality
            console.log("Editing user with ID:", userId);
            // You would typically open a modal or navigate to an edit page here
        }

        function deleteUser(userId) {
            if (confirm("Are you sure you want to delete this user?")) {
                // Implement delete functionality
                console.log("Deleting user with ID:", userId);
                // You would typically send a request to your backend to delete the user
                // and then remove the row from the table if successful
            }
        }

        // You would typically fetch user data from your backend and populate the table dynamically
        // This is just a placeholder for demonstration
        function fetchUsers() {
            // Fetch users from backend and populate table
        }

        // Call fetchUsers when the page loads
        window.onload = fetchUsers;
    </script>

    </div>

  </body>
</html>

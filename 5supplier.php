
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="client-dashboard.css"/>
    <link rel="stylesheet" href="supplier.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
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
      <h1 style="text-align: center; margin-top: 20px;">Supplier Management</h1>
      
      <!-- Add New Supplier Form -->
      <div class="form-container">
        <h2>Add New Supplier</h2>
        <form id="supplierForm" class="supplier-form">
          <div class="form-group">
            <label for="supplierId">Supplier ID:</label>
            <input type="text" id="supplierId" name="supplierId" required>
          </div>
          <div class="form-group">
            <label for="supplierName">Supplier Name:</label>
            <input type="text" id="supplierName" name="supplierName" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
          </div>
          <button type="submit" class="submit-btn"><i class="fas fa-plus"></i> Add Supplier</button>
        </form>
      </div>
      <hr>

      <!-- Search Suppliers -->
      <div class="search-container">
        <input type="text" id="searchSupplier" placeholder="Search suppliers...">
        <button id="searchBtn"><i class="fas fa-search"></i></button>
      </div>

      <!-- Supplier List Table -->
      <h2 style="color: black; text-align: center; margin-top: 20px;">Supplier List</h2>
      <table class="supplier-table">
        <thead>
          <tr>
            <th>Supplier ID</th>
            <th>Supplier Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="supplierTableBody">
          <!-- Supplier rows will be dynamically added here -->
         
        </tbody>
      </table>
    </div>

   

    <script>
      document.getElementById('supplierForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const supplierId = document.getElementById('supplierId').value;
        const supplierName = document.getElementById('supplierName').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;

        const tableBody = document.getElementById('supplierTableBody');
        const newRow = tableBody.insertRow();
        newRow.innerHTML = `
          <td>${supplierId}</td>
          <td>${supplierName}</td>
          <td>${email}</td>
          <td>${phone}</td>
          <td>${address}</td>
          <td class="action-icons">
            <i class="fas fa-edit" onclick="editSupplier(this)"></i>
            <i class="fas fa-trash-alt" onclick="deleteSupplier(this)"></i>
          </td>
        `;

        this.reset();
      });

      function editSupplier(icon) {
        const row = icon.closest('tr');
        // Implement edit functionality here
        alert('Edit supplier: ' + row.cells[1].textContent);
      }

      function deleteSupplier(icon) {
        if (confirm('Are you sure you want to delete this supplier?')) {
          const row = icon.closest('tr');
          row.remove();
        }
      }

      document.getElementById('searchBtn').addEventListener('click', function() {
        const searchTerm = document.getElementById('searchSupplier').value.toLowerCase();
        const rows = document.getElementById('supplierTableBody').getElementsByTagName('tr');

        for (let row of rows) {
          const supplierName = row.cells[1].textContent.toLowerCase();
          if (supplierName.includes(searchTerm)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        }
      });
    </script>

    </div>
    

  </body>
</html>

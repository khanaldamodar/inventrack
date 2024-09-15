
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="client-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="stock.css"/>
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
      <h1 style="text-align: center; margin-top: 20px;">Stock Management</h1>
      
      <!-- View Current Stock Levels -->
      <div class="stock-section">
        <h2>Current Stock Levels</h2>
        <table class="stock-table">
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Current Quantity</th>
              <th>Reorder Level</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="stockTableBody">
            <!-- Stock rows will be dynamically added here -->
          </tbody>
        </table>
      </div>

      <!-- Update Stock Quantities -->
      <div class="stock-section">
        <h2>Update Stock</h2>
        <form id="updateStockForm" class="stock-form">
          <div class="form-group">
            <label for="productId">Product ID:</label>
            <input type="text" id="productId" name="productId" required>
          </div>
          <div class="form-group">
            <label for="quantity">New Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
          </div>
          <button type="submit" class="submit-btn"><i class="fas fa-sync-alt"></i> Update Stock</button>
        </form>
      </div>

      <!-- Stock In/Out Transactions -->
      <div class="stock-section">
        <h2>Stock Transactions</h2>
        <table class="transaction-table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Product ID</th>
              <th>Transaction Type</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody id="transactionTableBody">
            <!-- Transaction rows will be dynamically added here -->
          </tbody>
        </table>
      </div>

      <!-- Low Stock Alerts -->
      <div class="stock-section">
        <h2>Low Stock Alerts</h2>
        <div id="lowStockAlerts" class="alert-container">
          <!-- Low stock alerts will be dynamically added here -->
        </div>
      </div>
    </div>

   

    <script>
      // Sample data - replace with actual data fetching logic
      const stockData = [
        { id: '001', name: 'Product A', quantity: 50, reorderLevel: 20 },
        { id: '002', name: 'Product B', quantity: 15, reorderLevel: 30 },
        { id: '003', name: 'Product C', quantity: 75, reorderLevel: 25 },
      ];

      const transactionData = [
        { date: '2023-07-20', productId: '001', type: 'In', quantity: 20 },
        { date: '2023-07-21', productId: '002', type: 'Out', quantity: 5 },
        { date: '2023-07-22', productId: '003', type: 'In', quantity: 15 },
      ];

      // Populate stock table
      const stockTableBody = document.getElementById('stockTableBody');
      stockData.forEach(item => {
        const row = stockTableBody.insertRow();
        row.innerHTML = `
          <td>${item.id}</td>
          <td>${item.name}</td>
          <td>${item.quantity}</td>
          <td>${item.reorderLevel}</td>
          <td><button class="update-btn" onclick="updateStock('${item.id}')">  Update</button></td>
        `;
      });

      // Populate transaction table
      const transactionTableBody = document.getElementById('transactionTableBody');
      transactionData.forEach(item => {
        const row = transactionTableBody.insertRow();
        row.innerHTML = `
          <td>${item.date}</td>
          <td>${item.productId}</td>
          <td>${item.type}</td>
          <td>${item.quantity}</td>
        `;
      });

      // Generate low stock alerts
      const lowStockAlerts = document.getElementById('lowStockAlerts');
      stockData.forEach(item => {
        if (item.quantity < item.reorderLevel) {
          const alert = document.createElement('div');
          alert.className = 'alert-item';
          alert.textContent = `Low stock alert: ${item.name} (${item.quantity} left)`;
          alert.style.color = 'black';
          lowStockAlerts.appendChild(alert);
        }
      });

      // Handle stock update form submission
      document.getElementById('updateStockForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const productId = document.getElementById('productId').value;
        const newQuantity = document.getElementById('quantity').value;
        // Implement stock update logic here
        alert(`Updated stock for Product ID: ${productId} to ${newQuantity}`);
        this.reset();
      });

      function updateStock(productId) {
        // Implement logic to populate update form with current stock info
        document.getElementById('productId').value = productId;
        document.getElementById('quantity').focus();
      }
    </script>
    </div>
    

  </body>
</html>

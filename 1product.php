
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="client-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="product.css"/>
    
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
      <h1 style="text-align: center; margin-top: 20px;">Add Product</h1>
        <div class="form-container">
            <form id="productForm" class="product-form">
                <div class="form-group">
                    <label for="productId">Product ID:</label>
                    <input type="text" id="productId" name="productId" required>
                </div>
                <div class="form-group">
                    <label for="productName">Product Name:</label>
                    <input type="text" id="productName" name="productName" required>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>
                <button type="submit" class="submit-btn"> <i class="fas fa-plus"></i> Add Product</button>
            </form>
            <hr>
        </div>
        <h1 style="text-align: center; margin-top: 20px;">Product List</h1>
        <table class="product-table">

          <thead>
              <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>001</td>
                  <td>Product A</td>
                  <td>Electronics</td>
                  <td>100</td>
                  <td>$199.99</td>
                  <td class="action-icons">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-alt"></i>
                  </td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Product B</td>
                  <td>Clothing</td>
                  <td>50</td>
                  <td>$49.99</td>
                  <td class="action-icons">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-alt"></i>
                  </td>
              </tr>
              <tr>
                  <td>003</td>
                  <td>Product C</td>
                  <td>Home & Garden</td>
                  <td>75</td>
                  <td>$79.99</td>
                  <td class="action-icons">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-alt"></i>
                  </td>
              </tr>
          </tbody>
      </table>
        
    </div>



</div>
  
<script>
  document.getElementById('productForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const productId = document.getElementById('productId').value;
      const productName = document.getElementById('productName').value;
      const category = document.getElementById('category').value;
      const quantity = document.getElementById('quantity').value;
      const price = document.getElementById('price').value;

      const tableBody = document.querySelector('.product-table tbody');
      const newRow = tableBody.insertRow();
      newRow.innerHTML = `
          <td>${productId}</td>
          <td>${productName}</td>
          <td>${category}</td>
          <td>${quantity}</td>
          <td>$${parseFloat(price).toFixed(2)}</td>
          <td class="action-icons">
              <i class="fas fa-edit"></i>
              <i class="fas fa-trash-alt"></i>
          </td>
      `;

      this.reset();
  });
 
</script>
  </body>
</html>

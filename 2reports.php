<?php
require("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="client-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="reports.css"/>
  </head>
  <body>
    <nav>
      <ul class="navbar">
        <li> <h1 style="color: black;">Inven<span style="color: rgb(247, 170, 70)">Track</span></h1></li>
        <li><button class="logout-btn"><a href="logout.php">Logout</a></button></li>
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
        <h1>Reports</h1>

        <div class="report-section">
            <h2>Inventory Report</h2>
            <p>Generate a comprehensive report of your current inventory.</p>
            <button class="generate-btn" id="inventory-report-btn">Generate Inventory Report</button>
        </div>

        <div class="report-section">
            <h2>Sales Report</h2>
            <p>View detailed sales data for a specified time period.</p>
            <form id="sales-report-form">
                <input type="date" id="sales-start-date" required>
                <input type="date" id="sales-end-date" required>
                <button type="submit" class="generate-btn">Generate Sales Report</button>
            </form>
        </div>

        <div class="report-section">
            <h2>Purchase Report</h2>
            <p>Analyze your purchasing trends and expenses.</p>
            <form id="purchase-report-form">
                <input type="date" id="purchase-start-date" required>
                <input type="date" id="purchase-end-date" required>
                <button type="submit" class="generate-btn">Generate Purchase Report</button>
            </form>
        </div>

        <div class="report-section">
            <h2>Low Stock Report</h2>
            <p>Identify products that are running low and need restocking.</p>
            <button class="generate-btn" id="low-stock-report-btn">Generate Low Stock Report</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inventoryReportBtn = document.getElementById('inventory-report-btn');
            const salesReportForm = document.getElementById('sales-report-form');
            const purchaseReportForm = document.getElementById('purchase-report-form');
            const lowStockReportBtn = document.getElementById('low-stock-report-btn');

            function generatePDF(title, content) {
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF();
                doc.text(title, 20, 20);
                doc.text(content, 20, 30);
                doc.save(`${title.toLowerCase().replace(' ', '_')}.pdf`);
            }

            inventoryReportBtn.addEventListener('click', function() {
                generatePDF('Inventory Report', 'This is a sample inventory report content.');
            });

            salesReportForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const startDate = document.getElementById('sales-start-date').value;
                const endDate = document.getElementById('sales-end-date').value;
                generatePDF('Sales Report', `Sales report from ${startDate} to ${endDate}`);
            });

            purchaseReportForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const startDate = document.getElementById('purchase-start-date').value;
                const endDate = document.getElementById('purchase-end-date').value;
                generatePDF('Purchase Report', `Purchase report from ${startDate} to ${endDate}`);
            });

            lowStockReportBtn.addEventListener('click', function() {
                generatePDF('Low Stock Report', 'This is a sample low stock report content.');
            });
        });
    </script>

   
    </div>
    

  </body>
</html>

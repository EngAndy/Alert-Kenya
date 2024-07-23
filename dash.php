<?php
session_start();


// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dash2.css">

</head>
   <p>Welcome to your dashboard, <?php echo htmlspecialchars($user_name); ?>!</p>
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="Images/logo.png"alt="Logo" class="logo">
            <h2>User</h2>
        </div>
        <div class="sidebar-menu">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Admin Management</a></li>
            <li><a href="#">Company Management</a></li>
            <li><a href="#">Employee Management</a></li>
            <li><a href="#">Respond Management</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Alert Requests</a></li>
            <li><a href="#">Summary Statistics</a></li>
            <li><a href="#">Date Management</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Payroll</a></li>
            <li><a href="#">Paygrade</a></li>
            <li><a href="logout.php">LOG OUT</li>
        </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        <header>
            <h1>Welcome to your admin dashboard</h1>
        </header>
        <div class="stats">
            <div class="stat">
                <span>Number of Users</span>
                <span>00</span>
            </div>
            <div class="stat">
                <span>Times Spent</span>
                <span>00</span>
            </div>
            <div class="stat">
                <span>Number of Alerts</span>
                <span>00</span>
            </div>
            <div class="stat">
                <span>Number of Responses</span>
                <span>00</span>
            </div>
        </div>
        <div class="reports">
            <h2>Daily Reports</h2>
            <p>Nairobi, Kenya</p>
        </div>
        <div class="total-stats">
            <h2>Total Stats Reports</h2>
            <p>Nairobi, Kenya</p>
        </div>
    </div>
    <script src="script.js"></script>

    <!-- Add more dynamic content here -->
</body>
</html>



   
<?php
$title = "User Dashboard";
$stylesheet = "style.css";
$script = "script.js";
session_start();
$user_name =$_SESSION['email'];
include '../common/header.php';
?>
<div class="main-content">
    <header>
        <h1>Welcome to your user dashboard, <?php echo htmlspecialchars($user_name); ?></h1>
    </header>
    <div class="content">
        <p>Here you can find all the information and tools you need.</p>
    </div>
</div>
<?php include '../common/footer.php'; ?>

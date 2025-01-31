<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Milk Bar Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <h3>Available Products</h3>
        <ul>
            <li>Fresh Milk - $50</li>
            <li>Mala - $60</li>
            <li>Yoghurt - $80</li>
            <li>Eggs - $15</li>
            <li>Cakes - $100</li>
            <li>Sugar - $120</li>
        </ul>
        <a href="logout.php"><button class="logout-btn">Logout</button></a>
    </div>
</body>
</html>

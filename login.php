<?php
include("connection.php"); 
session_start();

if (isset($_POST["login"])) {
    if (!$conn) {
        die("❌ Database connection failed.");
    }

    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        // Fetch user details
        $sql = "SELECT email, password, role FROM users WHERE email = ?";  
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($storedEmail, $hashedPassword, $role);
            $stmt->fetch();

            if (password_verify($password, $hashedPassword)) {
                $_SESSION["email"] = $email;  
                $_SESSION["role"] = $role;  // Store role

                echo "<div style='color:green;'>✅ Login successful! Redirecting...</div>";
                
                if ($role == "admin") {
                    header("Location: admin_home.php");
                } else {
                    header("Location: user_home.php");
                }
                exit();
            } else {
                echo "<div style='color:red;'>❌ Incorrect password.</div>";
            }
        } else {
            echo "<div style='color:red;'>❌ No user found with that email.</div>";
        }

        $stmt->close();
    } else {
        echo "<div style='color:red;'>❌ Please provide both email and password.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1>Library Management System</h1><br>
    <h3>User Login Page</h3><br><br>

    <form action="login.php" method="post">
        <label for="email">Username</label><br>
        <input type="email" name="email" placeholder="Enter Email" id="uid" required><br>
        
        <label for="pass">Password</label><br>
        <input type="password" name="password" placeholder="Enter Password" id="pass" required><br><br>
        
        <div style="display:flex; gap:90px">
            <input type="reset" value="Cancel" id="cancel">
            <input type="submit" name="login" value="Login" id="login">
        </div>
    </form>
<br><br>
    <div>Don't have an account? <a href="sign_up.php">Sign up</a></div>
</body>
</html>

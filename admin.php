<?php
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Admin Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Library Management System</h1><br>
    <h3>Admin Login Page</h3><br><br>
    
    <form action="admin.php" method="post">
        <label>Username</label><br>
        <input type="text" name="userid" placeholder="Enter Email" id="uid" required><br>
        
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Enter Password" id="pass" required><br><br>
        
        <div style="display:flex; gap:90px">
            <input type="reset" value="Cancel" id="cancel">
            <input type="submit" name="login" value="Login" id="login">
        </div>
    </form>

    <?php
    if (isset($_POST["login"])) {
        if (!$conn) {
            die("❌ Database connection failed: " . mysqli_connect_error());
        }

        $email = trim($_POST["userid"]);
        $password = trim($_POST["password"]);

        // Fetch admin details
        $query = "SELECT email, password, role FROM admin WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($storedEmail, $storedPassword, $role);
            $stmt->fetch();

            if (password_verify($password, $storedPassword)) {
                $_SESSION["username"] = $email;
                $_SESSION["role"] = $role;  // Store user role in session

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
            echo "<div style='color:red;'>❌ No admin found with that email.</div>";
        }

        $stmt->close();
    }
    ?>
    <br><br>
    <div>Don't have an account? <a href="sign_up.php">Sign up</a></div>
</body>
</html>

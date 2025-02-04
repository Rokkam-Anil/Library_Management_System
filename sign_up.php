<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
    <div class="container">
        <h1>Library Management System</h1><br>
        <h3>Registration Form</h3><br><br>
        <form action="sign_up.php" method="post">
            <label for="fName">First Name:</label><br>
            <input type="text" id="fName" name="fName" placeholder="First Name" required><br><br>

            <label for="lName">Last Name:</label><br>
            <input type="text" id="lName" name="lName" placeholder="Last Name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>

            <label for="role">Role:</label><br>
            <select name="role" id="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br><br>
            <div style="display:flex; gap:11rem">
                <input type="reset" name="cancel" value="Cancel" id="cancel">
                <input type="submit" name="register" value="Register" id="login">
            </div>
        </form><br><br>
        <?php
$servername = "localhost";
$username = "root";  
$password = "Anil@2004"; 
$dbname = "acxiom"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ Database Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = filter_var(trim($_POST["fName"]), FILTER_SANITIZE_STRING);
    $lastName = filter_var(trim($_POST["lName"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];

    $role = isset($_POST["role"]) ? $_POST["role"] : 'user';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("❌ Invalid email format.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($conn) {
        $stmt = $conn->prepare("INSERT INTO admin (first_name, last_name, email, password, role) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstName, $lastName, $email, $hashedPassword, $role);

        if ($stmt->execute()) {
            if ($role === "admin") {
                echo "✅ Registration successful! <a href='admin.php'>Login as Admin</a>";
            } else {
                echo "✅ Registration successful! <a href='login.php'>Login as User</a>";
            }
        } else {
            echo "❌ Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        die("❌ Database connection is missing!");
    }
} else {
    die("❌ Invalid request.");
}
?>
</div>
</body>
</html>


<?php
    include("connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Library Management System</h2>
    <br>
    <form action="admin.php" method="post">
        <label >User Id </label>
        <input type="text" name="userid">
        <br>
        <label >Password </label>
        <input type="password" name="password">
        <br>
        <input type="submit" name= "cancel" value="cancel">
        <input type="submit" name= "login" value="login">

    </form>
</body>
</html>

<?php

    

    if(isset($_POST["login"]))
    {
        $username = $_POST["userid"];
    $password = $_POST["password"];
    
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
        $sql = "INSERT INTO admin VALUES('$username','$password')";
        try
        {
        mysqli_query($conn,$sql);
        }
        catch(mysqli_sql_exception)
        {
            echo "You are credentials not entered";
        }
        header("Location:admin_home.php");
    }

   
    

    

?>
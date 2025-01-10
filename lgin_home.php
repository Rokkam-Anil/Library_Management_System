<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 24px;
            color: #333;
        }
        .header a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .logout {
            text-align: right;
            margin-top: 20px;
        }
        .logout a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .logout-btn {
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 16px;
}
.logout-btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin Home Page</h1>
            <a href="#">Back</a>
        </div>
        <nav>
            <strong>Chart</strong> | <strong>Maintenance</strong> | <strong>Reports</strong> | <strong>Transactions</strong>
        </nav>
        <table>
            <thead>
                <tr>
                    <th>Code No From</th>
                    <th>Code No To</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SC(B/M)000001</td>
                    <td>SC(B/M)000004</td>
                    <td>Science</td>
                </tr>
                <tr>
                    <td>EC(B/M)000001</td>
                    <td>EC(B/M)000004</td>
                    <td>Economics</td>
                </tr>
                <tr>
                    <td>FC(B/M)000001</td>
                    <td>FC(B/M)000004</td>
                    <td>Fiction</td>
                </tr>
                <tr>
                    <td>CH(B/M)000001</td>
                    <td>CH(B/M)000004</td>
                    <td>Children</td>
                </tr>
                <tr>
                    <td>PD(B/M)000001</td>
                    <td>PD(B/M)000004</td>
                    <td>Personal Development</td>
                </tr>
            </tbody>
        </table>
        <div class="logout">
            <form action="admin_home.php" method="post">
                <input type="submit" name="logout" value="Log Out" class="logout-btn">
            </form>
        </div>

    </div>
</body>
</html>

<?php
if(isset($_POST["logout"]))
{
    session_destroy();
   header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions Page</title>
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
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .logout {
            text-align: right;
        }
        .logout a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Transactions</h1>
            <a href="#">Home</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Chart</th>
                    <th>Transactions</th>
                    <th>Home</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Is book available?</td>
                    <td></td>
                    <td rowspan="4" class="logout"><a href="#">Log Out</a></td>
                </tr>
                <tr>
                    <td>Issue book?</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Return book?</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pay Fine?</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

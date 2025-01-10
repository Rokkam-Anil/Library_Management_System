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
        .dropdown {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
                    <td>Book Availability</td>
                    <td rowspan="6" class="logout"><a href="#">Log Out</a></td>
                </tr>
                <tr>
                    <td>Issue book?</td>
                    <td>
                        <label for="book-name">Book Name:</label>
                        <input type="text" id="book-name" name="book-name" class="dropdown">
                        <br>
                        <label for="author-name">Author Name:</label>
                        <input type="text" id="author-name" name="author-name" class="dropdown">
                        <br>
                        <label for="serial-number">Serial Number:</label>
                        <input type="text" id="serial-number" name="serial-number" class="dropdown">
                        <br>
                        <label for="availability">Available:</label>
                        <input type="text" id="availability" name="availability" class="dropdown">
                        <br>
                        <button>Select to issue the book</button>
                    </td>
                </tr>
                <tr>
                    <td>Return book?</td>
                    <td>
                        <label for="return-author">Author Name:</label>
                        <input type="text" id="return-author" name="return-author" class="dropdown">
                        <br>
                        <label for="return-serial">Serial Number:</label>
                        <input type="text" id="return-serial" name="return-serial" class="dropdown">
                        <br>
                        <label for="return-available">Available:</label>
                        <input type="radio" id="return-yes" name="return-available" value="Y"> Yes
                        <input type="radio" id="return-no" name="return-available" value="N"> No
                    </td>
                </tr>
                <tr>
                    <td>Pay Fine?</td>
                    <td>
                        <label for="fine-author">Author Name:</label>
                        <input type="text" id="fine-author" name="fine-author" class="dropdown">
                        <br>
                        <label for="fine-available">Available:</label>
                        <input type="radio" id="fine-yes" name="fine-available" value="Y"> Yes
                        <input type="radio" id="fine-no" name="fine-available" value="N"> No
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <label for="fine-author2">Author Name:</label>
                        <input type="text" id="fine-author2" name="fine-author2" class="dropdown">
                        <br>
                        <label for="fine-available2">Available:</label>
                        <input type="radio" id="fine-yes2" name="fine-available2" value="Y"> Yes
                        <input type="radio" id="fine-no2" name="fine-available2" value="N"> No
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <label for="fine-author3">Author Name:</label>
                        <input type="text" id="fine-author3" name="fine-author3" class="dropdown">
                        <br>
                        <label for="fine-available3">Available:</label>
                        <input type="radio" id="fine-yes3" name="fine-available3" value="Y"> Yes
                        <input type="radio" id="fine-no3" name="fine-available3" value="N"> No
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custormer Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        form:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle;
        }

        input[type="checkbox"] + label {
            display: inline;
            margin-left: 5px;
            vertical-align: middle;
        }

        @media screen and (max-width: 768px) {
            form {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <h2>Customer details</h2>
    <form action="submit.php" method="post">
        <label for="name">Customer Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="employee_id">Customer ID:</label><br>
        <input type="text" id="employee_id" name="employee_id" required><br>
        
        <label for="department">Department:</label><br>
        <input type="text" id="department" name="department" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required><br>
        
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br>
        
        <label for="description">Description of E-Waste:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>
        
        <label for="condition">Condition of E-Waste:</label><br>
        <input type="text" id="condition" name="condition" required><br>
        
        <label for="pickup">Pickup or Drop-off Preference:</label><br>
        <select id="pickup" name="pickup">
            <option value="pickup">Pickup</option>
            <option value="drop-off">Drop-off</option>
        </select><br>
        
        <label for="pickup_date">Preferred Pickup Date/Time:</label><br>
        <input type="datetime-local" id="pickup_date" name="pickup_date"><br>
        
        <label for="instructions">Special Instructions:</label><br>
        <textarea id="instructions" name="instructions" rows="4" cols="50"></textarea><br>
        
        <input type="checkbox" id="acknowledgment" name="acknowledgment" required>
        <label for="acknowledgment">I acknowledge responsibility for the proper disposal of e-waste according to the organization's policies.</label><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
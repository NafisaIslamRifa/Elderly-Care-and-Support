<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .success-container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
            font-size: 28px;
        }

        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 8px;
            font-size: 16px;
            color: #333;
        }

        th {
            width: 40%;
            font-weight: normal;
            color: #777;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h1>Payment Successful</h1>
        <p>Your payment was successful. Thank you for your donation!</p>
        <table>
            
            <tr>
                <th>Amount:</th>
                <td>{{ $amount }}{{ $currency }}</td>
            </tr>
            <tr>
                <th>Transaction ID:</th>
                <td>{{ $tran_id }}</td>
            </tr>
        </table>
        <a href="{{ route('account.dashboard') }}" class="button">Go to Homepage</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Inquiries</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            color: #007BFF;
        }
        p {
            line-height: 1.6;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inquiries</h2>
        <p><span class="label">Full Name:</span> {{ $data['full_name'] }}</p>
        <p><span class="label">Contact Number:</span> {{ $data['contactNumber'] }}</p>
        <p><span class="label">Email Address:</span> {{ $data['email'] }}</p>
        <p><span class="label">Message:</span> {{ $data['message'] }}</p>
    </div>
</body>
</html>

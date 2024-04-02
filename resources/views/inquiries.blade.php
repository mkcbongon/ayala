<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Application</title>
</head>
<body>
    <h2>New Job Application</h2>
    <p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
    <p><strong>Contact Number:</strong> {{ $data['contactNumber'] }}</p>
    <p><strong>Email Address:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
    <p><strong>Terms and Conditions:</strong> Accepted</p>
</body>
</html>

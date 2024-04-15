<!DOCTYPE html>
<html>
<head>
    <title>Property Upload Status</title>
</head>
<body>
    @if ($approved)
        <h2>Your Property Upload Has Been Approved</h2>
        <p>Dear {{ $upload->full_name }},</p>
        <p>We are pleased to inform you that your property upload has been approved.</p>
        <p>Thank you for using our service!</p>
    @else
        <h2>Your Property Upload Has Been Declined</h2>
        <p>Dear {{ $upload->full_name }},</p>
        <p>We regret to inform you that your property upload has been declined.</p>
        <p>If you have any questions or concerns, please feel free to contact us.</p>
    @endif

    <p>Property Details:</p>
    <ul>
        <li><strong>Property Type:</strong> {{ $upload->property_type }}</li>
        <li><strong>Message:</strong> {{ $upload->message }}</li>
    </ul>

    <p>Best Regards,<br>Your Website Team</p>
</body>
</html>

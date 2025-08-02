<!DOCTYPE html>
<html>
<head>
    <title>Maa Dharitri New Contact Form Submission</title>
</head>
<body>
    <h1>Details</h1>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Subject:</strong> {{ $formData['subject'] }}</p>
    <hr>
    <p><strong>Message:</strong></p>
    <p>{{ $formData['message'] }}</p>
</body>
</html>

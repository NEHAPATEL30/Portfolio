<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Contact</title>
</head>
<body style="font-family: Arial">

    <h2>New Message from Portfolio</h2>

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>

    <hr>

    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>

</body>
</html>

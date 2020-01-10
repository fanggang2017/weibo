<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Link</title>
</head>
<body>
    <h1>Thanks for your registration.</h1>
    <p>
        Please click the following link to complete registration:
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        If this is not your own operation, please ignore this message.
    </p>
</body>
</html>

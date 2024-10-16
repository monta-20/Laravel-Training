<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Send Data for test POST METHOD</h1>
    <form method="POST">
        @csrf <!-- This is necessary for handling CSRF protection -->
        <input type="text" name="name" placeholder="name"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="email" name="email" placeholder="email"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
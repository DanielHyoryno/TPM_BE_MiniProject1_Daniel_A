<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route(name: 'login') }}" method="POST">
        @csrf
        <label for="">Email</label>
        <input type="email" email="email">

        <label for="">Password</label>
        <input type="password" password="password">

        <button for="submit">Submit</button>
    </form>
</body>
</html>
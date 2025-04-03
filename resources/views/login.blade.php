<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 400px; margin: auto; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px; width: 100%; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Login</h2>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if($errors->any())
    <p style="color:red;">{{ $errors->first() }}</p>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
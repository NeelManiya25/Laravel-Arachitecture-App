<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 400px; margin: auto; }
        label { display: block; margin-top: 10px; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px; width: 100%; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Register</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Date of Birth:</label>
        <input type="date"name="dob" required>
        
        <label>Email:</label>
        <input type="email" name="email" required>
        
        <label>Phone:</label>
        <input type="text" name="phone" required>
        
        <label>Password:</label>
        <input type="password" name="password" required>
        
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required>

        <label>Role:</label>
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" href="{{ route('login') }}">Register</button>
    </form>
</body>
</html>

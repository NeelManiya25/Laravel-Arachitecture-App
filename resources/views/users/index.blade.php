<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 10px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .card {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="{{ route('users.index') }}"><i class="fas fa-tachometer-alt"></i> User</a>
        <a href="{{ route('employees.index')}}"><i class="fas fa-users"></i> Employee</a>
        <a href="{{ route('customers.index')}}"><i class="fas fa-chart-bar"></i> Customer</a>
        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
            <div class="container-fluid">
                <span class="navbar-brand">Users</span>
                <div class="ms-auto">
                    <i class="fas fa-bell mx-3">
                    <div class="text-end">
                         <a href="{{ route('users.usersform') }}" class="btn btn-primary">Add+</a>
                    </div>
                    </i>
                </div>
            </div>
        </nav>

        <div class="card p-3">
            <h5 class="mb-3">User List</h5>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>Neel Maniya</td>
                            <td>neelmaniya81@gmail.com</td>
                            <td>admin</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <form action="" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Om Maniya</td>
                            <td>Ommaniya@gmail.com</td>
                            <td>user</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <form action="" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn  btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

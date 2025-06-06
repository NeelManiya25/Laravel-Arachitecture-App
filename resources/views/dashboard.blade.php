<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a> 
    </div>

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
            <div class="container-fluid">
                 <span class="navbar-brand">Dashboard</span>
                <div class="ms-auto">
                    <i class="fas fa-bell mx-3"></i>
                    <i class="fas fa-user"></i>Admin
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary p-3">
                    <h5>Total Users</h5>
                    <h2>1,250</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success p-3">
                    <h5>Sales</h5>
                    <h2>$23,500</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning p-3">
                    <h5>New Orders</h5>
                    <h2>340</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger p-3">
                    <h5>Tickets</h5>
                    <h2>42</h2>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-3">
                     <!-- <h5>Recent Activity</h5>
                    <ul>
                        <li>New user registered</li>
                        <li>Product sold: iPhone 15</li>
                        <li>Support ticket resolved</li>
                    </ul> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3">
                    <!-- <h5>System Status</h5>
                     <p>Everything is running smoothly!</p> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

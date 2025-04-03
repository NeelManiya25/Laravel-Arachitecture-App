<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .a{
                margin-top: -25px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Customer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                          <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                        <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action ">User</a>
                        <a href="{{ route('employees.index') }}" class="list-group-item list-group-item-action">Employee</a>
                        <a href="{{ route('customers.index') }}" class="list-group-item list-group-item-action">Customer</a>
                </div>
            </div>
            <div class="col-md-9">  
                <div class="card">
                    <div class="card-header">Customer
                        <div class="text-end a">
                            <a href="{{ route('customers.customersform') }}" class="btn btn-primary">Add+</a>
                        </div>
                    </div>
                    <div class="card-body">
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

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
         /* 343a40 */
           .sidebar{
                height: 100vh;
                position: fixed;
                width: 250px;
                background-color: #343a40;
                color: white;
                padding-top: 20px;
            }
         .sidebar a{
            color: white;
            padding:15px;
            display:block;
            text-decoration :none;
         }
         .sidebar a:hover{
            /* 495057 */
            background-color: #495057;
         }

        .content{
            margin-left:260px;
            padding: 20px;
        }
          .card{
            border-radius:10px;
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
                    <span class="navbar-brande">Customer</span>
                <div class="ms-auto">
                    <div class="text-end a">
                           <a href="{{ route('customers.customersform') }}" class="btn btn-primary">Add+</a>
                    </div>
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
                    <h2>320</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger p-3">
                    <h5>Tickets</h5>
                    <h2>42</h2>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

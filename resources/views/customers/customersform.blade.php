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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 text-white vh-100 p-3">
            <div class="sidebar">
            <h4 class="text-center">Admin Panel</h4>
                <a href="{{ route('users.index') }}"><i class="fas fa-tachometer-alt"></i> User</a>
                <a href="{{ route('employees.index')}}"><i class="fas fa-users"></i> Employee</a>
                <a href="{{ route('customers.index')}}"><i class="fas fa-chart-bar"></i> Customer</a>
                <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
        <div class="col-md-9 p-4">
            <h4>Customers Information</h4>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name">
                    </div>
                    <div class="col-md-6">
                        <label for="mobile_number" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number">
                    </div>
                </div>
                <div class="form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="is_shop" name="is_shop">
                    <label for="is_shop" class="form-check-label">Is Shop</label>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand">
                    </div>
                    <div class="col-md-4">
                        <label for="model" class="form-label">Model</label>
                         <input type="text" class="form-control" id="model" name="model">
                    </div>  
                    <div class="col-md-4">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="problem" class="form-label">Problem</label>
                        <textarea class="form-control" id="problem" name="problem" rows="3"></textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="cost" class="form-label">Cost</label>
                        <input type="number" class="form-control" id="cost" name="cost">
                    </div>
                    <div class="col-md-3">
                        <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                    </div>
                </div>
                <div class="mt-3">
                     <label for="conclusion" class="form-label">Conclusion</label>
                    <textarea class="form-control" id="conclusion" name="conclusion" rows="3"></textarea>
                </div>
                      <button class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

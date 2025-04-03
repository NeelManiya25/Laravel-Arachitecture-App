<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form id="registrationForm" method="POST" action="{{ route('users.store') }}">
                        @csrf
                            <div class="mb-3">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name">
                            </div>
                            <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                        <select class="form-select" id="role" name="role">
                                                <option value="">Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                                <option value="customer">Customer</option>
                                        </select>
                            </div>

                            <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                 <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                <div class="text-danger mt-1" id="passwordError" style="display:none;">Passwords do not match</div>
                            </div>
                              <button type="submit" class="btn btn-primary w-100" name="submit" value="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

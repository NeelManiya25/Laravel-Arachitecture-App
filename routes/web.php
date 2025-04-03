    <?php
    use App\Http\Controllers\CustomersformController;
    use App\Http\Controllers\EmployeesformController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\RegisterUserController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\CustomerController;
    use App\Http\Controllers\EmployeeController;
    use App\Http\Controllers\UsersformController;
    use App\Http\Controllers\UseringController;
    use Illuminate\Support\Facades\Route;

    Route::get('/register', [RegisterUserController::class, 'create'])->name('register.form');
    Route::post('/register',[RegisterUserController::class,'store'])->name('register.store');


    Route::get('/login',function (){
            return view('login');
    })->name('login');

    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');



Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/usersform', [UsersformController::class, 'index'])->name('users.usersform');
Route::post('/users/usersform', [UsersformController::class, 'store'])->name('users.store');


// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/usersform',[UsersformController::class,'index'])->name('users.usersform');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/employeesform',[EmployeesformController::class,'index'])->name('employees.employeesform');


Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/customersform',[CustomersformController::class,'index'])->name('customers.customersform');



?>
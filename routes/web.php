<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', function(){
    $data=App\Models\Employee::all();
    

    return view('employees')-> with('employees', $data);
});


Route::post('/saveEmployee', [EmployeeController::class, 'store']);

Route::get('/deleteemployee/{id}', [EmployeeController::class, 'deleteemployee']);

Route::get('/updateemployee/{id}', [EmployeeController::class, 'updateemployeeview']);

Route::post('/updateemployees ', [EmployeeController::class, 'updateemployee']);

Route::get('/getAllEmployee',[EmployeeController::class, 'getAll']);
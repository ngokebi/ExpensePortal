<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('dashboard', compact('user'));
    })->name('dashboard');
});


Route::get('/logout', [ExpenseController::class, 'UserLogout'])->name('logout');

Route::get('/profile', [ExpenseController::class, 'MyProfile'])->name('profile');

Route::get('/settings', [ExpenseController::class, 'Settings'])->name('settings');

Route::post('/profile/store', [ExpenseController::class, 'ProfileUpdate'])->name('profile.store');

Route::get('/expense', [ExpenseController::class, 'Expense'])->name('expense.all');

Route::get('/expense/add', [ExpenseController::class, 'NewExpense'])->name('expense.add');

Route::post('/expense/store', [ExpenseController::class, 'AddExpense'])->name('expense.store');

Route::get('/expense/edit/{id}', [ExpenseController::class, 'EditExpense'])->name('expense.edit');

Route::post('/expense/update', [ExpenseController::class, 'UpdateExpense'])->name('expense.update');

Route::get('/expense/import_expenses', [ExpenseController::class, 'ImportExpense'])->name('expense.import');

Route::post('/expense/upload_expenses', [ExpenseController::class, 'UploadExpense'])->name('expense.upload');

<?php
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/admin/create', [HomeController::class, 'create'])->name('admin.create');
    Route::post('/admin', [HomeController::class, 'store'])->name('admin.store');
    Route::get('/admin/{id}/edit', [HomeController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}', [HomeController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}', [HomeController::class, 'destroy'])->name('admin.destroy');
        
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');          
});

require __DIR__.'/auth.php';

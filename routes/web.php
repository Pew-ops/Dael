<<<<<<< HEAD
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
=======

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
>>>>>>> 7cb5675f (basta)

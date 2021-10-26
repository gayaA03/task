<?php
use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::group(['namespace' => 'Main','middleware' => ['auth','verified']], function () {
    Route::get('/users', [App\Http\Controllers\User\IndexController::class, 'index'])->name('user.index');

});
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth','admin','verified']], function () {

    Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.index');


    Route::get('/user/{id}/status/active', [App\Http\Controllers\Admin\UserController::class, 'statusActive'])->name('user.status.active');
    Route::get('/user/{id}/status/block', [App\Http\Controllers\Admin\UserController::class, 'statusBlock'])->name('user.status.block');
    Route::get('/user/{id}/status/delete', [App\Http\Controllers\Admin\UserController::class, 'statusDelete'])->name('user.status.delete');

});

Route::group(['prefix' => 'messages', 'middleware' => ['auth','verified']], function () {
    Route::get('/', [ App\Http\Controllers\MessagesController::class, 'index'])->name('messages');
    Route::get('/sent', [ App\Http\Controllers\MessagesController::class, 'sent'])->name('messages.sent');
    Route::get('create', [ App\Http\Controllers\MessagesController::class, 'create'])->name('messages.create');
    Route::post('/', [ App\Http\Controllers\MessagesController::class, 'store'])-> name('messages.store');
    Route::get('{id}', [ App\Http\Controllers\MessagesController::class, 'show'])->name('messages.show');
    Route::put('{id}', [ App\Http\Controllers\MessagesController::class, 'update'])->name('messages.update');
});



Auth::routes(['verify' => true]);



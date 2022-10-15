<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\models\Postagen;
Route::get('/',[PostController::class, 'index'])->name('index');
Route::get('/postagens/criar', [PostController::class, 'create'])->middleware('auth')->name('create');
Route::get('/postagens/{id}', [PostController::class, 'show']);
Route::post('/postagens',[PostController::class, 'store']);


Route::get('/posts', function () {
    return view('posts');
});

Route::get('/tst', function () {

    return view('teste1');
});

Route::get('/userpanel', function () {
    if(Auth::check()){
        $posts = Postagen::all();
        $postController = new PostController;
        return view('dashboard',['posts' => $posts, 'postController' => $postController]);
    }else{
        return redirect('/login');
    }
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

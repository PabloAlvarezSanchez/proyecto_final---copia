<?php
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/chat', function(){
    return view('chat');
});
Route::post('/enviar-mensaje', function(Request $request){
                event(
                    new Message(
                        $request->input('username'),
                        $request->input('message')
                    )
                );
                return["success"=>true];
});


Route::get('/contact', function(){
    return view('contact');
});

Route::get('/category', function(){
    return view('category');
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/posts/edit/{post}',  [PostController::class, 'edit'])->name('posts.edit');

Route::get('/posts/private', [PostController::class, 'index2'])->name('posts.index2');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');


Route::post('contactanos',  [ContactanosController::class, 'store'])->name('contactanos.store');
Route::get('contactanos',  [ContactanosController::class, 'index'])->name('contactanos.index');
Route::resource('users', UserController::class)->names('admin.users');

    

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

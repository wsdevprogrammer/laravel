<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UsersController;
use App\Http\Controllers\TestingController;
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

function getUsers(){
return [
    ["name" => "Waseem", "age" => 25, "gender" => "Male", "email" => "user1@example.com"],
    ["name" => "Orhan", "age" => 30, "gender" => "Female", "email" => "user2@example.com"],
    ["name" => "Yahya", "age" => 22, "gender" => "Male", "email" => "user3@example.com"],
    ["name" => "Moeen", "age" => 28, "gender" => "Female", "email" => "user4@example.com"],
    ["name" => "Faheem", "age" => 35, "gender" => "Male", "email" => "user5@example.com"]
];

}
Route::get('/', function () {
    return view('pages/welcome')->with('Home','HomePage');
})->name('home');

Route::prefix('page')->group(function(){
    Route::get('/about', function(){
     
        return view('pages/about');
    })->name('about');
    
    
    Route::get('/services', function(){
        return view('pages/services');
    })->name('services');
    
    Route::get('/contact-us', function(){
        return view('pages/contact');
    })->name('contact');
    
    Route::get('/posts/first-post', function(){
        return view('pages/first-post');
    })->name('first-post');
    
});

Route::get('/users',function(){
    $usersArray = getUsers();
    return view('pages.users')->with('users',$usersArray);
})->name('users');

Route::get('/user-detail/{id}',function($id){
    $users = getUsers();
    abort_if(!isset($users[$id]),404);
    $user = $users[$id];
    return view('pages.user-detail',['id' => $user]);
})->name('user-detail');

// practicing controllers


Route::controller(UsersController::class)->group(function(){
    Route::get('/check-users/{id}','showUser')->name('check-users');
    Route::get('/home','showHome')->name('home');
    
});

Route::get('/testing',TestingController::Class);

Route::fallback(function(){
    return view('pages/404');
});


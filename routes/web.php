<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get("/",[UserController::class,'displayUsers']);

// Route::get("/validUsers",[UserController::class,'displayValidUsers'])->name('getAllUsers');

// Route::get("/user/{id}",[UserController::class,'searchUser']);

// Route::controller(UserController::class)->group(function(){
//     Route::get("/",'displayUsers');
//     Route::get("/validUsers",'displayValidUsers')->name('getAllUsers');
//     Route::get("/user/{id}",'searchUser');
// });

// Route::get('/student/allStudents',[StudentController::class,'showAllStudents']);
// Route::get('/student/newStudent',[StudentController::class,'addStudent']);
// Route::get('/student/{id}',[StudentController::class,'showStudent']);




Route::controller(StudentController::class)->group(function(){
    Route::get("/",'showAllStudents')->name('home');
    Route::post("/student/newStudent",'addStudent')->name('addNewStudent');
    Route::put("/student/updateStudent/{id}",'updateStudent');
    Route::get("/student/deleteStudent/{id}",'deleteStudent');
    Route::get('/student/update/{id}',"updatePage");
    Route::get("/student/{id}",'showStudent');
});



// Route::get('/thisIsAboutRoute',function(){
//     return view('about');
// })->name('about');



// Route::view('/thisIsAboutRoute','about');

// Route::get("/tempPage/{id?}",function(string $id=null){
//     return "<h1>Id:".$id."</h1>";
//     // return view('temp');
// });

// Route::redirect('/thisIsAboutRoute','/tempPage');


//If any wrong route
Route::fallback(function(){
    return "<h1>Page not found 404 );</h1>";
});

// Route::post('/saveUser',function(){
//     $userName=$_POST['userName'];
//     $address=$_POST['address'];
//     $mobile=$_POST['mobile'];
//     $query='
//         Insert into users(userName,address,mobile)
//         Values($userName,$address,$mobile)
//     ';
// });


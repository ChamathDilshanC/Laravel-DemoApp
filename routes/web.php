<?php

use App\Http\Controllers\WelcomeController;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/home', function () {
    return view('home' , ['name' => 'Chamath']);
});

Route::get('/about', function () {
    return view('about' , ['name' => 'Chamath']);
});

Route::get('/hello', function () {
    return view('greeting' , data: ['name' => 'Chamath']);
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/data', function () {
    // // 1. using raw sql query
    // $data_sql = DB::select('select * from users');
    // dd($data_sql);

    // // 2. using query builder
    // $data_query_builder = DB::table('users')->get();
    // dd($data_query_builder);

    // 3. using Eloquent
    $data = Student::select('name')->get();
    //dd($data);

    $Student = new Student();
    $Student->name = 'Amandi';
    $Student->email = 'Amandi@gmail.com';
    $Student->save();

});

Route::get('/fetch', function () {
    $student = Student::where('email','=','chamath@gmail.com')->first();
    $student-> status = 'active';
    $student->save();

    dd($student);
});

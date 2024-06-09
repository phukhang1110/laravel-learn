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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/calculator', function () {
//     $a=10;
//     $b=20;
    
//     $sum=$a+$b;
//     echo"sum  of $a and of $b is $sum";
// });

//route group with prefix
// Route::prefix('admin')->group(function() {
//     Route::get("users", function () {
//         return 'user admin';
//     });

//     Route::get('products', function () {
//         return 'admin product';
//     });
// });

// //tao 2 view 1 cai la trang chu
// Route::prefix('home')->group(function() {
    

// }); 

//view home
Route::get("/", function () {
    return view('/home/home');
});

//view about
Route::get('about/about1', function () {
    return view ("about/about1");
});

//view about2
Route::get('about/about2', function () {
    return view ('about/about2');
});

//route name
Route::get("/routname", function () {
    return "bai viet test route name ";
})->name('home');

// //route parameter
Route::prefix('/about')->group(function() {
    Route::get("about1/{id}", function ($id) {
        return view ("/about/about1/baiviet$id");
        
    });

    Route::get("about2/{id}", function ($id) {
        return view ("/about/about2/congviec$id");
        
    });

});

//route name co parameter
Route::get("parameters/{id}", function ($id) {
    return view ("home/parameter/parameter$id");
})->name("parameter");

//route name co parameter tra ve bien
Route::get("name/{id}/parameter/{paras}", function ($id,$paras) {
    return "Name: $id - parameter $paras";
})->name("name_parameter");





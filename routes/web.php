<?php


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

use Illuminate\Support\Facades\Route;

// Route::view('/index', 'website.index');

Route::prefix('news/')->group(function(){
    Route::view('parent', 'news.parent')->name('news.parent');
    Route::view('index', 'news.index');
    Route::view('home', 'news.home')->name('news.home');

    Route::view('all', 'news.all-news')->name('news.all');
    Route::view('detailes', 'news.newsdetailes');
    Route::view('contact', 'news.contact')->name('news.contact');
});

Route::prefix('cms/admin/')->group(function(){
Route::view('dashboard', 'cms.temp')->name('cms.dash');
Route::view('index', 'cms.index');

});
Route::fallback(function(){
echo "Please, Try Again";
});





// Route::get('/welcom', function () {
//     return view('welcome');
// });

// Route::get('welcom' , function(){
//     echo "Welcom to laravel";
// });

// Route::view('test' , 'news.welcome');

// Route::get('users/{id}/{name}' , function($id , $name){
//     echo "User Id is: " .$id. " Your name is: " .$name;
// });
// Route::get('admins/{id}/{name?}/{year?}' , function($id , $name="No Value" , $year="2020"){
//     echo "Admin Id is: " .$id. " Your name is: " .$name
//     ." Year is: ".$year;
// });
// Route::get('costomers/{id?}/{name}' , function($id=10 , $name){
//     echo "Admin Id is: " .$id. " Your name is: " .$name
//     ;
// });

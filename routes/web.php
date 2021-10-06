<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/services', function () {
//     return " <h1 style='color:red'> any value </h1>";
// });


//  Route::get('/services', function () {
//     return view('services');
// });

     // $data['name1']=$name;
     // return view('services')->with($data);
// });

Route::get('/services/{name}', 'ServicesController@index');
Route::get('/products', 'ProductController@show');
Route::get('/products/{id}', 'ProductController@showProducts');
Route::view('view1', 'myview');
Route::view('view6', 'app');
Route::get('/index1', 'PagesController@index');
Route::get('/app1', 'PagesController@about');
Route::get('/app2', 'PagesController@servicesL');
Route::resource('posts', 'PostsController');
Route::view('addProduct', 'addproduct');
Route::get('showProducts', 'ProductController@ShowProduct');
Route::POST('createproduct', 'ProductController@create');
Route::get('/indexx', function () {
    return view('index');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@hello')->name('hello');

//Tweets
Route::get('/timeline', 'TweetsController@timeline');
Route::post('/tweet/create', 'TweetsController@createTweet');
Route::get('/tweet/deatil/{tweet_id}', 'TweetsController@displayTweetdetails');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('/languageDemo', 'HomeController@languageDemo');

// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
// Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/send-mail', function(){
    $details=[
'title'=>'Mail from surfside Media',
'body'=>'Tis is from testing email using smtp'
    ];
    \Mail::to('aminajaa1996@gmail.com')->send(new \App\Mail\TestMail($details));
    echo "Email has been sent";
});
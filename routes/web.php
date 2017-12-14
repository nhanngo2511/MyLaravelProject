 <?php

use App\Post;
use App\User;
use App\Role;
use App\Country;

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


// Route::get('/onetomany/user/{id}/posts', function($id){

// 	$user = User::find($id);

// 	foreach ($user -> Posts as $post) {
// 		echo $post->title. " và";
// 	}
// });

// Route::get('/onetoone/post/{id}/user', function($id){

// 	return Post::find($id)->User;	

// });

// Route::get('/manytomany/user/{id}/roles', function($id) {
//     return User::find($id)->Roles;
// });

// // Accessing intermediate table / pivot

// Route::get('/user/{id}/pivot', function($id){
// 	return Role::find($id)->Users; 

// });

// Route::get('/country/{id}/posts', function($id){
// 	$country = Country::find($id);

// 	foreach ($country->Posts as $post) {
// 		return $post->title;
// 	}
// });



Route::Get('posts','PostsController@index')->name('posts.index');

Route::Get('posts/{id}','PostsController@show')->name('posts.show');

Route::Get('posts/createqq','PostsController@createqq')->name('posts.create');
Route::Post('posts','PostsController@store')->name('posts.store');

Route::Get('posts/{id}/edit','PostsController@edit')->name('posts.edit');
Route::Post('posts/{post}','PostsController@update')->name('posts.update');

Route::Get('posts/{id}/delete','PostsController@destroy')->name('posts.destroy');



// Route::resource('posts', 'PostsController');



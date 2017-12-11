 <?php

use App\Post;
use App\User;
use App\Role;

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





Route::resource('posts', 'PostsController');



Route::get('/onetomany/user/{id}/posts', function($id){

	$user = User::find($id);

	foreach ($user -> Posts as $post) {
		echo $post->title. " và";
	}
});

Route::get('/onetoone/post/{id}/user', function($id){

	return Post::find($id)->User;	

});

Route::get('/manytomany/user/{id}/roles', function($id) {
    return User::find($id)->Roles;
});

// Accessing intermediate table / pivot

Route::get('/user/{id}/pivot', function($id){
	return Role::find($id)->Users; 

});





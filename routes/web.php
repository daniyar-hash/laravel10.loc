<?php

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Attribute\Cache as AttributeCache;

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

Route::get('/', function () {

    // echo "Hello, Dan";  
 //   dump("hello world!!!");
    //dd("hello world!!!");
    //dump(config("database.connections.mysql"));
    // dump(config("custom.custom_test"));

    /**  @var \Illuminate\Cache\CacheManager $cache  */

    // $cache = app()->make("cache");  // получение при помощи ServiceContainer
    // $cache->put('test', 555);
    // $cache = app('cache'); 
    // $cache = cache(); //получение при помощи Helpers
        
    
  //  dd($cache->get('test', 'default')); 


//   dd(Cache::get('tests', 444)); //получение при помощи Facade
  //  $cache = App::make('cache');
  //  dd($cache->get('test'));

    return view('welcome');
});


// Route::get('/posts', function(){
//    return '<h1>Post Page</h1>';
// });

Route::get('/', function(){

      return view('test.main', ['title'=>'main page', 'desc'=>'description']);
});

//Route::view('/', 'test.main', ['title'=>'Main page', 'desc'=>'description ...']);


//  Route::get('/test', function(){


//  return view('test');


// });

/// Route::get('/posts/{id?}', function($id = 1){

//       return "Posts ID: $id";
// });

// Route::get('/posts/{id?}/comments/{comment?}', function($id = 1, $comment_id = 2){

//       return "Post ID: $id and Comments: $comment_id";
// });

// Route::get('/posts/{id}', function($id){

//       return "Posts ID: $id";

// })->where(['id'=>'[0-9]+']);

Route::get('/posts', function(){
     return "Posts Page";
});

Route::get('/posts/{id?}', function($id){
   return "Posts ID: {$id}";
})->where(['id'=>'[0-9]+']);

Route::get('/posts/contact', function(){

         return "posts contact";
});

// Route::get('/posts/{slug}', function($slug){
//    return "Posts slug: $slug";
// });

Route::get('/search/{search}', function($findW){

return "We found word : $findW";
})->where(['search'=>'.*']);

Route::post('posts', function(){
   return "Store Post!!!";
})->withoutMiddleware(VerifyCsrfToken::class);

Route::match(['get', 'post'], '/diff-method', function(){
      return "Hello from get|post method";
})->withoutMiddleware(VerifyCsrfToken::class);

Route::any('/diff-method', function(){

   return "Hello from ANY methods";


})->withoutMiddleware(VerifyCsrfToken::class);

Route::redirect('/here', 'diff-method', 301);
<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {

//     // echo "Hello, Dan";  
//  //   dump("hello world!!!");
//     //dd("hello world!!!");
//     //dump(config("database.connections.mysql"));
//     // dump(config("custom.custom_test"));

//     /**  @var \Illuminate\Cache\CacheManager $cache  */

//     // $cache = app()->make("cache");  // получение при помощи ServiceContainer
//     // $cache->put('test', 555);
//     // $cache = app('cache'); 
//     // $cache = cache(); //получение при помощи Helpers
        
    
//   //  dd($cache->get('test', 'default')); 


// //   dd(Cache::get('tests', 444)); //получение при помощи Facade
//   //  $cache = App::make('cache');
//   //  dd($cache->get('test'));

//     return view('welcome');
// });


// Route::get('/posts', function(){
//    return '<h1>Post Page</h1>';
// });

// Route::get('/', function(){

//       return view('test.main', ['title'=>'main page', 'desc'=>'description']);
// });

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


//-------------------------routing part1-------//

// Route::get('/posts', function(){
//      return "Posts Page";
// });

// Route::get('/posts/{id?}', function($id = 1){
//    return "Posts ID: {$id}";
// })->where(['id'=>'[0-9]+']);

// Route::get('/posts/contact', function(){

//          return "posts contact";
// });

// Route::get('/posts/{slug}', function($slug){
//    return "Posts slug: $slug";
// });

// Route::get('/search/{search}', function($findW){

//    return "We found word : $findW";
// })->where(['search'=>'.*']);

// Route::post('posts', function(){
//    return "Store Post!!!";
// })->withoutMiddleware(VerifyCsrfToken::class);

// Route::match(['get', 'post'], '/diff-method', function(){
//       return "Hello from get|post method";
// })->withoutMiddleware(VerifyCsrfToken::class);

// Route::any('/diff-method', function(){

//    return "Hello from ANY methods";


// })->withoutMiddleware(VerifyCsrfToken::class);

// Route::redirect('/here', 'diff-method', 301);


//-------------------------routing part2-------//

//Route::get('/', [MainController::class, 'index']);

// Route::prefix('admin')->group(function(){


//       Route::get('/', function(){
//          return 'Welcome Admin page!';
//       });

//       Route::get('/posts', function(){
//          return 'Admin posts page';
//       });

//       Route::get('/posts/{id}', function($id){
//             return 'Admin post ID:'. $id;
//       })->where(['id'=>'[0-9]+']);



// });

// Route::fallback(function(){
   

//     abort(404,'Page not found?!');
//   // return response()->json(['answer'=>'Page not found'], 404);
//  //  return response('Page not found', 404);
//    //return 'Error 404 page not found!!!';
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/test', [HomeController::class, 'test']);
// Route::get('/single', TestController::class);


// Route::prefix('admin')->name('admin.')->group(function(){


// Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
// Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
// Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store')->withoutMiddleware(VerifyCsrfToken::class);
// Route::get('/admin/products/{product_id}', [ProductController::class, 'show'])->name('admin.products.show')->where(['product_id'=>'[0-9]+']);
// Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
// Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update')->withoutMiddleware(VerifyCsrfToken::class);
// Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->withoutMiddleware(VerifyCsrfToken::class);


// });

// Route::resource('/users', UserController::class);

//**************lesson Views*************/
Route::get('/',[HomeController::class, 'index'])->name('greeting.index');
Route::get('/test',[HomeController::class, 'test'])->name('greeting.test');
Route::get('/contact',[HomeController::class, 'contact'])->name('greeting.contact');

Route::post('/store', [HomeController::class, 'store'])->withoutMiddleware(VerifyCsrfToken::class);

Route::post('/update', [HomeController::class, 'update'])->withoutMiddleware(VerifyCsrfToken::class);

Route::get('/category', [HomeController::class, 'store']);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');




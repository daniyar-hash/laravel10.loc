<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Language;
use App\Models\Post;
use Exception;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View;
use Illuminate\Support\Js;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HomeController extends Controller
{

        public function index()
        {


        // $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);
        // // dump($users);
        // $users = [];
        // $data = [
        //   'name' => 'Gena Fisher',
        //   'id' =>1
        // ];

        // $users = DB::select('select id, name, email from users where id > :id and name != :name', $data);
        //  dump($users);

        //  $count = DB::select('select count(*) as cnt from users');
          //   $cnt = DB::scalar('select count(*) from users');

          //  dump($cnt);
          // dump(DB::insert('insert into users (name, email, password) values ( ?, ?, ?)', ['d\'Arc', 'darc@mail.com', 666]));

          // dump(DB::update('update users set avatar = ? where id = ?', ['test',2]));
          // dump(DB::update('update users set created_at = NOW(), updated_at = ? ', [date('Y-m-d H:i:s')]));
          // dump(DB::delete('delete from users where id = ?', [2]));


          // try{

          // DB::transaction(function(){
          //     DB::insert('insert into users (name, email, password) values( ?, ?, ?)', ['Grimm', 'grimm@mail.com', 123]);
          //     DB::insert('insert into users (name, email, password) values( ?, ?, ?)', ['Grimm', 'grimm@mail.com', 123]);
          // });
              
            
          // }
          // catch(Exception $e){
          //         dump($e->getMessage());
          // }


          // $users = DB::table('users')->get(['id','name', 'email']);
           //$user = DB::table('users')->where('id', '<', 5)->first();
          // $user = DB::table('users')->where('id', '<', 5)->get();
          // $user = DB::table('users')->where('id', '<', 5)->value('email');

            //$users = DB::table('users')->where('id', '<', 5)->orderBy('name', 'desc')->get();
            // $users = DB::table('users')->where('id', '<', 5)->orderByDesc('email')->get();

            // $users2 = DB::table('users')->find(4, ['name', 'password']);\
            // $users2 = DB::table('users')->pluck('password', 'email');

          //  dump($users2);

            // $city = DB::table('city')->get();
            // dump($city);
            // DB::table('city')->orderBy('ID')->chunk(100, function(Collection $cities){
                  
            //           foreach($cities as $city){

            //               if($city->Name =='Leganés'){
            //                 return false;
            //               }
            //           }

            // });

            // $cities = DB::table('city')->select(['ID', 'Population', 'Name'])->limit(10)->get();
            // dump($cities);
            // $cities = DB::table('city')
            // ->where('id', '>', 10)
            // ->where('id', '<', 30)
            // ->get();

            // $cities = DB::table('city')
            // ->where([['ID', '>', 5],['ID', '<', 10]])
            // ->orWhere('ID', '<', 20)
            // ->get();

            // $cities = DB::table('city')
            // ->whereRaw('(ID between ? and ? and Name != ?) or (ID = ?) ' ,[2,12, 'Haag', 8])
            // ->get();

            // $count = DB::table('city')->count();
            //  $max_pop = DB::table('city')->max('Population');
          //   // $min_pop = DB::table('city')->min('Population');
          //   dump($max_pop);

            // $cities = DB::table('city')
            // ->orderBy('Population', 'desc')
            // ->first('Population');
            // dump($cities->Population);
            // dump(DB::table('city')->find('1024'));

          //$cities = DB::table('city')->select('id', 'Name', 'CountryCode' )->whereIn('ID', [2,4,6])->get();
          //  $cities = DB::table('city')->where('Name', 'Like', 'amb%')->get();
        //  $users = DB::table('users')->whereDate('created_at', '>', '2026-04-22')->get();

          // $cities = DB::table('city')
          // ->select('city.ID', 'city.Name', 'city.CountryCode', 'country.Name as c_n')
          // ->leftJoin('country', 'city.CountryCode', '=', 'country.Code')
          // ->limit(10)
          // ->offset(10)
          // ->get();
          // dump($cities);


 // ONLY_FULL_GROUP_BY
          // dump(DB::select('select @@sql_mode'));
          //DB::statement("set sql_mode = 'STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION'");
          // config()->set('database.connections.mysql.strict', false);
          // DB::reconnect();
          // // dump(DB::select('select @@sql_mode'));
          //  $cities = DB::table('city')
          // ->selectRaw('sum(Population) as s_p, CountryCode, Name')
          // ->groupBy('CountryCode')
          // ->having('s_p', '>', 50000000)
          // ->get();

         
     
          // config()->set('database.connections.mysql.strict', true);
          // DB::reconnect();
      
          // dump($cities);

          // dump(DB::table('users')->insertOrIgnore([
          //   [
          //   'Name' =>'Igorr 2',
          //   'Password' =>122,
          //   'email' =>'igeor2@mail.com'
          //   ],
          //      [
          //   'Name' =>'Elena',
          //   'Password' =>121,
          //   'email' =>'el@mail.com'
          //   ]
                   
          
          // ]));

          // dump(DB::table('users')->insertGetId(
          //   [ 'email' =>'test@mail.com', 'Name' =>'west','Password' =>3334]
          //   ));

       //   dump(DB::table('users')->where('id', '=', 6)->update(['Name' =>'Orio', 'email' =>'orio@mail.com']));
        //  dump(DB::table('users')->updateOrInsert(['email' =>'oriro@mail.com'],['Name' =>'Qween','Password' =>432]));

          // dump(DB::table('users')->where('id', '=', 6)->delete());

          // $posts = Post::all()->toArray();
          // $post = Post::query()->find(2, ['id','title', 'content'])->toArray();
         //   $post = Post::query()->first()->toArray();
          // dump($posts);
          // dump($post);

        //  $countries = Country::all(['Code', 'Name', 'Population'])->toArray();

            // $countries = Country::query()
            // ->where('Population', '>', 120_000_000)
            // ->orderBy('Population', 'desc')
            // ->limit(4)
            // ->get(['Code', 'Name', 'Population']);

        //   $country = Country::query()->first();
          //$country = Country::query()->find('AFG');
               
        //  dump($country->toArray());
        //   dump($country);
        //  dump($countries->Name);

//         $lang = Language::query()->first();
//         dump($lang->toArray());
//         dump($lang->id);
//  dump($lang->title);
         // return $countries->toJson();
       //  return response()->json($countries);

       //-----------------------------------


      //  dump('Count:' . Country::query()->count());
      //  dump('Count:' . Country::query()->where('Population', '>', 1_100_100)->count());
      //  dump('Max:' . Country::query()->max('Population'));
      //  dump('Min:' . Country::query()->min('Population')); 
      //  dump('Avg:' . Country::query()->avg('Population'));

      //  $country = Country::query()->find('AFG2');
      //  if(!$country){
      //   abort(404);
      //  }


      //  $country = Country::query()->findOrFail('AFG2');
      //  dump($country);


      // $post = new Post();
      // $post->title = 'Post 8';
      // $post->slug = 'Post 8 slug';
      // $post->content = 'Post 8 content';
      // $post->category_id = rand(1,3);
      // dump($post->save());
      // dump($post->id);


    //   $data = [
    //     'title'=>'Post 11',
    //     'slug' =>'post-191',
    //     'content' =>'Post 11 content',
    //     'status' =>0,
    //     'category_id' => rand(1,3)
    //   ];

    //  dump(Post::query()->create($data));

    // $post = Post::query()->find(18);
    // dump($post->delete());
    //  dump(Post::destroy(10,12,16));
//------------------------------------------------

// $post1 = Post::query()->get();  //  ORM
// dump($post1);

// $post2 = DB::table('posts')->get(); // Query builder
// dump($post2);

// $post3 = DB::select('select * from posts'); // native sql
// dump($post3);


// $data = [1,2,3,4,5];
// dump(collect($data));

// $products = [
//   ['title' => 'product 1', 'price' =>10],
//   ['title' => 'product 2', 'price' =>15],
//   ['title' => 'product 3', 'price' =>10],
//   ['title' => 'product 4', 'price' =>12],
//   ['title' => 'product 5', 'price' =>20],
  
// ];

//  $products = collect($products);
// dump($products->toArray());

//dump($products->chunk(3)->toArray());

// dump($products->avg('price'));
// dump($products->sum('price'));
// dump($products->min('price'));
// dump($products->max('price'));
// dump($products->count());

// $filtered = $products->filter(function ($value, $key) {

//      return $value['price'] > 10;
// });

// dump($filtered);

//$countries = Country::query()->limit(10)->get(['Name', 'Continent', 'Population']);
// dump($countries->toArray());

// $filtered = $countries->filter(function($value, $key){
//         return $value['Population'] > 1_000_000;
// });

// dump($filtered->toArray());
// dump($countries->max('Population'));
// dump($countries->min('Population'));
// dump(
//   $countries->countBy(function(Country $country){
//     return $country->Continent;
//   }));

//--------------------прямая связь-----------

// $category = Category::query()->find(2);
// dump($category->toArray());

// $post = $category->post; //обращаемся к анонимноу свойству getPost
//  dump($post->toArray());
// // $post = Post::query()->where('category_id', '=', 4)->first();
//  dump($post->toArray());

//-------обратная связь
// $post = Post::query()->find(3);
// dump($post->toArray());

// $category = $post->category;
// dump($category->title);
//------one-to-many------------

// $category = Category::query()->find(1);
// dump($category);

// $posts = $category->posts;
// dump($posts);

// $post = Post::query()->find(1);
// dump($post->toArray());
// $category = $post->category->toArray();
// dump($category);

// $categories = Category::all();
// $categories = Category::with('posts')->get();
// $categories = Category::query()->withCount('posts')->get();
// dump($categories);

// foreach($categories as $category){

//   echo  "$category->title  ($category->posts_count)" .'<br>';

// }
// foreach($categories as $category){

//   echo $category->title . '<br>';

//   foreach($category->posts as $post){
//     echo $post->title . '<br>';
//   }

//   echo '<hr>';


// }

/**
 * @var \App\Models\Category $category
 

 */
$category = Category::query()->find(1);
//  dump($category->posts()->where('id', '<>', 4)->orderBy('id', 'desc')->limit(1)->get()->toArray());
//dump($category->posts->where('id', '<>', 4)->toArray());
$category->posts();







          return view('greeting.index');


          // return view('greeting.index', ['title'=>'Page Home','desc'=>'test desc', 'test'=>'test value']);

            // if(!FacadesView::exists('greeting.index')){
            //     abort(404);
            // }

            // return FacadesView::first(['greeting.custom', 'greeting.index'],[
            //         'title'=>'Page Home',
            //         'name'=>'Oleg',
            //         'age'=>42
            //     ]);

        //   return FacadesView::make('greeting.index', [
        //     'title'=>'Page Home',
        //     'name'=>'Oleg',
        //     'age'=>42
        //   ]);

        }

        public function store(Request $request)
        {
            // var_dump($request->all());
            // var_dump($request->content);

          // $data = [
          //         ['title' => 'Category 1', 'slug' =>'Category-1'],
          //         ['title' => 'Category 2', 'slug' =>'Category-2'],
          //         ['title' => 'Category 3', 'slug' =>'Category-3'],
          //         ['title' => 'Category 4', 'slug' =>'Category-4'],
          //         ['title' => 'Category 5', 'slug' =>'Category-5']
                
          //       ];

          //       foreach($data as $val){
          //             Category::query()->create($val);
          //       };

      //      Category::query()->create($request->all());
                       
                        return 'ok';

            // return $request->all();
           
        }


        public function update(Request $request)
        {

          // $post = Post::query()->find($request->id);
          // $post->title = $request->title;
          // $post->content = $request->content;
          // $post->category_id = $request->category_id;
          // $post->save();


          // $post = Post::query()->findOrFail($request->id);
          // $post->update($request->all());

          Post::query()->where('id', '=', $request->id)
          ->update($request->all());





          return 'Ok';



        }

        public function test():View
        {

        $title="Page Test";
        $name = "Oleg";
        $age = 42;

        return view('greeting.test', compact('title','name','age'));
                
       // return view('greeting.test', ['title'=>'Page Test','name'=>'Oleg','age'=>42]);
           

        }

        public function contact():View{

        //  $title = '<i>Page Contact</i>';
         $title = 'Page Contact';
         $data = [
            'name'=>'Dima',
            'age'=>34
         ];

         return view('greeting.contact',['title'=>$title, 'data'=>$data]);


        }

}
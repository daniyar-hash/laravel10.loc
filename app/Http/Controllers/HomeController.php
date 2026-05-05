<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Language;
use App\Models\Post;
use App\Models\Tag;
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




          // Post::query()->create([
          //   'title' => 'Post 6',
          //   'slug' => 'post-6',
          //   'content' => 'post 6 content',
          //   'category_id' => 3
          // ]);

          //$category = Category::query()->find(2);
          // $category->posts()->save(new Post([
          //   'title' => 'Post 8',
          //   'slug' => 'post-8',
          //   'content' => 'post 8 content',
           
          // ]));

          // $category = Category::query()->find(3);
          // $category->posts()->saveMany([new Post([
          //      'title' => 'Post 9',
          //      'slug' => 'post-9',
          //      'content' => 'post 9 content',
          // ]),
          // new Post([
          //      'title' => 'Post 10',
          //      'slug' => 'post-10',
          //      'content' => 'post 10 content',
          // ])
          
          
          // ]);

          // $category = Category::query()->find(2);
          // $category->posts()->createMany([
          //   [
          //      'title' => 'Post 12',
          //      'slug' => 'post-12',
          //      'content' => 'post 12 content',],

          //             [
          //      'title' => 'Post 13',
          //      'slug' => 'post-13',
          //      'content' => 'post 13 content',],
               
               
          //      ]);

          // $category = Category::query()->find(4);
          // dump($category->posts);

          // $category->posts()->save(new Post([
          //           'title' => 'Post 16',
          //           'slug' => 'post-16',
          //           'content' => 'post 16 content',
                  
          //         ]));

          //         $category->refresh();

          // dump($category->posts);

          // $category = Category::query()->find(5);
          // $post = Post::query()->find(20);

          // $post->category()->associate($category);
          // $post->save();

          // $post = Post::query()->find(22);
          // $post->category()->dissociate();
          // $post->save();


          $post = Post::query()->find(20);
       //   $post->tags()->attach(2);
          // $post->tags()->attach([1,4]);
          // $post->tags()->detach(2);
          // $post->tags()->sync([1,2,5]);
          $post->tags()->toggle([1,3,5]);  //1 2 5
       

















          return view('greeting.index');




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
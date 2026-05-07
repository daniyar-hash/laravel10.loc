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
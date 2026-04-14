<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View;
use Illuminate\Support\Js;

class HomeController extends Controller
{

        public function index():View
        {


        $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);
        // dump($users);

        return view('greeting.index', compact('users'));


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
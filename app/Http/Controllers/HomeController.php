<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View;

class HomeController extends Controller
{

        public function index():View
        {

            if(!FacadesView::exists('greeting.index')){
                abort(404);
            }

            return FacadesView::first(['greeting.custom', 'greeting.index'],[
                    'title'=>'Page Home',
                    'name'=>'Oleg',
                    'age'=>42
                ]);

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

         $title = 'Page Contact';

         return view('greeting.contact')->with(['title'=>$title])->with(['name'=>'Dan']);


        }

}
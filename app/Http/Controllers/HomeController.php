<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View;
use Illuminate\Support\Js;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

        public function index():View
        {


        // $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);
        // // dump($users);
        $users = [];
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
           $max_pop = DB::table('city')->max('Population');
            // $min_pop = DB::table('city')->min('Population');
            dump($max_pop);

            $cities = DB::table('city')
            ->orderBy('Population', 'desc')
            ->first('Population');
            dump($cities->Population);


  

         
      
      
      
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
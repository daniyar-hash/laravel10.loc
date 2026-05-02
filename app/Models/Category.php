<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{



    use HasFactory;

     protected $fillable = ['title', 'slug'];



     public function post(): HasOne
     {

            return $this->hasOne(Post::class);
            //return $this->hasOne(Post::class, 'cat_id');

     }
    
  
}

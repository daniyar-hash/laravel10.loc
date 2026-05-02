<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{



    use HasFactory;

   protected $fillable = ['title', 'slug', 'content', 'category_id', 'status'];

   protected $guarded = [];
   

   public function category(): BelongsTo
   {
            return $this->belongsTo(Category::class);

            //return $this->belongsTo(Category::class, 'category_id', 'cats_id'); getCategory, id->cats_id
   }



   public function isPublished()
   {
            return $this->status ? 'Published' : 'Not published';
   }
}

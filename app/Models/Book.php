<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'Book_Title',
        'Author_name',
        'Book_Description',
        'Book_Content',
        'Category_id',
        'available',
        'image'
    ];

        public function category()
        {
          return $this->belongsTo(Category::class, 'Category_id', 'id');
        }
}

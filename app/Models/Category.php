<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    protected $fillable = [
    'Category_Name',
    'Category_Description',
    ];

    public function books()
    {
   return $this->hasMany(Book::class, 'Category_id', 'id');
    }
}

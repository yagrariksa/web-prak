<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'name', 'description','price','img','author_id'
    ];
}

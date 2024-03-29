<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catogory extends Model
{
    use HasFactory;

    protected $guarded = [];

    function products(){
        return $this->hasMany(Product::class);
    }
    function image(){
        return $this->morphOne(Image::class,'imageable');


}
}

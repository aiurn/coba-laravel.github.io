<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    // protected $fillable = ['title', 'excerpt', 'body'];   //fillable = yang boleh diisi

    protected $guarded = ['id'];     //guarded = yang ga boleh diisi

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

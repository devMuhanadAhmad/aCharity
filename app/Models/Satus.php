<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satus extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_description',
        'ar_name',
        'en_description',
        'en_name',
        'image',
       'price',
       'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}


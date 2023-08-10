<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    use HasFactory;
    protected $fillable = [
        'ar_title',
        'en_title',
    ];
    public function subcategories()
    {
        return $this->hasMany(Satus::class,'category_id','id');
    }
}

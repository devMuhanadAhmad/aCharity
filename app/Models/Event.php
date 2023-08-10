<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_description',
        'ar_title',
        'en_description',
        'en_title',
        'image',
        'date'
    ];
      //Accessors image
      public function getImageUrlAttribute()
      {
          if (!$this->image) {
              return 'data:image/png;base64,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';
          }
          if (Str::startsWith($this->image, ['http://', 'https://'])) {
              return $this->image;
          }
          return asset('storage/' . $this->image);
      }



}

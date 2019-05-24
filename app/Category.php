<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $guarded = [];

  public static function boot()
  {
      parent::boot();

      static::creating(function($model){
          $model->slug =str_slug($model->name.str_random(10));
      });
  }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

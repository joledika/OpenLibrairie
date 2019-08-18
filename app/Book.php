<?php

namespace App;

use App\User;
use App\Ration;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $model->slug =str_slug($model->title.\str_random(20));
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function commentaries()
    {
        return $this->hasMany(Commentary::class);
    }

    public function downloaded()
    {
      return $this->hasOne(Downloaded::class);
    }
}

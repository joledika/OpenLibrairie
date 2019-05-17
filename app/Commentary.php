<?php

namespace App;

use App\Book;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

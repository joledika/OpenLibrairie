<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Downloaded extends Model
{
    protected $guarded = [];

    public function book()
    {
      return $this->belonsTo(Book::class);
    }
}

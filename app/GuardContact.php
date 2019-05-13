<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuardContact extends Model
{
    protected $fillable = ["name", "email", "subject", "message"];
}

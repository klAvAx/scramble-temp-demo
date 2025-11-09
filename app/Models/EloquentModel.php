<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EloquentModel extends Model
{
    protected $table = "someData";

    protected $fillable = [
        "someString",
        "someNumber"
    ];
}

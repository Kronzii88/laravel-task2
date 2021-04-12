<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table = "casts";
    protected $fillable = ["name", "age", "bio"];
    public $timestamps = true;
}

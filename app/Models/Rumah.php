<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Rumah extends Model
{
    protected $table = 'rumah';
    protected $primaryKey = 'rumahId';
    //public $timestamps = false;

    protected $fillable = [
        'rumahId', 'rumahKet'
    ];
}

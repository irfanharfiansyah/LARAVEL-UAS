<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    protected $table = 'populars';
    protected $fillable = ['title','content','ingredient','method', 'featured_image'];
}

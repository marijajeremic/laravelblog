<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table = 'categories';

    public function posts()
    {
        //ovako kreiramo relaciju jednna cat. ka vise postova...
        return $this->hasMany('App\Post');
    }
}

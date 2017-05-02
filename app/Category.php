<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';


    protected $fillable = [
        'title',
        'description',
    ];

    public function clients()
    {
        return $this->hasMany('App\Client','category_id');
    }
}

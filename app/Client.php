<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'clients';


    protected $fillable = [
      'first_name',
      'last_name',
      'email',
      'mobile',
      'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}

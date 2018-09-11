<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'telephone',
        'location'
    ];


    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }
}

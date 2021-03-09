<?php

namespace App\Permission\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //from here
    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

}

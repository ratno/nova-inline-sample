<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $fillable = ['contact'];

    public function users()
    {
        return $this->belongsTo(\App\User::class,"users_id");
    }

    public function category()
    {
        return $this->belongsTo(\App\ContactCategory::class,'category_id');
    }
}

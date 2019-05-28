<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];

    public function articles()
    {
        return $this->hasMany('App\Models\Article', 'admin_id');
    }

}

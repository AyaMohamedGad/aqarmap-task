<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    public $timestamps = true;
    protected $with = ['category'];
    protected $fillable = ['title', 'content', 'article_date', 'published', 'admin_id', 'category_id'];
    protected $hidden = ['published', 'admin_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }

}

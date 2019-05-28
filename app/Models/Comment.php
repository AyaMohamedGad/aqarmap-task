<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    public $timestamps = true;
    protected $fillable = ['comment', 'visitor_session_id', 'visitor_ip', 'article_id'];

    public function article()
    {
        return $this->belongsTo('App\Models\Article', 'article_id');
    }

}

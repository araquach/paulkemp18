<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPara extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }
}

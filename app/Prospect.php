<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    protected $table = 'prospects_pk';
    
    public function notes()
    {
        return $this->hasMany('App\ProspectNote')->orderBy('id', 'desc');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = array();

    public function Company(){
        return $this->belongsTo('App\Company', 'company_id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tenstar extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
}

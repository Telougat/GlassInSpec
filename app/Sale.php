<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['number', 'amount', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

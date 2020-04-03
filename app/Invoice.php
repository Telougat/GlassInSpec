<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['salaried', 'type', 'amount', 'number', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

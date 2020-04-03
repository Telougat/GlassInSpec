<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    protected $fillable = ['amount', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

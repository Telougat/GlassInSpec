<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    protected $fillable = ['first_name', 'last_name', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

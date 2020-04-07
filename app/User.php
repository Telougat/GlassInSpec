<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blacklists()
    {
        return $this->hasMany('App\Blacklist');
    }

    public function debits()
    {
        return $this->hasMany('App\Debit');
    }

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function getUserName($userId)
    {
        $user = User::find($userId);

        return array(
            'surname' => $user->last_name,
            'name' => $user->first_name
        );
    }
}

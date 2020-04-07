<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['salaried', 'type', 'amount', 'number', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User')->select(array('first_name', 'last_name'));
    }

    public function getInvoices()
    {

        $invoices = Invoice::all();
        $list = array();

        foreach ($invoices as $invoice)
        {
            $invoice->user;
            array_push($list, $invoice->makeHidden(['user_id', 'updated_at']));
        }

        return $list;

    }
}

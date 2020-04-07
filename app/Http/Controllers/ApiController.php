<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\User;
use Illuminate\Http\Request;
use App\Debit;
use Symfony\Component\Console\Input\Input;

class ApiController extends Controller
{
    private $user;
    private $invoices;

    public function __construct()
    {
        $this->user = new User();
        $this->invoices = new Invoice();
    }

    public function index(Request $request)
    {
        return response()->json($this->user->getUserName(3));
    }

    public function invoices(Request $request)
    {
        return response()->json($this->invoices->getInvoices());
    }

    public function newInvoice(Request $request)
    {
        Invoice::create($request->all());
        return response()->json($request->all());
    }
}

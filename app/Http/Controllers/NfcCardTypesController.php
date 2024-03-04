<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NfcCardTypesController extends Controller
{
    public function index()
    {
        return view('sadmin.nfcCardTypes.index');
    }

    public function NfcCardOrder()
    {
        return view('sadmin.nfcCardTypes.nfcCardOrders.index');
    }

    public function create()
    {
        return view('sadmin.nfcCardTypes.create');
    }

}


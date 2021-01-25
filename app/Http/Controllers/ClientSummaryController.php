<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input;


class ClientSummaryController extends Controller
{

    public function index()
    {
        return view('layouts.admin.client-summary.index');
    }

    public function show()
    {
        return view('layouts.admin.client-summary.show', get_defined_vars());
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function create()
    {
        return view('vendor.addVendor');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use App\Models\purchases;

class VendingMachineController extends Controller
{
    public function index()
    {
        $products = products::get();
        return $products->toArray();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // return $data;
        $products = purchases::create($data);
        return $products;
    }
}

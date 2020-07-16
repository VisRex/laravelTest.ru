<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class GetProductsController extends Controller
{
    public function index()
    {
        $products = DB::select('select * from product');
        return view('welcome',['products'=>$products]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    //
    public function index(){
        return view("Admin.ProductColor.Index");
    }
    public function newcolor(){
        
    }
}

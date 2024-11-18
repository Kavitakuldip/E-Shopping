<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class BrandController extends Controller
{
    //
    public function index(){
        $categories=Category::all();
       
       // $categories = Category::where('status','==' ,'1' )->get();
        //dd($categories);
        return view("Admin.Brand.Index",compact("categories"));
    }
    
    public function allbrands()
    {
        // this is api endpoint
        $brands = Brand::all();
        return response()->json(['brands'=>$brands]);
        // return response()->json($brands);
    }
    public function store(Request $request)
    {
       // dd($request->all());
       
        Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'status'=> $request->status == true ? '1' : '0',
            'category_id' => $request->category_id
        ]);

        return response()->json(['success'=>"Brand Saved Successfully"]);
    }
    public function fetchdata($id){
        $data = Brand::with('category')->findOrFail($id);
        // $data = Brand::findOrFail($id)->with('category')->get();
        // dd($data);
        return response()->json($data);
    }
    public function updatedata($id, Request $request)
    {
        $data = Brand::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'status' => $request->status == true ? '1' : '0',
            'category_id' => $request->category_id,
        ]);
        return response()->json(['success'=>"Brand Updated Successfully"]);

        // dd($data,$request);
    }
}

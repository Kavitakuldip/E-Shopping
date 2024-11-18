<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view("Admin.Product.Index");
    }
    public function create(){
        $images=Product::all();
        return view("Admin.Product.Create",compact("images"));
    }
    public function store(Request $request){
        if($request->hasFile('image'))
        {
            $uploadpath = 'uploads/products/';
            $i=1;
            foreach($request->file('image') as $imagefile)
            {
                $extension = $imagefile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $imagefile->move($uploadpath,$filename);
                $finalimagepathname = $uploadpath.$filename;

                Product::create([
                    'image'=> $finalimagepathname,
                   'category_id'=>"1",
                   'brand_id'=>"1",
                   "name"=> "name",
                   "slug"=> "name",
                   "small_description"=> "xxbb",
                   "description"=> "gjhgj",
                   "color_id"=> 1,
                   "quantity"=>"1",
                   
                    
                ]);
                // dd($filename);
            }
            return redirect('/productcreate')->with('primary','Product Images Added Successfully');
        }
    }
}

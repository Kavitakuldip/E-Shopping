<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use CreateUsersTable;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryFormRequest;
use illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("Admin.Categories.index",compact("categories"));
    }
    public function create(){
        return view("Admin.Categories.Create");
    }
   
    public function store(Request $request)
    {
     //dd($request);
        //$validatedData = $request->validated();

        $category = new Category;

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->slug = Str::slug($request->slug);
        $category->description = $request->description;
        $category->image = null;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->meta_keyword = $request->meta_keyword;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->other_details = $request->other_details;
        $category->status = $request->status == true ? "1" : "0";
        $category->save();

        return redirect('/Admin/Categoris/Index')->with('message','Category Created Successfully');
    }
    public function edit($slug,$id){
        //dd($slug);
        $category = Category::where('id',$id)->where('slug',$slug)->first();
       // dd($category);
        return view('Admin.Categories.Update',compact('category'));
    }
    public function Update($slug,$id ,Request $request){
        $category = Category::where('id',$id)->where('slug',$slug)->first();
        

        $category = new Category;

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->slug = Str::slug($request->slug);
        $category->description = $request->description;
        $category->image = null;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->meta_keyword = $request->meta_keyword;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->other_details = $request->other_details;
        $category->status = $request->status == true ? "1" : "0";
        $category->update();
       //dd($category);
        return redirect('/Admin/Categoris/Index')->with('message','Category Update Successfully');

    }
    
}

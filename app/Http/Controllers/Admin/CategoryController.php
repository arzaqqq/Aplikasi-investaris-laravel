<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view("pages.categories.index",compact("categories"));
    }

    public function create(){
        return view("pages.categories.create");
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => "required|unique:categories,name",
        ], [
            "name.required"=> "Nama harus di isi",
            "name.unique"=> "Nama harus unik",
        ]);

       $category = new Category();
       $category->name = $request->input("name");
       $category->slug = Str::slug($request->input("name"));
       $category->save();

       return redirect()->route("categories.index")->with("success","");
    }




    public function edit ($id){
        $category = Category::find($id);

        return view("pages.categories.edit",compact("category"));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            "name" => "required|unique:categories,name",
        ], [
            "name.required"=> "Nama harus di isi",
            "name.unique"=> "Nama harus unik",
        ]);

       $category = Category::find($id);
       $category->name = $request->input("name");
       $category->slug = Str::slug($request->input("name"));
       $category->save();

       return redirect()->route("categories.index")->with("success","");
    }

    public function delete($id){
          Category::where("id",$id)->delete();

          return redirect("/categories")->with("success","kategori berhasil dihapus");

    }


}

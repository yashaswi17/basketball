<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;


class BlogController extends Controller
{
    public function index()
    {
        $data = Category::all();

        return view('backend.admin.blog.create',compact('data'));
    }
    public function store(Request $request)
    {
        // dd($request);
        //   validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image'=>'required',
        ]);


// dd($request);
$data = new Blog();
$data->title = $request->title;
$data->description = $request->description;
$data->category_id = $request->category_id;



if($request->hasFile('image')){
$file = $request->image;
$extension =$file->getClientOriginalExtension();
$filename = time().'.'.$extension;
$file->move('uploads',$filename);
$data->image=$filename;

}

$data->save();
return redirect()->route('admin.blog.table')->with('message' , "Data Updated Successfully !");


}
public function table()
{
    $data = Blog::paginate(3);
    return view('backend.admin.blog.table',compact('data'));
}
public function edit($id)
{
    $data = blog::with('category')->find($id);
    $categories = Category::all();
    // dd($data);
    return view('backend.admin.blog.edit',compact('data','categories'));
}
public function update(Request $request,$id){

    //   validation
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image'=>'nullable',
    ]);



$data = Blog::find($id);
$data->title = $request->title;
$data->description = $request->description;

if($request->hasFile('image')){
$file = $request->image;
$extension =$file->getClientOriginalExtension();
$filename = time().'.'.$extension;
$file->move('uploads',$filename);
$data->image=$filename;

}

// dd($data);
$data->save();
return redirect()->route('admin.blog.table')->with('message' , "Data Updated Successfully !");
}
public function delete($id)
{
    $data = Blog::find($id);
    $data->delete();
    return redirect()->route('admin.blog.table')->with('message' , "Data Deleted Successfully !");

}


    }



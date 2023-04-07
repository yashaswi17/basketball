<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function create()
    {
        return view('backend.admin.event.create');
    }
    public function store(Request $request)
    {
        //   validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'date' => 'required',
            'place' => 'required',

        ]);


        $lead = new Event();
        $lead->name = $request->name;
        $lead->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->image;
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $lead->image=$filename;

            }
        $lead->date = $request->date;
        $lead->place = $request->place;
        $lead->Save();
        return redirect()->route('admin.event.table')->with('message', "Data Added Successfully !");

    }
    public function table()
    {
        $leads = Event::paginate(5);
        return view('backend.admin.event.index', compact('leads'));
    }
    public function edit($id)
    {
        $leads = Event::find($id);
        // dd($leads);
        return view('backend.admin.event.edit', compact('leads'));
    }
    public function update(Request $request,$id)
    {
        //   validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'image' => 'required',
            'date' => 'required',
            'place' => 'required',

        ]);


        $lead =Event::find($id);
        $lead->name = $request->name;
        $lead->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->image;
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $lead->image=$filename;

            }
        $lead->date = $request->date;
        $lead->place = $request->place;
        $lead->Save();
        return redirect()->route('admin.event.table')->with('message', "Data updated Successfully !");

    }

    public function delete($id)
    {
        $leads=Event::find($id);
        $leads->delete();
        return redirect()->route('admin.event.table')->with('message', "Data deleted Successfully !");

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function create()
    {
        return view('backend.admin.meeting.create');
    }
    public function store(Request $request)
    {
        //   validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'place' => 'required',

        ]);


        $lead = new Meeting();
        $lead->title = $request->title;
        $lead->description = $request->description;
        $lead->date = $request->date;
        $lead->place = $request->place;
        $lead->Save();
        return redirect()->route('admin.meeting.table')->with('message', "Data Added Successfully !");

    }
    public function table()
    {
        $leads = Meeting::paginate(5);
        return view('backend.admin.Meeting.index', compact('leads'));
    }
    public function edit($id)
    {
        $leads = Meeting::find($id);
        return view('backend.admin.Meeting.edit', compact('leads'));
    }
    public function update(Request $request,$id)
    {
        //   validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'place' => 'required',

        ]);


        $lead =Meeting::find($id);
        $lead->title = $request->title;
        $lead->description = $request->description;
        $lead->date = $request->date;
        $lead->place = $request->place;
        $lead->Save();
        return redirect()->route('admin.meeting.table')->with('message', "Data updated Successfully !");

    }
    public function delete($id)
    {
        $leads=Meeting::find($id);
        $leads->delete();
        return redirect()->route('admin.meeting.table')->with('message', "Data deleted Successfully !");

    }
}

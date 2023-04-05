<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = League::paginate(5);
        return view('backend.admin.league.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.league.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   validation
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'place' => 'required',

        ]);


        $lead = new League();
        $lead->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $lead->image = $filename;
        }

        $lead->date = $request->date;
        $lead->place = $request->place;
        $lead->Save();
        return redirect()->route('admin.league.table')->with('message', "Data Added Successfully !");

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $lead = League::find($id);
        return view('backend.admin.league.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                //   validation
                $request->validate([
                    'name' => 'required',
                    'date' => 'required',
                    'place' => 'required',

                ]);


        $lead = new League();
        $lead->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $lead->image = $filename;
        }

        $lead->date = $request->date;
        $lead->place = $request->place;
        $lead->Save();
        return redirect()->route('admin.league.table')->with('message', "Data Updated Successfully !");
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = League::find($id);
        $user->delete();
        return redirect()->route('admin.league.table')->with('message', "Data Deleted Successfully !");
    }
}

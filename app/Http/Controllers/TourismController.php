<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourism;

class TourismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tourism::paginate(3);
        return view('backend.admin.tourism.index', compact('tours'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.tourism.create');
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
                    'title' => 'required',
                    'sdate' => 'required',
                    'edate' => 'required',
                    'place' => 'required',

                ]);


                $tour = new Tourism();
                $tour->title = $request->title;
                $tour->sdate = $request->sdate;
                $tour->edate = $request->edate;
                $tour->place = $request->place;

                if ($request->hasFile('image')) {
                    $file = $request->image;
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('uploads', $filename);
                    $tour->image = $filename;
                }

                $tour->Save();
                return redirect()->route('admin.tourism.table')->with('msg', "Data Added Successfully !");


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
        $tour = Tourism::find($id);
        return view('backend.admin.tourism.edit', compact('tour'));
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
                            'title' => 'required',
                            'sdate' => 'required',
                            'edate' => 'required',
                            'place' => 'required',

                        ]);


                        $tour = Tourism::find($id);
                        $tour->title = $request->title;
                        $tour->sdate = $request->sdate;
                        $tour->edate = $request->edate;
                        $tour->place = $request->place;

                        if ($request->hasFile('image')) {
                            $file = $request->image;
                            $extension = $file->getClientOriginalExtension();
                            $filename = time() . '.' . $extension;
                            $file->move('uploads', $filename);
                            $tour->image = $filename;
                        }

                        $tour->Save();
                        return redirect()->route('admin.tourism.table')->with('msg', "Data Added Successfully !");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Tourism::find($id);
        $user->delete();
        return redirect()->route('admin.tourism.table')->with('msg', "Data Deleted Successfully !");

    }
}

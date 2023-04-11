<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
 use App\Models\UserDailyAttendance;
 use App\Models\Carbon;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(5);
        return view('backend.admin.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.users.create');
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required|Max:12',

        ]);

        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->roles = $request->roles;
        $user->Save();
        return redirect()->route('admin.user.table')->with('message' , "Data Added Successfully !");
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
        $user = User::find($id);
        return view('backend.admin.users.edit', compact('user'));
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required|Max:12',

        ]);


        $user = User::find($id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->roles = $request->roles;
        $user->Save();
        return redirect()->route('admin.user.table')->with('message' , "Data Updated Successfully !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.table')->with('message' , "Data Deleted Successfully !");
    }






    public function userattendance($id){


        //

         $currentmonth = $date = date('Y-m');


        $data = UserDailyAttendance::where('attendance_date','LIKE','%'.$currentmonth.'%')->where('user_id',$id)->get();

        $currentday = date("d");


        $totalpresent = $data->count();
        $totaldays = Carbon::now()->daysInMonth;
        $totalabsent =  (int)$currentday - (int)$totalpresent;





        //


        //  $course = Course::all();
        // $countries = Country::all();
        // $states = State::all();
        // $cities = City::all();
        $orders = User::where('id', $id)->first();
        $attendance = UserDailyAttendance::where('user_id',$id)->orderBy('created_at','DESC')->get();
        // return $attendance->toArray();
       $attendancearray  = [];

        // return $attendance;

        // foreach ($variable as $key => $value) {
        //     # code...
        // }


        $i = 0;
        foreach ($attendance as $ud) {

         // $ud->attendance_date


           // echo $ud;

          $attendancearray[$i]['date']=   $ud->attendance_date;
           $attendancearray[$i]['badge']=   true;
            $attendancearray[$i]['title']=   "Present";

            $attendancearray[$i]['body'] = "<p class=\"lead\">Party<\/p><p>Like it's 1999.<\/p>";


            $i++;





          // $attendancearray[$key]['date'] =  $ud['attendance_date'];
          // $attendancearray[$key]['badge'] = true;
          // $attendancearray[$key]['title'] = "Present";
        }

        // $attendancearray = json_encode($attendancearray);
     // return $attendancearray;

        return view('backend.attendance.attendance',compact('orders','attendancearray','attendance','totalpresent','totaldays','totalabsent'));





    }
    public function viewAttendanceReport($id)
    {

        $user = User::find($id);
        // dd($user);
        return view('backend.admin.users.attendance',compact('user'));
    }

}

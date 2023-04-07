<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function create()
    {
        $user=User::all();
        // dd($user);
        return view('backend.admin.evaluation.create',compact('user'));
    }
    public function store(Request $request)
    {
        //   validation
        $request->validate([
            'user_id' => 'required',
            'remark' => 'required',

        ]);


        $lead = new Evaluation();
        $lead->user_id = $request->user_id;
        $lead->remark = $request->remark;
        $lead->Save();
        return redirect()->route('admin.evaluation.table')->with('message', "Data Added Successfully !");

    }
    public function table()
    {
        $leads = Evaluation::with('user')->paginate(5);
        // dd($leads);
        return view('backend.admin.evaluation.index', compact('leads'));
    }
    public function edit($id)
    {
        $user=User::all();
        $leads = Evaluation::with('user')->find($id);

        return view('backend.admin.evaluation.edit', compact('user','leads'));
    }
    public function update(Request $request,$id)
    {
        //   validation
        $request->validate([
            'user_id' => 'required',
            'remark' => 'required',

        ]);


        $lead = Evaluation::find($id);
        $lead->user_id = $request->user_id;
        $lead->remark = $request->remark;
        $lead->Save();
        return redirect()->route('admin.evaluation.table')->with('message', "Data updated Successfully !");

    }
    public function delete($id)
    {
        $lead=Evaluation::find($id);
        $lead->delete();
        return redirect()->route('admin.evaluation.table')->with('message', "Data deleted Successfully !");

    }

}

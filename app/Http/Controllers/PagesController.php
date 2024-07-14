<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Use Models for each Table
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Form;
use App\Models\ShowallForm;


class PagesController extends Controller
{
    public function form_page()
    {
        return view('pages.form');
    }

    public function showform_page()
    {
        $ShowAllData = DB::table('showallforms')->orderBy('id', 'desc')->paginate(5);
        return view('pages.showform')->with('alldata', $ShowAllData);

    }

    public function profile_page()
    {
        return view('pages.profile');
    }

    public function readform_page($id)
    {
        return view('pages.readform', [
            'data' => Showallform::findorFail($id)
        ]);
    }

    public function updateform_page($id)
    {
        return view('pages.updateform', [
            'data' => Form::findorFail($id)
        ]);
    }


    public function showread_page()
    {
        $ShowAllData = DB::table('showallforms')->orderBy('id', 'desc')->paginate(5);
        return view('pages.showread')->with('alldata', $ShowAllData);

    }

    //Action functions
    public function store(Request $request)
    {
        $userid = Auth::user()->id;
        Form::create([
            'user_id' => $userid,
            'course' => $request->course,
            'phone' => $request->phone,
            'company' => $request->company,
            'role' => $request->role,
            'state' => $request->state,
            'region' => $request->region,
            'review' => $request->review,
        ]);
        return redirect(route('showread'))->with('info', 'Form has been 
created');
    }

    public function update(Request $request, $id)
    {
        Form::where('id', $id)->update([
            'course' => $request->course,
            'phone' => $request->phone,
            'company' => $request->company,
            'role' => $request->role,
            'state' => $request->state,
            'region' => $request->region,
            'review' => $request->review,
        ]);
        return redirect(route('showform'))->with('info', 'Form has been 
updated');
    }

    public function destroy($id)
    {
        Form::destroy($id);
        return redirect(route('showform'))->with('warning', 'Form has been 
deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weeklysd;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklySdController extends Controller
{
    // public function create()
    // {
    //     $user = User::all();

    //     $weeklysd = Weeklysd::where('user_id', Auth::user()->id)->whereBetween('created_at', [
    //         Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
    //     ])->get();

    //     return view('weekly.weekly', [
    //         "title" => "Weekly Target",
    //         "sesi" => "WEEKLY TARGET"
    //     ], compact('user'));
    // }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan1' => 'required',
            'progress_plan1' => 'required',
            'plan2' => 'required',
            'progress_plan2' => 'required',
            'plan3' => 'required',
            'progress_plan3' => 'required',
            'plan4' => 'required',
            'progress_plan4' => 'required',
            'plan5' => 'required',
            'progress_plan5' => 'required',
        ]);
        $weeklysd = new Weeklysd($validated_data);
        $weeklysd->user()->associate(Auth::user());
        $weeklysd->save();

        return redirect()->back();
    }
    // public function delete($id)
    // {
    //     $weeklysd = Weeklysd::find($id);
    //     $weeklysd->delete();

    //     return redirect()->back();
    // }
}

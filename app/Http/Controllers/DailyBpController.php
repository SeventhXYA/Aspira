<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailybp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyBpController extends Controller
{
    public function index()
    {
        $dailybp = Dailybp::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('bp.dailybp', [
            "title" => "Bisnis/Profit",
            "sesi" => "BISNIS/PROFIT"
        ], compact('dailybp'));
    }

    public function create()
    {
        $user = User::all();
        return view('bp.newdailybp', [
            "title" => "Daily Report Bisnis/Profit",
            "sesi" => "BISNIS/PROFIT"
        ], compact('user'));
    }

    public function delete($id)
    {
        $dailybp = Dailybp::find($id);
        $dailybp->delete();

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progress' => 'required|numeric'
        ]);
        $dailybp = new Dailybp($validated_data);
        $dailybp->user()->associate(Auth::user());
        $dailybp->save();

        return redirect('/');
    }
    public function history()
    {
        $dailybp = Dailybp::where('user_id', Auth::user()->id)->get();
        return view('bp.historybp', [
            "title" => "History Report Bisnis/Profit",
            "sesi" => "BISNIS/PROFIT"
        ], compact('dailybp'));
    }
    public function viewadmin()
    {
        // $dailybp = Dailybp::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailybp = Dailybp::all();
        return view('admin.viewbpadm', [
            "title" => "Daily Report Bisnis/Profit",
            "sesi" => "BISNIS/PROFIT"
        ], compact('dailybp'));
    }
}

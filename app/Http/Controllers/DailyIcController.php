<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailyic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyIcController extends Controller
{
    public function index()
    {
        $dailyic = Dailyic::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('ic.dailyic', [
            "title" => "Inovasi/Creativity",
            "sesi" => "INOVASI/CREATIVITY"
        ], compact('dailyic'));
    }

    public function create()
    {
        $user = User::all();
        return view('ic.newdailyic', [
            "title" => "Daily Report Inovasi/Creativity",
            "sesi" => "INOVASI/CREATIVITY"
        ], compact('user'));
    }

    public function delete($id)
    {
        $dailyic = Dailyic::find($id);
        $dailyic->delete();

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progress' => 'required|numeric'
        ]);
        $dailyic = new Dailyic($validated_data);
        $dailyic->user()->associate(Auth::user());
        $dailyic->save();

        return redirect('/');
    }
    public function history()
    {
        $dailyic = Dailyic::where('user_id', Auth::user()->id)->get();
        return view('ic.historyic', [
            "title" => "History Report Inovasi/Creativity",
            "sesi" => "REPORT INOVASI/CREATIVITY"
        ], compact('dailyic'));
    }
    public function viewadmin()
    {
        // $dailyic = Dailyic::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailyic = Dailyic::all();
        return view('admin.viewicadm', [
            "title" => "Daily Report Inovasi/Creativity",
            "sesi" => "REPORT INOVASI/CREATIVITY"
        ], compact('dailyic'));
    }
}

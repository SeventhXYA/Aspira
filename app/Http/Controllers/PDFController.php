<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\Longtermtarget;
use App\Models\Dailysd;
use App\Models\Dailybp;
use App\Models\Dailykl;
use App\Models\Dailyic;
use App\Models\IntervalBp;
use App\Models\IntervalIc;
use App\Models\IntervalKl;
use App\Models\IntervalSd;
use App\Models\User;
use Carbon\CarbonInterval;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function longtermPDF()
    {
        $longterm = Longtermtarget::whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        $data = [
            'title' => 'Long Term Target This Month',
            'date' => date('m/d/Y'),
            'longterm' => $longterm
        ];

        $pdf = PDF::loadView('admin.pdflongterm', $data)->setPaper('a4', 'landscape');
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        return $pdf->download('longterm' . time() . '.pdf');
    }

    public function dailysdNowPDF()
    {
        $users = User::where('level_id', 2)->get();
        $intervalsd = IntervalSd::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        $dailysd = Dailysd::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailysd' => $dailysd,
            'intervalsd' => $intervalsd,
            'users' => $users
        ];

        return view('admin.pdfdailysd', $data);
    }

    public function dailybpNowPDF()
    {
        $users = User::where('level_id', 2)->get();
        $intervalbp = IntervalBp::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        $dailybp = DailyBp::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();

        $data = [
            'title' => 'Daily Report Bisnis & Profit',
            'date' => date('m/d/Y'),
            'dailybp' => $dailybp,
            'intervalbp' => $intervalbp,
            'users' => $users
        ];

        return view('admin.pdfdailybp', $data);
    }
    public function dailyicNowPDF()
    {

        $users = User::where('level_id', 2)->get();
        $intervalic = IntervalIc::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        $dailyic = DailyIc::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailyic' => $dailyic,
            'intervalic' => $intervalic,
            'users' => $users
        ];

        return view('admin.pdfdailyic', $data);
    }
    public function dailyklNowPDF()
    {
        $users = User::where('level_id', 2)->get();
        $intervalkl = IntervalKl::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        $dailykl = DailyKl::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailykl' => $dailykl,
            'intervalkl' => $intervalkl,
            'users' => $users
        ];

        return view('admin.pdfdailykl', $data);
    }

    public function dailysdPDF(Request $request)
    {
        // $dailysd = Dailysd::whereBetween('created_at', [$tglawal, $tglakhir])->format('yyyy-mm-dd')->get();
        $dailysd = Dailysd::whereDate('created_at', '>=', Carbon::parse($request->tglawal)->format('Y-m-d'))
            ->whereDate('created_at', '<=', Carbon::parse($request->tglakhir)->format('Y-m-d'))
            ->get();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailysd' => $dailysd,
        ];

        return view('admin.pdfdailysd', $data);
    }

    public function dailybpPDF()
    {
        $users = User::where('level_id', 2)->get();
        $intervalbp = IntervalBp::all();
        $dailybp = DailyBp::all();

        $data = [
            'title' => 'Daily Report Bisnis & Profit',
            'date' => date('m/d/Y'),
            'dailybp' => $dailybp,
            'intervalbp' => $intervalbp,
            'users' => $users
        ];

        return view('admin.pdfdailybp', $data);
    }
    public function dailyicPDF()
    {

        $users = User::where('level_id', 2)->get();
        $intervalic = IntervalIc::all();
        $dailyic = DailyIc::all();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailyic' => $dailyic,
            'intervalic' => $intervalic,
            'users' => $users
        ];

        return view('admin.pdfdailyic', $data);
    }
    public function dailyklPDF()
    {
        $users = User::where('level_id', 2)->get();
        $intervalkl = IntervalKl::all();
        $dailykl = DailyKl::all();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailykl' => $dailykl,
            'intervalkl' => $intervalkl,
            'users' => $users
        ];

        return view('admin.pdfdailykl', $data);
    }

    public function recordIntervalPDF()
    {
        $users = User::where('level_id', 2)->get();
        $data = [
            'title' => 'Daily Record Interval',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('admin.pdfrecordinterval', $data)->setPaper('a4', 'landscape');

        return $pdf->download('recordInterval' . time() . '.pdf');
    }
}

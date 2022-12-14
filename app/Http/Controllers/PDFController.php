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
    // public function longtermPDF()
    // {
    //     $longterm = Longtermtarget::whereBetween('created_at', [
    //         Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
    //     ])->get();

    //     $data = [
    //         'title' => 'Long Term Target This Month',
    //         'date' => date('m/d/Y'),
    //         'longterm' => $longterm
    //     ];

    //     $pdf = PDF::loadView('admin.pdflongterm', $data)->setPaper('a4', 'landscape');

    //     return $pdf->download('longterm' . time() . '.pdf');
    // }

    public function dailysdNowPDF()
    {
        $users = User::where('level_id', 3)->get();
        $dailysd = Dailysd::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->orderBy('user_id', 'ASC')->get();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailysd' => $dailysd,
            'users' => $users
        ];

        return view('admin.pdfdailysd', $data);
    }

    public function dailybpNowPDF()
    {
        $users = User::where('level_id', 3)->get();
        $dailybp = DailyBp::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->orderBy('user_id', 'ASC')->get();

        $data = [
            'title' => 'Daily Report Bisnis & Profit',
            'date' => date('m/d/Y'),
            'dailybp' => $dailybp,
            'users' => $users
        ];

        return view('admin.pdfdailybp', $data);
    }
    public function dailyicNowPDF()
    {

        $users = User::where('level_id', 3)->get();
        $dailyic = DailyIc::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->orderBy('user_id', 'ASC')->get();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailyic' => $dailyic,
            'users' => $users
        ];

        return view('admin.pdfdailyic', $data);
    }
    public function dailyklNowPDF()
    {
        $users = User::where('level_id', 3)->get();
        $dailykl = DailyKl::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->orderBy('user_id', 'ASC')->get();

        $data = [
            'title' => 'Daily Report Self-Development' . time(),
            'date' => date('m/d/Y'),
            'dailykl' => $dailykl,
            'users' => $users
        ];

        return view('admin.pdfdailykl', $data);
    }

    public function dailysdPDF(Request $request)
    {
        $dailysd = Dailysd::whereDate('created_at', '>=', Carbon::parse($request->tglawal)->format('Y-m-d'))
            ->whereDate('created_at', '<=', Carbon::parse($request->tglakhir)->format('Y-m-d'))->orderBy('user_id', 'ASC')
            ->get();

        $data = [
            'title' => date('d_m_Y') . '_Activity Report Self-Development_' . time(),
            'date' => date('d/m/Y'),
            'dailysd' => $dailysd,
        ];

        return view('admin.pdfdailysd', $data);
    }

    public function dailybpPDF(Request $request)
    {
        $dailybp = Dailybp::whereDate('created_at', '>=', Carbon::parse($request->tglawal)->format('Y-m-d'))
            ->whereDate('created_at', '<=', Carbon::parse($request->tglakhir)->format('Y-m-d'))->orderBy('user_id', 'ASC')
            ->get();

        $data = [
            'title' => date('d_m_Y') . '_Activity Report Bisnis & Profit_' . time(),
            'date' => date('d/m/Y'),
            'dailybp' => $dailybp,
        ];

        return view('admin.pdfdailybp', $data);
    }
    public function dailyicPDF(Request $request)
    {

        $dailyic = Dailyic::whereDate('created_at', '>=', Carbon::parse($request->tglawal)->format('Y-m-d'))
            ->whereDate('created_at', '<=', Carbon::parse($request->tglakhir)->format('Y-m-d'))->orderBy('user_id', 'ASC')
            ->get();

        $data = [
            'title' => date('d_m_Y') . '_Activity Report Inovasi/Creativity_' . time(),
            'date' => date('d/m/Y'),
            'dailyic' => $dailyic,
        ];

        return view('admin.pdfdailyic', $data);
    }
    public function dailyklPDF(Request $request)
    {
        $dailykl = Dailykl::whereDate('created_at', '>=', Carbon::parse($request->tglawal)->format('Y-m-d'))
            ->whereDate('created_at', '<=', Carbon::parse($request->tglakhir)->format('Y-m-d'))->orderBy('user_id', 'ASC')
            ->get();

        $data = [
            'title' => date('d_m_Y') . '_Activity Report Kelembagaan_' . time(),
            'date' => date('d/m/Y'),
            'dailykl' => $dailykl,
        ];

        return view('admin.pdfdailykl', $data);
    }

    public function recordIntervalPDF()
    {
        $users = User::where('level_id', 3)->orderBy('user_id', 'ASC')->get();
        $data = [
            'title' => date('d_m_Y') . '_Daily Record Interval_' . time(),
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        return view('admin.pdfrecordinterval', $data);
    }
}

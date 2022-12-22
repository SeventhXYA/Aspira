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
        // $pdf = PDF::loadView('admin.pdfdailysd', $data)->setPaper('a4');
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        // return $pdf->download('dailysdToday' . time() . '.pdf');
    }

    public function dailybpNowPDF()
    {
        // $dailybp = Dailybp::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailybp = Dailybp::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();

        $data = [
            'title' => 'Daily Report Bisnis/Profit',
            'date' => date('m/d/Y'),
            'dailybp' => $dailybp
        ];

        $pdf = PDF::loadView('admin.pdfdailybp', $data)->setPaper('a4');
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        return $pdf->download('dailybp' . time() . '.pdf');
    }
    public function dailyicNowPDF()
    {
        // $dailyic = Dailyic::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailyic = Dailyic::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();

        $data = [
            'title' => 'Daily Report Inovasi/Creativity',
            'date' => date('m/d/Y'),
            'dailyic' => $dailyic
        ];

        $pdf = PDF::loadView('admin.pdfdailyic', $data)->setPaper('a4');
        // $pdf = PDF::loadView('admin.pdfdailyic', $data);

        return $pdf->download('dailyic' . time() . '.pdf');
    }
    public function dailyklNowPDF()
    {
        $dailykl = Dailykl::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();

        $data = [
            'title' => 'Daily Report Kelembagaan',
            'date' => date('m/d/Y'),
            'dailykl' => $dailykl
        ];

        $pdf = PDF::loadView('admin.pdfdailykl', $data)->setPaper('a4');

        return $pdf->download('dailykl' . time() . '.pdf');
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

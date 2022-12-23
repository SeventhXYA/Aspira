<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailybp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DailyBpController extends Controller
{
    public function index()
    {
        $dailybp = Dailybp::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('bp.dailybp', [
            "title" => "Bisnis/Profit"
        ], compact('dailybp'));
    }

    public function create()
    {
        $user = User::all();
        return view('bp.newdailybp', [
            "title" => "Daily Report Bisnis/Profit"
        ], compact('user'));
    }

    public function edit($id)
    {
        $dailybp = DailyBp::find($id);
        // $longterm->delete();

        return view('bp.editdailybp', [
            "title" => "Edit Daily Bisnis & Profit"
        ], compact('dailybp'));
    }

    public function update(Request $request, $id)
    {
        $dailybp = Dailybp::find($id);
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progress' => 'required|numeric',
            'pict' => 'image',
            'desc' => 'required',
        ]);

        if (array_key_exists('pict', $validated_data)) {
            $image_data = $request->file('pict');
            $filename = 'uploads/dailybp/' . Auth::user()->username . time() . '.jpg';

            $image = Image::make($image_data);

            $image->fit(800, 600);
            $image->encode('jpg', 90);
            $image->stream();
            Storage::disk('local')->put('public/' . $filename, $image, 'public');
            Storage::disk('local')->delete($dailybp->pict);

            $validated_data['pict'] = 'storage/' . $filename;
        }

        $dailybp->update($validated_data);
        return redirect('/');
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
            'progress' => 'required|numeric',
            'pict' => 'required|image',
            'desc' => 'required',
        ]);

        $image_data = $request->file('pict');
        $filename = 'uploads/dailybp/' . Auth::user()->username . time() . '.jpg';

        $image = Image::make($image_data);

        $image->fit(800, 600);
        $image->encode('jpg', 90);
        $image->stream();
        Storage::disk('local')->put('public/' . $filename, $image, 'public');

        $validated_data['pict'] = 'storage/' . $filename;
        $dailybp = new Dailybp($validated_data);
        $dailybp->user()->associate(Auth::user());
        $dailybp->save();

        return redirect('/');
    }
    public function history()
    {
        $dailybp = Dailybp::where('user_id', Auth::user()->id)->get();
        return view('bp.historybp', [
            "title" => "History Report Bisnis/Profit"
        ], compact('dailybp'));
    }
    public function viewadmin()
    {
        $dailybp = Dailybp::orderBy('id', 'DESC')->get();
        return view('admin.viewbpadm', [
            "title" => "Daily Report Bisnis/Profit"
        ], compact('dailybp'));
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailysd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DailySdController extends Controller
{
    public function index()
    {
        $dailysd = Dailysd::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('sd.dailysd', [
            "title" => "Self-Development",
            "sesi" => "SELF-DEVELOPMENT"
        ], compact('dailysd'));
    }

    public function create()
    {
        $user = User::all();
        return view('sd.newdailysd', [
            "title" => "Daily Report Self-Development"
        ], compact('user'));
    }

    public function edit($id)
    {
        $dailysd = Dailysd::find($id);

        return view('sd.editdailysd', [
            "title" => "Edit Daily Self-Development"
        ], compact('dailysd'));
    }

    public function update(Request $request, $id)
    {
        $dailysd = Dailysd::find($id);
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progress' => 'required|numeric',
            'pict' => 'image',
            'desc' => 'required',
        ]);

        if (array_key_exists('pict', $validated_data)) {
            $image_data = $request->file('pict');
            $filename = 'uploads/dailysd/' . Auth::user()->username . time() . '.jpg';

            $image = Image::make($image_data);

            $image->fit(800, 600);
            $image->encode('jpg', 90);
            $image->stream();
            Storage::disk('local')->put('public/' . $filename, $image, 'public');
            Storage::disk('local')->delete($dailysd->pict);

            $validated_data['pict'] = 'storage/' . $filename;
        }

        $dailysd->update($validated_data);
        return  redirect('dailysd')->with('edit', 'Data berhasil diubah!');
    }


    public function delete($id)
    {
        $dailysd = Dailysd::find($id);
        $dailysd->delete();

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
        $filename = 'uploads/dailysd/' . Auth::user()->username . time() . '.jpg';

        $image = Image::make($image_data);

        $image->fit(800, 600);
        $image->encode('jpg', 90);
        $image->stream();
        Storage::disk('local')->put('public/' . $filename, $image, 'public');

        $validated_data['pict'] = 'storage/' . $filename;
        $dailysd = new Dailysd($validated_data);
        $dailysd->user()->associate(Auth::user());
        $dailysd->save();

        return redirect('dailysd')->with('success', 'Data berhasil disimpan!');
    }

    public function history()
    {
        $dailysd = Dailysd::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->simplePaginate(6);
        return view('sd.historysd', [
            "title" => "History Report Self-Development"
        ], compact('dailysd'));
    }
    public function viewadmin()
    {
        $dailysd = Dailysd::orderBy('id', 'DESC')->simplePaginate(10);
        return view('admin.viewsdadm', [
            "title" => "Daily Report Self-Development"
        ], compact('dailysd'));
    }
}

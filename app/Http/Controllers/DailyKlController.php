<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailykl;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DailyKlController extends Controller
{
    public function index()
    {
        $dailykl = Dailykl::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('kl.dailykl', [
            "title" => "Kelembagaan"
        ], compact('dailykl'));
    }

    public function create()
    {
        $user = User::all();
        return view('kl.newdailykl', [
            "title" => "Daily Report Kelembagaan"
        ], compact('user'));
    }

    public function edit($id)
    {
        $dailykl = DailyKl::find($id);
        // $longterm->delete();

        return view('kl.editdailykl', [
            "title" => "Edit Daily Kelembagaan"
        ], compact('dailykl'));
    }

    public function update(Request $request, $id)
    {
        $dailykl = Dailykl::find($id);
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progress' => 'required|numeric',
            'pict' => 'image',
            'desc' => 'required',
        ]);

        if (array_key_exists('pict', $validated_data)) {
            $image_data = $request->file('pict');
            $filename = 'uploads/dailykl/' . Auth::user()->username . time() . '.jpg';

            $image = Image::make($image_data);

            $image->fit(800, 600);
            $image->encode('jpg', 90);
            $image->stream();
            Storage::disk('local')->put('public/' . $filename, $image, 'public');
            Storage::disk('local')->delete($dailykl->pict);

            $validated_data['pict'] = 'storage/' . $filename;
        }

        $dailykl->update($validated_data);
        return redirect('dailykl');
    }

    public function delete($id)
    {
        $dailykl = Dailykl::find($id);
        $dailykl->delete();

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
        $filename = 'uploads/dailykl/' . Auth::user()->username . time() . '.jpg';

        $image = Image::make($image_data);

        $image->fit(800, 600);
        $image->encode('jpg', 90);
        $image->stream();
        Storage::disk('local')->put('public/' . $filename, $image, 'public');

        $validated_data['pict'] = 'storage/' . $filename;
        $dailykl = new Dailykl($validated_data);
        $dailykl->user()->associate(Auth::user());
        $dailykl->save();
        return redirect('/');
    }
    public function history()
    {
        $dailykl = Dailykl::where('user_id', Auth::user()->id)->get();
        return view('kl.historykl', [
            "title" => "History Report Kelembagaan"
        ], compact('dailykl'));
    }
    public function viewadmin()
    {
        $dailykl = Dailykl::all();
        return view('admin.viewkladm', [
            "title" => "Daily Report Kelembagaan"
        ], compact('dailykl'));
    }
}

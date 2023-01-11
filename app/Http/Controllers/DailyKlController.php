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
            'date' => 'required',
            'timestart' => 'required',
            'timefinish' => 'required',
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
        return redirect('dailykl')->with('edit', 'Data berhasil diubah!');
    }

    public function editHistory($id)
    {
        $dailykl = Dailykl::find($id);

        return view('kl.editdailyklhistory', [
            "title" => "Edit Daily Self-Development"
        ], compact('dailykl'));
    }

    public function updateHistory(Request $request, $id)
    {
        $dailykl = Dailykl::find($id);
        $validated_data = $request->validate([
            'date' => 'required',
            'timestart' => 'required',
            'timefinish' => 'required',
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
        return  redirect('dailykl/history')->with('edit', 'Data berhasil diubah!');
    }

    public function destroy(Dailykl $dailykl)
    {
        $dailykl->delete();
        return redirect()->back()->with([
            'success' => 'Data berhasil dihapus.'
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'date' => 'required',
            'timestart' => 'required',
            'timefinish' => 'required',
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
        return redirect('dailykl')->with('success', 'Data berhasil disimpan!');
    }
    public function history()
    {
        $dailykl = Dailykl::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->simplePaginate(6);
        return view('kl.historykl', [
            "title" => "History Report Kelembagaan"
        ], compact('dailykl'));
    }
    public function viewadmin(Request $request)
    {
        $keyword = $request->keyword;
        $dailykl = Dailykl::whereHas('user', function ($query) use ($keyword) {
            $query->where('firstname', 'LIKE', '%' . $keyword . '%')
                ->orWhere('lastname', 'LIKE', '%' . $keyword . '%')
                ->orWhereHas('divisi', function ($query) use ($keyword) {
                    $query->where('divisi', 'LIKE', '%' . $keyword . '%');
                });
        })->orderBy('id', 'DESC')->paginate(10);
        return view('admin.viewkladm', [
            "title" => "Daily Report Kelembagaan"
        ], compact('dailykl'));
    }
}

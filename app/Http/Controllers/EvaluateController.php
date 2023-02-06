<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Evaluate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EvaluateController extends Controller
{
    public function index()
    {
        $evaluate = Evaluate::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('evaluate.evaluate', [
            "title" => "Evaluasi Harian",
            "sesi" => "EVALUASI HARIAN"
        ], compact('evaluate'));
    }

    public function create()
    {
        $user = User::all();
        return view('evaluate.newevaluate', [
            "title" => "Evaluasi Harian Baru"
        ], compact('user'));
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'dailyevaluate' => 'required'
        ]);

        $evaluate = new Evaluate($validated_data);
        $evaluate->user()->associate(Auth::user());
        $evaluate->save();

        return redirect('evaluate')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $evaluate = Evaluate::find($id);

        return view('evaluate.editevaluate', [
            "title" => "Edit Evaluasi Harian"
        ], compact('evaluate'));
    }

    public function update(Request $request, $id)
    {
        $evaluate = Evaluate::find($id);
        $validated_data = $request->validate([
            'dailyevaluate' => 'required'
        ]);

        $evaluate->update($validated_data);
        return  redirect('evaluate')->with('edit', 'Data berhasil diubah!');
    }
    public function editHistory($id)
    {
        $evaluate = Evaluate::find($id);

        return view('evaluate.editevaluatehistory', [
            "title" => "Edit Evaluasi Harian"
        ], compact('evaluate'));
    }

    public function updateHistory(Request $request, $id)
    {
        $evaluate = Evaluate::find($id);
        $validated_data = $request->validate([
            'dailyevaluate' => 'required'
        ]);

        $evaluate->update($validated_data);
        return  redirect('evaluate/history')->with('edit', 'Data berhasil diubah!');
    }



    public function destroy(Evaluate $evaluate)
    {
        $evaluate->delete();
        return redirect()->back()->with([
            'success' => 'Data berhasil dihapus.'
        ]);
    }



    public function history()
    {
        $evaluate = Evaluate::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->simplePaginate(6);
        return view('evaluate.historyevaluate', [
            "title" => "History Report Self-Development"
        ], compact('evaluate'));
    }
    public function viewadmin(Request $request)
    {
        $keyword = $request->keyword;
        $evaluate = Evaluate::whereHas('user', function ($query) use ($keyword) {
            $query->where('firstname', 'LIKE', '%' . $keyword . '%')
                ->orWhere('lastname', 'LIKE', '%' . $keyword . '%')
                ->orWhereHas('divisi', function ($query) use ($keyword) {
                    $query->where('divisi', 'LIKE', '%' . $keyword . '%');
                });
        })->orderBy('id', 'DESC')->paginate(10);
        return view('admin.viewevadm', [
            "title" => "Evaluasi Harian"
        ], compact('evaluate'));
    }
}

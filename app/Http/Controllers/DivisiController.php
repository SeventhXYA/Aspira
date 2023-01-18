<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        return view('divisi.divisi', [
            "title" => "Kelola Divisi",
            "sesi" => "DAFTAR DIVISI"
        ], compact('divisi'));
    }

    public function update(Request $request, $id)
    {
        $divisi = Divisi::find($id);
        $validated_data = $request->validate([
            'divisi' => 'required'
        ]);

        $divisi->update($validated_data);
        return redirect()->back()->with('edit', 'Data berhasil diubah!');
    }

    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return redirect()->back()->with([
            'success' => 'Data berhasil dihapus.'
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'divisi' => 'required'
        ]);
        $divisi = new Divisi($validated_data);
        $divisi->save();

        return redirect()->back()->with('save', 'Data berhasil disimpan!');
    }
}

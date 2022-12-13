<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Gender;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('level_id', 2)->get();
        return view('admin.datapengguna', [
            "title" => "Data Pengguna",
            "sesi" => "DATA PENGGUNA",
        ], compact('user'));
    }

    public function create()
    {
        $user = User::all();
        $divisi = Divisi::all();
        $gender = Gender::all();
        $level = Level::all();
        return view('admin.newdatapengguna', [
            "title" => "Tambah Data Pengguna",
            "sesi" => "TAMBAH DATA PENGGUNA"
        ], compact('user', 'divisi', 'gender', 'level'));
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'pict',
            'name' => 'required',
            'gender_id' => 'required',
            'divisi_id' => 'required',
            'nohp' => 'required|numeric',
            'username' => ['required', 'min:4', 'max:30', 'unique:user'],
            'email' => 'required|email:dns|unique:user',
            'password' => 'required',
            'level_id' => 'required',
            'address' => 'required'
        ]);
        $validated_data['password'] = Hash::make($validated_data['password']);
        $user = new User($validated_data);
        $user->save();

        return redirect('datapengguna');
    }

    public function statistik()
    {
        return view('admin.statistik', [
            "title" => "Tambah Data Pengguna",
            "sesi" => ""
        ]);
    }
}

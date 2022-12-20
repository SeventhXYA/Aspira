<?php

namespace App\Http\Controllers;

use App\Models\Bulan;
use App\Models\Divisi;
use App\Models\Gender;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
        $bulan = Bulan::all();
        $divisi = Divisi::all();
        $gender = Gender::all();
        $level = Level::all();
        return view('admin.newdatapengguna', [
            "title" => "Tambah Data Pengguna",
            "sesi" => "TAMBAH DATA PENGGUNA"
        ], compact('user', 'divisi', 'gender', 'level', 'bulan'));
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'pict' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender_id' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|numeric',
            'bulan_id' => 'required',
            'tahunlahir' => 'required|numeric',
            'nohp' => 'required|numeric',
            'email' => 'required|email:dns|unique:user',
            'address' => 'required',
            'divisi_id' => 'required',
            'username' => ['required', 'min:4', 'max:30', 'unique:user'],
            'password' => 'required',
            'level_id' => 'required',
        ]);
        // $image_data = $request->file('pict');
        // $filename = 'uploads/user/' . time() . '.jpg';

        // $image = Image::make($image_data);

        // $image->fit(500, 500);
        // $image->encode('jpg', 90);
        // $image->stream();
        // Storage::disk('local')->put('public/' . $filename, $image, 'public');

        // $validated_data['pict'] = 'storage/' . $filename;
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

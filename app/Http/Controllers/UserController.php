<?php

namespace App\Http\Controllers;

use App\Models\Bulan;
use App\Models\Divisi;
use App\Models\Gender;
use App\Models\Level;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('level_id')->get();
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
            'level_id' => 'required'
        ]);
        $validated_data['pict'] = 'img/user.png';

        $validated_data['password'] = Hash::make($validated_data['password']);
        $user = new User($validated_data);
        $user->save();

        return redirect('datapengguna');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        $bulan = Bulan::all();
        $gender = Gender::all();
        $divisi = Divisi::all();
        return view('admin.editpengguna', [
            'title' => 'Edit Data Pengguna'
        ], compact('user', 'bulan', 'gender', 'divisi'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $validated_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender_id' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'bulan_id' => 'required',
            'tahunlahir' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'address' => 'required',
            'divisi_id' => 'required',
        ]);

        $user->update($validated_data);
        return redirect('datapengguna');
    }

    public function viewUser($id)
    {
        $user = User::find($id);
        return view('admin.pengguna', [
            'title' => 'Detail Pengguna'
        ], compact('user'));
    }

    public function statistik()
    {
        return view('admin.statistik', [
            "title" => "Tambah Data Pengguna",
            "sesi" => ""
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with([
            'success' => 'User berhasil dihapus'
        ]);
    }
}

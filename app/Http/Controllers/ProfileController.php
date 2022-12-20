<?php

namespace App\Http\Controllers;

use App\Models\Bulan;
use App\Models\Divisi;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::where('id', Auth::user()->id)->get();
        return view('profile', [
            'title' => 'Profil'
        ], compact('users'));
    }

    public function edit()
    {
        $bulan = Bulan::all();
        $divisi = Divisi::all();
        $gender = Gender::all();
        $users = User::where('id', Auth::user()->id)->get();
        return view('editprofile', [
            'title' => 'Profil'
        ], compact('users', 'bulan', 'divisi', 'gender'));
    }

    // public function store(Request $request)
    // {
    //     $validated_data = $request->validate([
    //         'pict' => 'required|image',
    //         'firstname' => 'required',
    //         'lastname' => 'required',
    //         'gender_id' => 'required',
    //         'tempatlahir' => 'required',
    //         'tanggallahir' => 'required|numeric',
    //         'bulan_id' => 'required',
    //         'tahunlahir' => 'required|numeric',
    //         'nohp' => 'required|numeric',
    //         'email' => 'required|email:dns|unique:user',
    //         'address' => 'required',
    //         'divisi_id' => 'required',
    //         'username' => ['required', 'min:4', 'max:30', 'unique:user'],
    //         'password' => 'required',
    //         'level_id' => 'required',
    //     ]);

    //     $image_data = $request->file('pict');
    //     $filename = 'uploads/user/' . Auth::user()->username . time() . '.jpg';

    //     $image = Image::make($image_data);

    //     $image->fit(800, 600);
    //     $image->encode('jpg', 90);
    //     $image->stream();
    //     Storage::disk('local')->put('public/' . $filename, $image, 'public');

    //     $validated_data['pict'] = 'storage/' . $filename;
    //     $user = new User($validated_data);
    //     $user->user()->associate(Auth::user());
    //     $user->save();

    //     return redirect()->back();
    // }
}

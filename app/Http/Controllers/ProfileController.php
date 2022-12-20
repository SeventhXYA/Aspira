<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', [
            'title' => 'Profile'
        ], compact('user'));
    }

    public function updatePicture(Request $request)
    {
        $validated_data = $request->validate([
            'pict' => 'required|image'
        ]);

        $user = Auth::user();

        $image_data = $request->file('pict');
        $filename = 'uploads/profile/' . Auth::user()->username . time() . '.jpg';

        $image = Image::make($image_data);

        $image->fit(800, 600);
        $image->encode('jpg', 90);
        $image->stream();
        Storage::disk('local')->put('public/' . $filename, $image, 'public');

        if ($user->pict !== null) {
            Storage::disk('local')->delete($user->pict);
        }

        $validated_data['pict'] = 'storage/' . $filename;

        $user->update($validated_data);
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // $validated_data = $request->validate([
        //     'pict' => 'required|image',
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'gender_id' => 'required',
        //     'tempatlahir' => 'required',
        //     'tanggallahir' => 'required|numeric',
        //     'bulan_id' => 'required',
        //     'tahunlahir' => 'required|numeric',
        //     'nohp' => 'required|numeric',
        //     'email' => 'required|email:dns|unique:user',
        //     'address' => 'required',
        //     'divisi_id' => 'required',
        //     'username' => ['required', 'min:4', 'max:30', 'unique:user'],
        //     'password' => 'required',
        //     'level_id' => 'required',
        // ]);

        // $image_data = $request->file('pict');
        // $filename = 'uploads/user/' . Auth::user()->username . time() . '.jpg';

        // $image = Image::make($image_data);

        // $image->fit(800, 600);
        // $image->encode('jpg', 90);
        // $image->stream();
        // Storage::disk('local')->put('public/' . $filename, $image, 'public');

        // $validated_data['pict'] = 'storage/' . $filename;
        // $user = new User($validated_data);
        // $user->user()->associate(Auth::user());
        // $user->save();

        // return redirect()->back();
    }
}

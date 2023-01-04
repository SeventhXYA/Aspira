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
        $user = Auth::user();
        return view('profile', [
            'title' => 'Profil'
        ], compact('user'));
    }

    public function updatePicture(Request $request)
    {
        $validated_data = $request->validate([
            'pict' => 'required'
        ]);
        $image_data = $request->file('pict')->get();

        $user = Auth::user();

        $filename = 'uploads/profile/' . Auth::user()->username . time() . '.jpg';

        $image = Image::make($image_data);
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

    public function editData()
    {
        $user = Auth::user();
        $bulan = Bulan::all();
        $gender = Gender::all();
        $divisi = Divisi::all();
        return view('editprofile', [
            'title' => 'Edit Profil'
        ], compact('user', 'bulan', 'gender', 'divisi'));
    }

    public function updateData(Request $request)
    {
        $user = Auth::user();
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
        return redirect('profile');
    }
}

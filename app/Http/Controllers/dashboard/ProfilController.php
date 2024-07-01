<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::User();
        return view('dashboard.profil.index',compact(['user']));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'name' => 'required|string|min:3',
        ]);

        $data = User::find($id);
        $data->name = $request->input('name');
        $data->update();
        Alert::success('Horee', 'Biodata berhasil dibuat');
        return redirect()->back();
    }

    public function updatePassword(Request $request, $id)
    {
         $request->validate([
            'password' => 'required|string|min:6',
        ]);
        $input = User::find($id);
        $input->password = Hash::make($request->input('password'));
        $input->update();
        Alert::info('Horee', 'Password berhasil Update');
        return redirect()->back();
    }
    public function updateFoto(Request $request, $id)
    {
        $filepath = User::where('id', $id)->first()->img;
        if (!empty($filepath)) {
            Storage::disk('profile')->delete($filepath);
        }
        $request->validate([
            'img' => 'required|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('img');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = storage_path('app/public/profile');
        $image->move($destinationPath, $image_name);
        $input = User::find($id);
        $input->img = $image_name;
        $input->update();
        Alert::info('Horee', 'Foto Profile berhasil Update');
        return redirect()->back();
    }

}

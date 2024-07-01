<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::User();
        $search = request('search');
        $query = User::select('*');
        if(isset($search) && ($search !=null))
        {
            $query->where('name', 'like' , '%'  . $search . '%');
        }

        $users = $query->latest()->get();
        $data = [
            'users' => $users,
            'user' => $user
        ];
        return view('dashboard.user.index', $data);
    }


    public function store(Request $request){
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'role' => ['required'],
            ]);

            $input['name'] = $request->name;
            $input['email'] = $request->email;
            $input['password'] = Hash::make($request->password);
            $input['role'] = $request->role;

            User::create($input);
            Alert::success('Hore', 'User berhasil dibuat');
            return redirect()->back();
            } catch (\Exception $e) {
                return $e->getMessage();
            }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'role' => ['required'],
            ]);

            $input = User::find($id);
            $input->name = $request->input('name');
            $input->role = $request->input('role');
            $input->update();
            Alert::info('Hore', 'User berhasil diupdate');
            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }


    }

    public function Destroy($id){
        $file = User::where('id', $id)->first();
        $img = $file->img;
        if (!empty($img)) {
            Storage::disk('profile')->delete($img);
        }
        $file->delete();
        Alert::info('Delete', 'User Berhasil dihapus');
        return redirect()->back();
    }
}

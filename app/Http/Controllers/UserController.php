<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('crud_user/create_user');
    }

    public function update($id)
    {
        if($data=User::find($id)) {
            return view('crud_user/update_user',['data'=>$data]);
        } else {
            return redirect('/crud_user/read_user');
        }
    }

    public function edit(Request $request)
    {
        if($data=User::find($request->id)) {
            $data->name = $request->name;
            $data->email = $request->email;
            if ($request-> password !='') {
            $data['password'] = bcrypt($request->password);
            }
            $data->updated_at = now();
            $data->save();

            return redirect('/read_user')->with('pesan','Data dengan User : '.$request->id.' berhasil diupdate');
        } else {
            return redirect('/read_user')->with('pesan','Data tidak ditemukan/gagal diupdate');
        }
        
    }

    public function save(Request $request)
    {
        $validateData = $request->validate([
            'id'=>'required|between:0000,9999|unique:user,id',
            'name'=>'required|string|max:35',
            'email'=>'required|email',
            'password'=>'required|string|max:10',
        ]);

        $model = new User();
        $model->id = $request->id;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return view('crud_user/view_user',['data'=>$request->all()]);
    }

    public function read()
    {
        $model = new User();
        $dataAll=$model->all();
        return view('crud_user/read_user',['dataAll'=>$dataAll]);
    }

    public function delete($id)
    {
        $data = User::find($id);

        if ($data) {

            $data->delete();
        } else {
            return redirect('/read_user')->with('pesan', 'Data User : ' . $id . ' tidak ditemukan');
        }

        return redirect('/read_bk')->with('pesan', 'Data User:' . $id . ' Berhasil dihapus');
    }

    public function logout()
    {
        return view('logout');
    }
}

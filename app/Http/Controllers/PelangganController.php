<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Storage;

class PelangganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('crud_pelanggan/create_pl');
    }

    public function update($id)
    {
        if($data=Pelanggan::find($id)) {
            return view('crud_pelanggan/update_pl',['data'=>$data]);
        } else {
            return redirect('/read_pl');
        }
    }

    public function edit(Request $request)
    {
        if($data=Pelanggan::find($request->id)) {
            $data->nama = $request->nama;
            $data->telpon = $request->telpon;
            $data->email = $request->email;
            $data->alamat = $request->alamat;
            $data->updated_at = now();
            $data->save();

            return redirect('/read_pl')->with('pesan','Data dengan Pelanggan : '.$request->id.' berhasil diupdate');
        } else {
            return redirect('/read_pl')->with('pesan','Data tidak ditemukan/gagal diupdate');
        }
        
    }

    public function save(Request $request)
    {
        $validateData = $request->validate([
            'id'=>'required|unique:pelanggan,id',
            'nama'=>'required|string|max:35',
            'telpon'=>'required|max:15',
            'alamat'=>'required|min:6',
            'email'=>'required|email'
        ]);

        $model = new Pelanggan();
        $model->id = $request->id;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->telpon = $request->telpon;
        $model->email = $request->email;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return view('crud_pelanggan/view_pl',['data'=>$request->all()]);
    }

    public function read()
    {
        $model = new Pelanggan();
        $dataAll=$model->all();
        return view('crud_pelanggan/read_pl',['dataAll'=>$dataAll]);
    }

    public function delete($id)
    {
        $data = Pelanggan::find($id);

        if ($data) {
            $data->delete();
        } else {
            return redirect('/read_pl')->with('pesan', 'Data Pelanggan : ' . $id . ' tidak ditemukan');
        }

        return redirect('/read_pl')->with('pesan', 'Data Pelanggan:' . $id . ' Berhasil dihapus');
    }

    public function logout()
    {
        return view('logout');
    }
}

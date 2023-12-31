<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('crud_buku/create_bk');
    }

    public function update($id)
    {
        if($data=Buku::find($id)) {
            return view('crud_buku/update_bk',['data'=>$data]);
        } else {
            return redirect('/crud_buku/read_bk');
        }
    }

    public function edit(Request $request)
    {
        if($data=Buku::find($request->id)) {
            $data->judul = $request->judul;
            $data->persediaan = $request->persediaan;
            $data->pengarang = $request->pengarang;
            $data->penerbit = $request->penerbit;

            // Handle file upload
            if ($request->hasFile('gambar')) {
                // Delete existing file (if any)
                if ($data->gambar) {
                    Storage::delete($data->gambar);
                }

                // Store the new file
                $gambar = $request->file('gambar');
                $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->storeAs('public/gambar', $gambarName);
                $data->gambar = $gambarName;
            }

            $data->updated_at = now();
            $data->save();

            return redirect('/crud_buku/read_bk')->with('pesan','Data dengan Buku : '.$request->id.' berhasil diupdate');
        } else {
            return redirect('/crud_buku/read_bk')->with('pesan','Data tidak ditemukan/gagal diupdate');
        }
        
    }

    public function save(Request $request)
    {
        $validateData = $request->validate([
            'id'=>'required|between:0000,9999|unique:buku,id',
            'judul'=>'required|string|max:35',
            'gambar'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'persediaan'=>'required|integer|between:0,99',
            'pengarang'=>'required|string|max:25',
            'penerbit'=>'required|string|max:25'
        ]);

        $model = new Buku();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/gambar', $gambarName);
            $model->gambar = $gambarName;
        }

        $model->id = $request->id;
        $model->judul = $request->judul;
        $model->persediaan = $request->persediaan;
        $model->pengarang = $request->pengarang;
        $model->penerbit = $request->penerbit;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return view('crud_buku/view_bk',['data'=>$request->all()]);
    }

    public function read()
    {
        $model = new Buku();
        $dataAll=$model->all();
        return view('crud_buku/read_bk',['dataAll'=>$dataAll]);
    }

    public function delete($id)
    {
        $data = Buku::find($id);

        if ($data) {
            // Delete the associated file
            if ($data->gambar) {
                Storage::delete($data->gambar);
            }

            $data->delete();
        } else {
            return redirect('/crud_buku/read_bk')->with('pesan', 'Data User : ' . $id . ' tidak ditemukan');
        }

        return redirect('/crud_buku/read_bk')->with('pesan', 'Data User:' . $id . ' Berhasil dihapus');
    }

    public function logout()
    {
        return view('logout');
    }
}

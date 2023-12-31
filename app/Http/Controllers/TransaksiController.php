<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('crud_transaksi/create_tr');
    }

    public function update($id)
    {
        if($data=Transaksi::find($id)) {
            return view('crud_transaksi/update_tr',['data'=>$data]);
        } else {
            return redirect('/read_tr');
        }
    }

    public function edit(Request $request)
    {
        if($data=Transaksi::find($request->id)) {
            $data->id_buku= $request->id_buku;
            $data->id_pelanggan = $request->id_pelanggan;
            $data->jumlah = $request->jumlah;
            $data->total_harga = $request->total_harga;
            $data->updated_at = now();
            $data->save();

            return redirect('/read_tr')->with('pesan','Data dengan Transaksi : '.$request->id.' berhasil diupdate');
        } else {
            return redirect('/read_tr')->with('pesan','Data tidak ditemukan/gagal diupdate');
        }
        
    }

    public function save(Request $request)
    {
        $validateData = $request->validate([
            'id'=>'required|unique:pelanggan,id',
            'id_buku'=>'required|string|max:10',
            'id_pelanggan'=>'required|string|max:10',
            'jumlah'=>'required|between:1,99',
            'total_harga'=>'required|string|max:12'
        ]);

        $model = new Transaksi();
        $model->id = $request->id;
        $model->id_buku = $request->id_buku;
        $model->id_pelanggan = $request->id_pelanggan;
        $model->jumlah = $request->jumlah;
        $model->total_harga = $request->total_harga;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return view('crud_transaksi/view_tr',['data'=>$request->all()]);
    }

    public function read()
    {
        $model = new Transaksi();
        $dataAll=$model->all();
        return view('crud_transaksi/read_tr',['dataAll'=>$dataAll]);
    }

    public function delete($id)
    {
        $data = Transaksi::find($id);

        if ($data) {
            $data->delete();
        } else {
            return redirect('/read_tr')->with('pesan', 'Data Transaksi : ' . $id . ' tidak ditemukan');
        }

        return redirect('/read_tr')->with('pesan', 'Data Transksi:' . $id . ' Berhasil dihapus');
    }

    public function logout()
    {
        return view('logout');
    }
}

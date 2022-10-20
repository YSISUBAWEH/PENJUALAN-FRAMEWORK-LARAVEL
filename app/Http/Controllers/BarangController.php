<?php

namespace App\Http\Controllers;
use App\Models\Barang;
//tambah db
use DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
     public function index(){
        //$barang = Admin::all();
        $barang = DB::table('tbl_barang')
                ->select('tbl_barang.*','tbl_jenis.jenis_nama','tbl_suplayer.suplayer_nama')        
                ->join('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_barang.id_jenis')
                ->join('tbl_suplayer', 'tbl_suplayer.id_suplayer', '=', 'tbl_barang.id_suplayer')
                ->get();
            //tampilkan view barang dan kirim datanya ke view tersebut
        return view('barang/index',compact(['barang']));
    }
    public function create(){
        $jenis = DB::table('tbl_jenis')
        ->get();
         $suplayer = DB::table('tbl_suplayer')
         ->get();
        return view('barang/tambah',compact(['jenis']));
        return view('barang/tambah',compact(['suplayer']));
    }
    public function store(request $request){
        //dd($request);
        Barang::create([
            'id_barang' => $request->id_barang,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'id_jenis' => $request->id_jenis,
            'id_suplayer' => $request->id_suplayer,
            'harga_jual' => $request->harga_jual,
            'barang_status' => $request->barang_status
        ]);
        return redirect('barang');
    }
    public function edit($id){
        $admin = Admin::find($id);
        return view('barang/edit',compact(['barang']));
    }
    public function update($id, request $request){
        $barang = Barang::find($id);
        $barang->update($request->except('_token','Edit'));
        return redirect('barang');
    }
    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        $admin = Admin::all();    
            //tampilkan view barang dan kirim datanya ke view tersebut
        return view('admin/index',compact(['admin']));
    }
    public function create(){
        return view('admin/tambah');
    }
    public function store(request $request){
        //dd($request);
        Admin::create([
            'id_admin' => $request->id_admin,
            'username' => $request->username,
            'password' => $request->password,
            'admin_level' => $request->admin_level,
            'admin_nama' => $request->admin_nama,
            'admin_status' => $request->admin_status
        ]);
        return redirect('admin');
    }
    public function edit($id){
        $admin = Admin::find($id);
        return view('admin/edit',compact(['admin']));
    }
    public function update($id, request $request){
        $admin = Admin::find($id);
        $admin->update($request->except('_token','Edit'));
        return redirect('admin');
    }
    public function destroy($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('admin');
    }
}
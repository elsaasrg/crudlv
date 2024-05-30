<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('data',compact('data'));
    }

    public function tambahbarang(){
    
        return view('tambahbarang');
    }

    public function insertdata(Request $request)
    {
        $data = Employee::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
        }
        return redirect()->route('barang')->with('success','Data berhasil ditambahkan');
    }

    public function tampilkandata($id){
    { 
        $data = Employee::find($id);
            return view('tampildata',compact('data'));

    } 
    }

    public function updatedata(Request $request, $id){
        {
            $data = Employee::find($id);
            $data->update($request->all());
            return redirect()->route('barang')->with('success','Data berhasil di update');
        }

    }

    public function delete($id){
        {
            $data = Employee::find($id);
            $data->delete();
            return redirect()->route('barang')->with('success','Data berhasil dihapus');
        }
    }
}


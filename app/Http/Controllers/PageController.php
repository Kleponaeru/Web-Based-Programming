<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;


class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }
    public function students()
    {
        $mhs = Mahasiswa::orderBy('id', 'desc')->paginate(5);
        return view('students', ['key' => 'students', 'mhs' => $mhs]);
    }
    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }
    public function search(Request $request)
    {
        $cari = $request->q;
        $mhs = Mahasiswa::where('nama', 'like', '%' . $cari . '%')
        ->orWhere('nim', 'like', '%' . $cari . '%')->paginate(5);
        $mhs->appends($request->all());
        return view('students', ['key' => 'students', 'mhs' => $mhs]);

    }
    public function save(Request $request)
    { // delimiter
        $minat = implode(", ", $request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $minat
        ]);
        return redirect('students')->with('flash', 'Data Successfully Added');
    }
    public function formadd()
    {
        return view('formadd', ['key' => 'students', '']);
    }
    public function formedit($id){
        $mhs = Mahasiswa::find($id);
        return view('formedit', ['key' => 'students', 'mhs' => $mhs, '']);
    }
    public function update($id, Request $request){
        $minat = implode(", ", $request->get('minat'));
        $mhs = Mahasiswa::find($id);
        $mhs -> nim = $request-> nim;
        $mhs -> nama = $request-> nama;
        $mhs -> gender = $request-> gender;
        $mhs -> prodi = $request-> prodi;
        $mhs -> minat = $minat;
        $mhs -> save();
        //kiri model kanan name view
   
        return redirect('students')->with('flash', 'Data Successfully Edited');
    }
    public function delete($id){
        $mhs = Mahasiswa::find($id);
        $mhs -> delete();

        return redirect('students')->with('flash', 'Data Successfully Deleted');
    }
    
}
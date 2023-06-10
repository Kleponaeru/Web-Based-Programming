<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MhsApiController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            "success" => true,
            "message" => "Sucessfully Getting Data",
            "data" => $mhs
        ], 200);
    }
    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);
        if ($mhs) {
            return response()->json([
                "success" => true,
                "message" => "Data Successfully Added",
                "data" => $mhs
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Failed to Add Data",
            ], 400);
        }

    }
    public function delete($id)
    {
        $mhs = Mahasiswa::find($id)->delete();
        if ($mhs) {
            return response()->json([
                "success" => true,
                "message" => "Data Successfully Deleted",
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Failed to Delete Data",
            ], 400);
        }
    }
    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if ($mhs) {
            return response()->json([
                "success" => true,
                "message" => "Data Successfully Edited",
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Failed to Edit Data",
            ], 400);
        }
    }
}
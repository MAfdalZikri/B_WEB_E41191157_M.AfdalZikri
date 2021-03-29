<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //di sini isi controller Management User
    public function index(){
        //return "Method untuk Mengambil Semua Data User";
        $nama = "Arvita Agus Kurniasari";
        $pelajaran = ["Algoritma & Pemograman","kalkulus","Pemograman Web"];

        return view('home', compact('nama','pelajaran'));
    }

    public function create(){
       // return "Method untuk Menampilkan Form untuk Menambah Data User";
    }

    public function store(){
        //return "Method untuk Menciptakan Data User yang Baru";
    }

    public function show($id){
        //return "Method untuk Mengambil Satu Data User dengan ID=" . $id;
    }

    public function edit($id){
        //return "Method untuk Menampilkan Form untuk Mengubah Data Edit dengan ID=" . $id;
    }

    public function update(Request $request, $id){
        //return "Method untuk Mengubah Data User dengan ID=" . $id;
    }

    public function destroy($id){
        //return "Method untuk Menghapus Data User dengan ID= " . $id;
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index(){
        $karyawan =
        [
           "karyawan1" => ['Wawan', 'Digital Marketing', 10000000, 4],
           "karyawan2" => ['Budi', 'Web Developer', 8000000, 3],
           "karyawan3" => ['Karyo', 'Admin', 5000000, 2],
           "karyawan4" => ['Ikhsan', 'Office Boy', 4000000, 3],
           "karyawan5" => ['Juleha', 'Data Analis', 7000000, 5],
        ];
        return view('admin.tampil', compact('karyawan'));
    }
}

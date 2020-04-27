<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakaryawanController extends Controller
{
    public function data(){
        $karyawan = collect([
            [1,'Siska', 'Marketing' , 5000000, 4],
            [2,'Habib', 'Frontend Developer' , 10000000, 3],
            [3,'Rizal', 'Fullstack Developer', 7000000, 5],
            [4,'Imam', 'Backend Developer', 10000000, 3],
            [5,'Andini', 'Design Graphic', 6000000, 4],
            [6,'Chika', 'HRD', 11000000, 10],
            [7,'Mahpud', 'Design Graphic', 12000000, 11],
            [8,'Dedy', 'Digital Marketing', 14000000, 12],
            [9,'Iqbal', 'Fullstack Developer', 20000000, 14],
            [10,'Jono', 'Design Graphic', 14000000, 12],
        ]);
        return view('admin.konten')->with('karyawan', $karyawan);
    }
}

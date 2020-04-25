<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakaryawanController extends Controller
{
    public function data(){
        $Data = collect([
            ['Siska', 'Marketing' , 5000000, 4],
            ['Habib', 'Frontend Developer' , 10000000, 3],
            ['Rizal', 'Fullstack Developer', 7000000, 5],
            ['Imam', 'Backend Developer', 10000000, 3],
            ['Andini', 'Design Graphic', 6000000, 4],
            ['Chika', 'HRD', 11000000, 10],
            ['Mahpud', 'Design Graphic', 12000000, 11],
            ['Dedy', 'Digital Marketing', 14000000, 12],
            ['Iqbal', 'Fullstack Developer', 20000000, 14],
            ['Jono', 'Design Graphic', 14000000, 12],
        ]);
        return view('admin.konten')->with('Data', $Data);
    }
}

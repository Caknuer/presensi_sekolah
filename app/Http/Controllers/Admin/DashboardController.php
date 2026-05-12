<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();
        $totalKelas = Kelas::count();

        return view('admin.dashboard.index', compact(
            'totalSiswa',
            'totalKelas'
        ));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kelas;
use App\Reservation;
use App\Siswa;
use App\Spp;

class DashboardController extends Controller
{
    public function index(){
        $siswaCount = Siswa::count();
        $kelasCount = Kelas::count();
        $reservations = Reservation::where('status',true)->get();
        $contactCount = Contact::count();
        $sppCount = Spp::count();
        return view('admin.dashboard',compact('siswaCount','kelasCount','contactCount','reservations','sppCount'));
    }
}

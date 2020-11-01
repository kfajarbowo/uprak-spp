<?php

namespace App\Http\Controllers;

use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'bulan' => 'required',
            'class' => 'required',
            'email' => 'required|email',
            'dateandtime' => 'required',
        ]);
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->bulan = $request->bulan;
        $reservation->class = $request->class;
        $reservation->email = $request->email;
        $reservation->date_and_time = $request->dateandtime;
        $reservation->status = false;
        $reservation->save();
        Toastr::success('Pembayaran Berhasil. Kita akan confirm secepatnya','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}

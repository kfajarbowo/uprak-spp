<?php

namespace App\Http\Controllers\Admin;

use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationConfirmed;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }
    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
         Notification::route('mail',$reservation->email )
              ->notify(new ReservationConfirmed());
        Toastr::success('Pembayaran berhasil dikonfirmasi.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function destroy($id){
     Reservation::find($id)->delete();
     Toastr::success('Data berhasil didelete.','Success',["positionClass" => "toast-top-right"]);
     return redirect()->back();
    }
}

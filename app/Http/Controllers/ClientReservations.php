<?php

namespace App\Http\Controllers;

use App\Reservation;
use DB;
use Auth;
use Illuminate\Http\Request;

class ClientReservations extends Controller
{
    public function index()
    {
        return view('clientReservation');
    }

    public function get_data()
    {
        $query = DB::table('reservation')
            ->join('users', 'reservation.user_id', '=' , 'users.id')
            ->join('rooms', 'reservation.room_id', '=', 'rooms.id')
            ->select('reservation.paidPrice', 'reservation.clientAccompanyNumber', 'rooms.number', 'users.id')
            ->where('users.id', '=', Auth::guard('user')->user()->id )
            ->get();
        return datatables()->of($query)->toJson();

    }
}
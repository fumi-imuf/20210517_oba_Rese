<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReservationsController extends Controller
{
    public function index(Request $request) {
        $items = DB::table('reservations')->get();
        return response()->json([
            'message' => 'OK',
            'data' => $items
        ], 200);
    }
    public function post(Request $request) {
        $now = Carbon::now();
        $param = [
            "user_id" => $request->user_id,
            "shop_id" => $request->shop_id,
            "reservation_date" => $request->reservation_date,
            "reservation_time" => $request->reservation_time,
            "reservation_number" => $request->reservation_number,
            "created_at" => $now,
            "updated_at" => $now
        ];
        DB::table('reservations')->insert($param);
        return response()->json([
            'message' => 'Reservation created successfully',
            'data' => $param
        ], 200);
    }
    public function delete(Request $request) {
        DB::table('reservations')
        ->where('user_id', $request->user_id)
        ->where('shop_id', $request->shop_id)
        ->where('reservation_date', $request->reservation_date)
        ->where('reservation_time', $request->reservation_time)
        ->where('reservation_number', $request->reservation_number)->delite();
        return response()->json(['message' => 'Reservation deleted successfully'], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreasController extends Controller
{
    public function index(Request $request) {
        $items = DB::table('areas')->get();
        return response()->json([
            'message' => 'OK',
            'data' => $items
        ], 200);
    }
}

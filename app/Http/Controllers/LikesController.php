<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikesController extends Controller
{
    public function post(Request $request) {
        $param = [
            "shop_id" => $request->shop_id,
            "user_id" => $request->user_id
        ];
        DB::table('likes')->insert($param);
        return response()->json([
            'message' => 'Like created successfully',
            'data' => $param
        ], 200);
    }
    public function delete(Request $request) {
        DB::table('likes')->where('shop_id', $request->shop_id)->where('user_id', $request->user_id)->delete();
        return response()->json(['message' => 'Like deleted successfully'], 200);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\API\ResponseFormatter;


class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $product = transaction::with(['details.product'])->find($id);

        if($product)
            return ResponseFormatter::success($product, 'Data transaksi berhasil diambil');

        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}

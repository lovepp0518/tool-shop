<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Ycs77\NewebPay\Facades\NewebPay;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        return view('order.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {

        $request->validate([
            'quantity' => ['required', 'integer', 'min:1', 'max:10'],
        ]);

        $user = Auth::user();
        $orderNumber = Carbon::now()->timestamp;
        $orderTotalPrice = $product->price * $request->quantity;
        $orderDescription = $product->name.' * '.$request->quantity;

        // 建立訂單
        Order::create([
            'number' => $orderNumber,
            'status' => OrderStatus::PENDING,
            'user_id' => $user->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total_price' => $orderTotalPrice,
        ]);

        // 導向藍新金流付款頁面
        return NewebPay::payment(
            $orderNumber, // 訂單編號
            $orderTotalPrice, // 交易金額
            $orderDescription, // 交易描述
            $user->email // 付款人信箱
        )->emailModify(false) // 付款人信箱不可修改
            ->submit();
    }
}

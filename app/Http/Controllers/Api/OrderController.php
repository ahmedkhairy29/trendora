<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return response()->json($orders);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'total' => 'required|numeric',
            'status' => 'required|string'
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $request->total,
            'status' => $request->status
        ]);

        return response()->json($order, 201);
    }

  
    public function show($id)
    {
        $order = Order::where('user_id', Auth::id())->findOrFail($id);
        return response()->json($order);
    }

    
    public function update(Request $request, $id)
    {
        $order = Order::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'total' => 'sometimes|numeric',
            'status' => 'sometimes|string'
        ]);

        $order->update($request->all());

        return response()->json($order);
    }

    
    public function destroy($id)
    {
        $order = Order::where('user_id', Auth::id())->findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully']);
    }
}

<?php

namespace Scar\Http\Controllers;

use Illuminate\Http\Request;

use Scar\Http\Requests;
use Scar\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Scar\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('client')->get();

        return view('orders', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date'         => 'required|date',
            'table_number' => 'required',
            'total'        => 'required',
        ]);

        if ($validator->fails())
        {
            return redirect()
            ->route('order_create_path')
            ->withErrors($validator)
            ->withInput();
        }

        $order = new Order;
        $order->date = $request->get('date');
        $order->table_number = $request->get('table_number');
        $order->total = $request->get('total');
        //$order->client_id = 12;
        $order->save();

        return redirect()->route('order_show_path', $order->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('orders.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->date = $request->get('date');
        $order->table_number = $request->get('table_number');
        $order->total = $request->get('total');
        $order->save();

        return redirect()->route('order_show_path', $order->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        
        return redirect()->route('orders_path');
    }
}

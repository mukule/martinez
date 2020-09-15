<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;

class OrdersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = order::all();
       //  return view('orders.index')->with('orders', $orders);
       $orders = order::orderBy('created_at','desc')->paginate(2);
        return view('orders.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
          
            'level' => 'required',
            'type' => 'required',
            'subject' => 'required',
            'title' => 'required',
            'instructions' => 'required',
            'pages' => 'required',
            'sources' => 'required',
            'slides' => 'required'
        ]);
         //create post
         $order = new order;
         $order->user_id = auth()->user()->id;
         $order->level = $request->input('level');
         $order->type = $request->input('type');
         $order->subject = $request->input('subject');
         $order->title = $request->input('title');
         $order->instructions = $request->input('instructions');
         $order->pages = $request->input('pages');
         $order->sources = $request->input('sources');
         $order->slides = $request->input('slides');
         $order->save();

        //redirect
        return redirect('/orders')->with('success', 'order Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = order::find($id);
        return view('orders.show')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = order::find($id);
        // Check for correct user
        if(auth()->user()->id !==$order->user_id){
            return redirect('/orders')->with('error', 'Unauthorized Page');
        }
        return view('orders.edit')->with('order', $order);
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
        $this->validate($request, [
          
            'level' => 'required',
            'type' => 'required',
            'subject' => 'required',
            'title' => 'required',
            'instructions' => 'required',
            'pages' => 'required',
            'sources' => 'required',
            'slides' => 'required'
        ]);
         //update order
         $order = order::find($id);
         $order->level = $request->input('level');
         $order->type = $request->input('type');
         $order->subject = $request->input('subject');
         $order->title = $request->input('title');
         $order->instructions = $request->input('instructions');
         $order->pages = $request->input('pages');
         $order->sources = $request->input('sources');
         $order->slides = $request->input('slides');
         $order->save();

        //redirect
        return redirect('/orders')->with('success', 'order updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::find($id);
          // Check for correct user
          if(auth()->user()->id !==$order->user_id){
            return redirect('/orders')->with('error', 'Unauthorized Page');
        }
        $order->delete();
        return redirect('/orders')->with('success', 'Order deleted');
    }
}

<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Cartalyst\Stripe\Laravel\Facades\Stripe;



class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::count() < 1) {
            return redirect()->route('product.index');
        }
    }

    public function charge(Request $request)
    {
        // return dd($request->stripeToken);
        $charge = Stripe::charges()->create([
            'amount' =>  $request->montant,
            'currency' => 'USD',
            'description' => 'test from larave',
            'source' => $request->stripeToken,
        ]);

        $chargeId = $charge['id'];
        if ($chargeId) {
            return redirect()->route('product.index')->with('success', 'Le paiment a été faite avec succsses');
        } else {

            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Cart::destroy();
        $data = $request->json()->all();
        return $data['paymentIntent']['amount'];*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

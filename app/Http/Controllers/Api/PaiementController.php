<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Paiement as ModelsPaiement;
use App\paiement;
use App\Services\FedaPayService as ServicesFedaPayService;
use FedaPayService;
use Illuminate\Http\Request;
use Fedapay\Fedapay;
use Fedapay\Transaction;

class PaiementController extends Controller
{

    public function getTransaction($transactionId){
        try {
        $getTransalations = ServicesFedaPayService::checkedTransaction($transactionId);
        return response()->json($getTransalations, 200);
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 200);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    {    //
       try {
        $paiement = ServicesFedaPayService::createTransaction($request);

      //  dd($paiement);
        return response()->json($paiement, 200);

       } catch (\Exception $ex) {
           //throw $th;
        return response()->json($ex->getMessage(), 400);

       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(paiement $paiement)
    {
        //
    }
}

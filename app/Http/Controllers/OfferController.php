<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Auction;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data=$request->validate([
            'price'=>'required|numeric|min:0.5',
            'auction_id'=>'required'
        ]);

        $data['user_id']=auth()->id();
        $auctionId = $request->input('auction_id');

        $auction_user_id = Auction::where('id', $auctionId)->value('user_id');
        
        if($auction_user_id===$data['user_id']){

            $request->session()->flash('alertType','danger');
            $request->session()->flash('alertMsg','You cannot make the offer you are the owner!');
            return redirect()->back();
        }

        $offer = new Offer();
        $offer->fill($data);
        $offer->auction_id = $auctionId; 
        $offer->save();

        $request->session()->flash('alertType','success');
        $request->session()->flash('alertMsg','Congratulations, you have successfully bid!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}

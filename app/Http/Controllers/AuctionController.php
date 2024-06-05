<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $categories = Category::all();
        $subcategories= Subcategory::all();
        $conditions = Condition::all();
      
        return view('auction.create', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'conditions'=> $conditions
            
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'short_description'=>'required|max:200',
            'description'=>'required',
            'started_price'=>'required|numeric',
            'expiry_time'=>'required',
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'condition_id'=>'required',
        ]);

       

        $data['user_id']=auth()->id();
        //$data['expiry_time']=Carbon::createFromFormat('Y-m-d', $data['expiry_time'])->timestamp;
      
        $auction=Auction::create($data);

        if($request->has('images')){
            foreach($request->file('images') as $image){
                $img_name = 'user-'.auth()->id().$data['name'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $imagePath = $image->storeAs('auction_images', $img_name, 'public');
                Image::create([
                    'auction_id' => $auction->id,
                    'img_path' => $img_name
                ]);
            }
            

            return back()->with('success', 'Uspesno');
           
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Auction $auction)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auction $auction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auction $auction)
    {
        //
    }
}

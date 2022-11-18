<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Photo;
use App\Helper\Helper;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $property_type = null, $listing_type = "for_sale", $state = null, $city = null, $zipcode = null)
    {
        $min_beds = (is_null($request->input('min_beds'))) ? 0 : $request->input('min_beds');
        $max_beds = (is_null($request->input('max_beds'))) ? 100 : $request->input('max_beds');        
        $min_baths = (is_null($request->input('min_baths'))) ? 0 : $request->input('min_baths');
        $max_baths = (is_null($request->input('max_baths'))) ? 100 : $request->input('max_baths');        
        // $min_price = (is_null($request->input('min_price'))) ? 0 : $request->input('min_price');
        // $max_price = (is_null($request->input('max_price'))) ? 1000000000 : $request->input('max_price');        
        $min_sqft = (is_null($request->input('min_sqft'))) ? 100 : $request->input('min_sqft');
        $max_sqft = (is_null($request->input('max_sqft'))) ? 10000000 : $request->input('max_sqft');



        $filters = [
            // 'property_type' => $property_type,
            // 'listing_type' => $listing_type,
            'state' => $state,
            'city' => $city,
            'zipcode' => $zipcode
        ];

        // $listings = Listing::where($filters);
        $listings = DB::table('listings')
            ->where(function($query) use($filters){
                foreach($filters as $column => $value) {
                    if (!is_null($value)) {
                        $query->where($column, $value);
                    }
                }
            })
            ->where("status", "published")
            ->whereBetween("bedrooms", [$min_beds, $max_beds])
            ->whereBetween("bathrooms", [$min_baths, $max_baths])
            ->whereBetween("squarefootage", [$min_sqft, $max_sqft])
            // ->whereBetween("price", [$min_price, $max_price])
            ->get();

        return $listings;

        return view('pages.listings', ['listings' => $listings]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $id)
    {
        $listing = Listing::where([
            'id' => $id,
            'slug' => $slug
        ])->first();
        
        
        $photos = Photo::where([
            'listing_id' => $id
        ])->get();

        return view('pages.single-listing', [
            "listing" => $listing,
            "photos" => $photos,
            "slug" => $slug,
            "id" => $id
        ]);
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

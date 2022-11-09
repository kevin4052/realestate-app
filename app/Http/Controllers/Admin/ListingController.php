<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Helper\Helper;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::where('user_id', auth()->user()->id)->paginate(5);
        return view('admin.listings.index', [
            'listings' => $listings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Listing::class);
        return view('admin.listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Listing::class);

        request()->validate([
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required|integer',
        ]);

        $listing = new Listing;
        $listing->user_id = auth()->user()->id;
        $listing->address = $request->get('address');
        $listing->address2 = $request->get('address2');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');
        $listing->description = $request->get('description');
        $listing->status = 'draft';
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}"); 
        $listing->save();

        session()->flash('success', 'Created new listing!');
        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit");
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
    public function edit($slug, $id)
    {
        
        $listing = Listing::where([
            'id' => $id,
            'slug' => $slug
        ])->first();
            
        $this->authorize('update', $listing);

        // dd($listing->address);
        return view('admin.listings.edit', ["listing" => $listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug, $id)
    {
        request()->validate([
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required|integer',
        ]);

        $listing = Listing::where([
            'id' => $id,
            'slug' => $slug
        ])->first();

        $this->authorize('update', $listing);

        $listing->address = $request->get('address');
        $listing->address2 = $request->get('address2');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');
        $listing->description = $request->get('description');
        $listing->status = $request->get('status');
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}"); 
        $listing->save();

        session()->flash('success', 'Listing has been updated!');
        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
        $listing = Listing::find($id);
        $this->authorize('delete', $listing);
        $listing->delete();

        session()->flash('success', 'Listing has been deleted');
        return redirect("/admin/listings");
    }
}

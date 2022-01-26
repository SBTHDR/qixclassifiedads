<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreListingRequest;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::paginate(5);
        return view('listings.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListingRequest $request, FlasherInterface $flasher)
    {
        
        $featured_image = $request->file('featured_image')->store('public/uploads/listings');
        $image_one = $request->file('image_one')->store('public/uploads/listings');
        $image_two = $request->file('image_two')->store('public/uploads/listings');
        $image_three = $request->file('image_three')->store('public/uploads/listings');

        Listing::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'child_category_id' => $request->child_category_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'price_negotiable' => $request->price_negotiable,
            'condition' => $request->condition,
            'location' => $request->location,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'phone_number' => $request->phone_number,
            'is_published' => $request->is_published,
            'featured_image' => $featured_image,
            'image_one' => $image_one,
            'image_two' => $image_two,
            'image_three' => $image_three,
        ]);

        $flasher->addSuccess('Listing Created Successfully!');
        return redirect()->route('listings.index');
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
    public function edit(Listing $listing)
    {
        return view('listings.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreListingRequest $request, $id, FlasherInterface $flasher)
    {
        $listing = Listing::findOrFail($id);

        $featured_image = $listing->featured_image;
        $image_one = $listing->image_one;
        $image_two = $listing->image_two;
        $image_three = $listing->image_three;

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image')->store('public/uploads/listings');
        }

        if ($request->hasFile('image_one')) {
            $image_one = $request->file('image_one')->store('public/uploads/listings');
        }

        if ($request->hasFile('image_two')) {
            $image_two = $request->file('image_two')->store('public/uploads/listings');
        }

        if ($request->hasFile('image_three')) {
            $image_three = $request->file('image_three')->store('public/uploads/listings');
        }
    
        $listing->update([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'child_category_id' => $request->child_category_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'price_negotiable' => $request->price_negotiable,
            'condition' => $request->condition,
            'location' => $request->location,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'phone_number' => $request->phone_number,
            'is_published' => $request->is_published,
            'featured_image' => $featured_image,
            'image_one' => $image_one,
            'image_two' => $image_two,
            'image_three' => $image_three,
        ]);

        $flasher->addInfo('Listing Updated Successfully!');
        return redirect()->route('listings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing, FlasherInterface $flasher)
    {
        Storage::delete($listing->featured_image);
        Storage::delete($listing->image_one);
        Storage::delete($listing->image_two);
        Storage::delete($listing->image_three);

        $listing->delete();

        $flasher->addInfo('Listing Deleted Successfully!');
        return redirect()->route('listings.index');
    }
}

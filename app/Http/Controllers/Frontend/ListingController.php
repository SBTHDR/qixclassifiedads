<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Listing;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class ListingController extends Controller
{
    public function index()
    {
        $listings = QueryBuilder::for(Listing::class)
        ->allowedFilters([
            'title',
            AllowedFilter::exact('country_id'),
            AllowedFilter::exact('category_id'),
            AllowedFilter::scope('max_price'),
        ])
        ->get();

        return view('frontend.all-listings', compact('listings'));
    }

    public function welcome()
    {
        $categories = Category::take(6)->get();
        $featured_ads = Listing::take(3)->latest()->where('is_published', true)->get();

        return view('welcome', compact('categories', 'featured_ads'));
    }
}

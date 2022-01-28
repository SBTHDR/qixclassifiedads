<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Listing;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pricing()
    {
        return view('frontend.pricing');
    }

    public function contact($id)
    {
        $listing = Listing::findOrFail($id);
        return view('frontend.contact', compact('listing'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Listing;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\ChildCategory;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $listings = Listing::all();
        $categories = Category::all();
        $countries = Country::all();
        return view('dashboard', compact('users', 'listings', 'categories', 'countries'));
    }
}

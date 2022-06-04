<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
    //show all listings
    public function index()
    {
        return view('listings.index', [

            'listings' => Listing::latest()->filter(request(['tag']))->get()
         ]); //for array of tags because we need array of filters in the model function
        //'listings' => Listing::latest()->filter(request('tag'))->get()]); for single tag
        //this is the same as 'listings' => Listing::all()

    }

    public function create(){
        return view('listings.create');
    }
    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listings' => $listing,
        ]);

    }

    //store Listing Data
    public function store(Request $request){
        dd($request->all());

    }
}

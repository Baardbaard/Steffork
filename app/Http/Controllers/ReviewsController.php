<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}

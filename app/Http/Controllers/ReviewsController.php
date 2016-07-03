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

    public function store(Request $request, Review $review)
    {
        $review = new Review([
            'title' => $request->title,
            'rating' => $request->rating
        ]);

        $review->save();

        return back();
    }

    public function destroy(Request $request, Review $review)
    {
        $review->delete();

        return back();
    }

    public function edit(Request $request, Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $review->title = $request->title;
        $review->rating = $request->rating;

        $review->save();

        return redirect()->route('reviews');
    }
}

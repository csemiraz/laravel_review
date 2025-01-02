<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'comment' => 'required',
            'status' => 'required',
        ]);

        $review = new Review();
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->status = $request->status;
        $review->save();

        return redirect()->back()->with('success', 'Review added successfully.');
    }

    public function index()
    {
        $reviews = Review::latest()->get();
        return view('review', compact('reviews'));
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }


}

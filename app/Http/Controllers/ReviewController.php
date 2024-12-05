<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
   
    public function store(Request $request, $bookId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string',
        ]);

        $book = Book::findOrFail($bookId);

        $review = new Review([
            'name' => $request->name,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        $book->reviews()->save($review);

        return redirect()->route('books.show', $bookId); 
    }


 public function index($bookId)
{
    $book = Book::with('reviews')->findOrFail($bookId);

    return view('reviews.index', compact('book')); 
}

}


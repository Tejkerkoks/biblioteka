<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
	public function store(Request $request)
	{
		$validated = $request->validate([
			'title' => 'required|string|max:255',
			'author' => 'required|string|max:255',
			'publication_year' => 'required|integer|min:1000|max:' . date('Y'),
			'description' => 'nullable|string',
		]);
	
		$book = Book::create($validated);

		return response()->json($book, 201);
	}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
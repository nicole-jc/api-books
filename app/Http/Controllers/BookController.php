<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Exception;

class BookController extends Controller
{
    public function index(){

        $books = Book::orderBy('id')->get(); // Get registers from DB

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $books,
                'links' => [
                    [
                        'rel' => 'all',
                        'href' => url('/api/books'), // link to get all books
                        'method' => 'GET'
                    ], [
                        'rel' => 'create',
                        'href' => url('/api/books/'), // link to create a new book
                        'method' => 'POST'
                    ], [
                        'rel' => 'show',
                        'href' => url('/api/books/{id}'), // link to show a book
                        'method' => 'GET'
                    ], [
                        'rel' => 'update',
                        'href' => url('/api/books/{id}'), // link to edit a book
                        'method' => 'PUT'
                    ], [
                        'rel' => 'delete',
                        'href' => url('/api/books/{id}'), // link to delete a book
                        'method' => 'DELETE'
                    ]

                ]
            ], 200);
        }

        return view('books.books', ['books' => $books]); // Load view to return all books 

    }

    public function store(BookRequest $request) {
        
        try {
            // Create new book
            Book::create([
                'title' => $request->title,
                'author' => $request->author,
                'genre' => $request->genre,
                'year' => $request->year,
                'available' => 1,
            ]);
            // Web return
            if (!request()->wantsJson()) {
                return redirect()->route('newbook')->with('success', 'Book registred successfully');
            }
                // API return
                return response()->json(['message' => 'Book registred succesfully!'], 201);
            } 
                catch(Exception $e) {
                // Web return for errors
                if (!request()->wantsJson()) {
                return back()->withInput()->with('error', 'User not registered');
            }
                // API return for errors
                return response()->json(['error' => 'Register failed', 'message' => $e->getMessage()], 500);
    }
}
    public function show(Book $book) {

        if (request()->wantsJson()) {
            return response()->json([$book, 
            'links' =>
            [
                [
                    'rel' => 'all',
                    'href' => url('/api/books'), // link to get all books
                    'method' => 'GET'
                ], [
                    'rel' => 'create',
                        'href' => url('/api/books'), // link to create a new book
                        'method' => 'POST'
                ], [
                    'rel' => 'show',
                    'href' => url('/api/books/' . $book->id), // link to show a book
                    'method' => 'GET'
                ], [
                        'rel' => 'update',
                        'href' => url('/api/books/' . $book->id), // link to edit a book
                        'method' => 'PUT'
                ], [
                        'rel' => 'delete',
                        'href' => url('/api/books/' . $book->id), // link to delete a book
                        'method' => 'DELETE'
                ]
            ]],); // return json with $book data
        }

        return view('books.book', ['book' => $book]); // return book view with $book data
    }

    public function update(BookRequest $request, Book $book) {
        
    try {
        // Edit info in DB
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'year' => $request->year,
            'available' => $request->available,
        ]);

        // Web return
        if (!request()->wantsJson()){
            return redirect()->route('book.edit.view', $book->id)->with('success', 'User updated succesfully!');
        }

        // API return
        return response()->json(['message' => 'Book updated succesfully!', 'book' => $book], 200);

    } catch (Exception $e) {
        // Web return for errors
        if (!request()->wantsJson()) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

        // API return for errors
        return response()->json(['error' => 'Update failed', 'message' => $e->getMessage()], 500);
    }

    }

    public function destroy(Book $book) {

        $book->delete();

        // Web return
        if (!request()->wantsJson()) {
            return redirect()->route('books')->with('success', 'Book succesfully deleted!');
        }
        // API return
        return response()->json(['message' => 'Book succesfully deleted!'], 200);
    }

}

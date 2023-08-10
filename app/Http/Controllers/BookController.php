<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::All();
        return view('books.index',['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author = Author::All();
        $book = new Book();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->id_author = $request->id_author;
        $check =[];
        foreach($author as $author) 
        {
            array_push($check,$author->id);
            echo $author->id;
        }
        if(in_array($author->id,$check))
        {
        $book->save();
        return redirect('/books');
        }
        else
        {
        return redirect('/books');
        }
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

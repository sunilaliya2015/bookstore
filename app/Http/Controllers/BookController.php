<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books=Book::all();
       return view('home')->with('books', $books);
    }
    public function indexFront()
    {
       $books=Book::all();
       return view('welcome')->with('books', $books);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $books= Book::create([
            "title" => $request->title,
            "author" => $request->author,
            "genre" => $request->genre,
            "isbn" => $request->isbn,
            "publisher" => $request->publisher
        ]);
        if($books)
        {
            return redirect()->back()->with('message', 'Successfully Saved');
        }
        else{
            return redirect()->back()->with('message', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books=Book::find($id);
        return view('book-show')->with('books', $books);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books=Book::find($id);
        return view('book-edit')->with('books', $books);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $books = Book::where("id", $id)->update([
            "title" => $request->title,
            "author" => $request->author,
            "genre" => $request->genre,
            "isbn" => $request->isbn,
            "publisher" => $request->publisher,
    ]);
        if($books)
        {
            return redirect()->back()->with('message', 'Successfully updated');
        }
        else{
            return redirect()->back()->with('message', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books=Book::find($id);
        $books->delete();
        return redirect()->back();
        
    }
}

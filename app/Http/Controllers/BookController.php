<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;



class BookController extends Controller
{
    //
    public function index()
    {
        //return 'books';

        $data = Book::all();
        return view('book.index',['books'=>$data]);

    }
}

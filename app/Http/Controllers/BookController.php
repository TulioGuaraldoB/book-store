<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAll()
    {
        return response()->json($this->bookRepository->getAll());
    }

    public function getBook($id)
    {
        return response()->json($this->bookRepository->getBook($id));
    }

    public function createBook(Request $request)
    {
        return response()->json($this->bookRepository->createBook($request));
    }

    public function updateBook($id, Request $request)
    {
        return response()->json($this->bookRepository->updateBook($id, $request));
    }

    public function deleteBook($id)
    {
        $this->bookRepository->deleteBook($id);

        return response()->json('Book deleted successfully!', 200);
    }
}

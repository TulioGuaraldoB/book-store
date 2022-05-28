<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    public function __construct(Book $bookModel)
    {
        $this->bookModel = $bookModel;
    }

    public function getAll()
    {
        try {
            $books = $this->bookModel::all();

            return $books;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function getBook($id)
    {
        try {
            $book = $this->bookModel::find($id);

            return $book;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function createBook($request)
    {
        try {

            $book = $this->bookModel::create($request->all());

            return $book;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function updateBook($id, $request)
    {
        try {
            $book = $this->bookModel::findOrFail($id);
            $book->update($request->all());

            return $book;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function deleteBook($id)
    {
        try {
            Book::findOrFail($id)
                ->delete();
        } catch (\Exception $ex) {
            return $ex;
        }
    }
}

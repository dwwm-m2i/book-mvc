<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Book;
use M2i\Mvc\View;

class BookController
{
    public function index()
    {
        $books = Book::fake();

        return View::render('books/index', [
            'books' => $books,
        ]);
    }

    public function show($id)
    {
        $book = Book::fake($id);

        if (! $book) {
            return View::notFound();
        }

        return View::render('books/show', [
            'book' => $book,
        ]);
    }
}

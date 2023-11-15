<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Book;
use M2i\Mvc\View;

class BookController
{
    public function index()
    {
        // $books = Book::fake();
        $books = Book::all();

        return View::render('books/index', [
            'books' => $books,
        ]);
    }

    public function show($id)
    {
        // $book = Book::fake($id);
        $book = Book::find($id);

        if (! $book) {
            return View::notFound();
        }

        return View::render('books/show', [
            'book' => $book,
        ]);
    }

    public function create()
    {
        $book = new Book();
        $book->title = $_POST['title'] ?? null;
        $book->price = $_POST['price'] ?? null;
        $book->discount = $_POST['discount'] ?? null;
        $book->isbn = $_POST['isbn'] ?? null;
        $book->author = $_POST['author'] ?? null;
        $book->published_at = $_POST['published_at'] ?? null;
        $book->image = 'uploads/06.jpg';
        $errors = [];

        if (! empty($_POST)) {
            if (empty($book->title)) {
                $errors['title'] = 'Le titre est invalide.';
            }

            if (!($book->price > 1 && $book->price < 100)) {
                $errors['price'] = 'Le prix doit être entre 1 et 100.';
            }

            if (!empty($book->discount) && !($book->discount > 0 && $book->discount < 100)) {
                $errors['discount'] = 'La promotion doit être entre 0 et 100.';
            }

            if (! in_array(strlen($book->isbn), [10, 13])) {
                $errors['isbn'] = 'Le code ISBN doit faire 10 ou 13 caractères.';
            }

            if (empty($book->author)) {
                $errors['author'] = 'L\'auteur est invalide.';
            }

            $publishedAt = explode('-', $book->published_at);
            if (!checkdate((int) ($publishedAt[1] ?? 0), (int) ($publishedAt[2] ?? 0), (int) ($publishedAt[0] ?? 0))) {
                $errors['published_at'] = 'La date est invalide.';
            }

            if (empty($errors)) {
                $book->save(['title', 'price', 'discount', 'isbn', 'author', 'published_at', 'image']);

                return View::redirect('/livres');
            }
        }

        return View::render('books/create', [
            'book' => $book,
            'errors' => $errors,
        ]);
    }

    public function edit($id)
    {
        $book = Book::find($id);

        if (! $book) {
            return View::notFound();
        }

        $errors = [];

        if (! empty($_POST)) {
            $book->title = $_POST['title'] ?? null;
            $book->price = $_POST['price'] ?? null;
            $book->discount = $_POST['discount'] ?? null;
            $book->isbn = $_POST['isbn'] ?? null;
            $book->author = $_POST['author'] ?? null;
            $book->published_at = $_POST['published_at'] ?? null;
            $book->image = 'uploads/06.jpg';

            if (empty($book->title)) {
                $errors['title'] = 'Le titre est invalide.';
            }

            if (!($book->price > 1 && $book->price < 100)) {
                $errors['price'] = 'Le prix doit être entre 1 et 100.';
            }

            if (!empty($book->discount) && !($book->discount > 0 && $book->discount < 100)) {
                $errors['discount'] = 'La promotion doit être entre 0 et 100.';
            }

            if (! in_array(strlen($book->isbn), [10, 13])) {
                $errors['isbn'] = 'Le code ISBN doit faire 10 ou 13 caractères.';
            }

            if (empty($book->author)) {
                $errors['author'] = 'L\'auteur est invalide.';
            }

            $publishedAt = explode('-', $book->published_at);
            if (!checkdate((int) ($publishedAt[1] ?? 0), (int) ($publishedAt[2] ?? 0), (int) ($publishedAt[0] ?? 0))) {
                $errors['published_at'] = 'La date est invalide.';
            }

            if (empty($errors)) {
                $book->update(['title', 'price', 'discount', 'isbn', 'author', 'published_at', 'image']);

                return View::redirect('/livres');
            }
        }

        return View::render('books/edit', [
            'book' => $book,
            'errors' => $errors,
        ]);
    }

    public function delete($id)
    {
        Book::delete($id);

        return View::redirect('/livres');
    }
}

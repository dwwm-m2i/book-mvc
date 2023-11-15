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
        $book->image = $_FILES['image'] ?? null;
        $errors = [];

        if (! empty($_POST)) {
            if (empty($book->title)) {
                $errors['title'] = 'Le titre est invalide.';
            }

            // if ($book->price < 1 || $book->price > 100) {
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

            $publishedAt = explode('-', $book->published_at); // 2023-11-15
            if (!checkdate((int) ($publishedAt[1] ?? 0), (int) ($publishedAt[2] ?? 0), (int) ($publishedAt[0] ?? 0))) {
                $errors['published_at'] = 'La date est invalide.';
            }

            // Là je définis tous les types que j'autorise en upload
            $mimeTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];

            if ($book->image['error'] != 0) {
                $errors['image'] = 'L\'image est invalide.';
            } else {
                // On vérifie le type du fichier
                $mime = mime_content_type($book->image['tmp_name']);

                if (!in_array($mime, $mimeTypes)) {
                    $errors['image'] = 'L\'image est invalide.';
                }

                // On vérifie la taille du fichier
                if ($book->image['size'] > 5 * 1024 * 1024) {
                    $errors['image'] = 'Le fichier est trop lourd (5 Mo).';
                }
            }

            if (empty($errors)) {
                // Ici on fait l'upload
                $folder = __DIR__.'/../../public/uploads';

                if (!is_dir($folder)) { // Si le dossier n'existe pas, on le créé
                    mkdir($folder);
                }

                // Permet de générer un nom aléatoire pour le fichier
                // Fiorella-1234 devient 91ca106ff0e1537a4c266ca1626c71ba
                $name = md5($book->title.'-'.uniqid());
                $extension = substr(strrchr($book->image['name'], '.'), 1); // jpg
                // 91ca106ff0e1537a4c266ca1626c71ba.jpg
                $filename = $name.'.'.$extension;

                // Upload du fichier
                move_uploaded_file($book->image['tmp_name'], $folder.'/'.$filename);

                // Pour envoyer dans la BDD
                $book->image = 'uploads/'.$filename;

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
            $currentImage = $book->image;
            $book->image = $_FILES['image'] ?? null;

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

            $mimeTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
            if (! empty($book->image['tmp_name'])) { // Seulement si fichier upload
                $mime = mime_content_type($book->image['tmp_name']);

                if (!in_array($mime, $mimeTypes)) {
                    $errors['image'] = 'L\'image est invalide.';
                }

                if ($book->image['size'] > 5 * 1024 * 1024) {
                    $errors['image'] = 'Le fichier est trop lourd (5 Mo).';
                }
            }

            if (empty($errors)) {
                if (! empty($book->image['tmp_name'])) { // Seulement si fichier upload
                    $folder = __DIR__.'/../../public/uploads';

                    if (!is_dir($folder)) { // Si le dossier n'existe pas, on le créé
                        mkdir($folder);
                    }

                    if ($currentImage) { // On supprime l'ancienne image
                        @unlink($folder.'/'.str_replace('uploads/', '', $currentImage));
                    }

                    // Fiorella-1234 devient 91ca106ff0e1537a4c266ca1626c71ba
                    $name = md5($book->title.'-'.uniqid());
                    $extension = substr(strrchr($book->image['name'], '.'), 1); // jpg
                    // 91ca106ff0e1537a4c266ca1626c71ba.jpg
                    $filename = $name.'.'.$extension;

                    // Upload du fichier
                    move_uploaded_file($book->image['tmp_name'], $folder.'/'.$filename);

                    $book->image = 'uploads/'.$filename;
                } else {
                    $book->image = $currentImage; // Pour éviter d'écraser l'image actuelle
                }

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
        $folder = __DIR__.'/../../public';
        @unlink($folder.'/'.Book::find($id)->image);

        Book::delete($id);

        return View::redirect('/livres');
    }
}

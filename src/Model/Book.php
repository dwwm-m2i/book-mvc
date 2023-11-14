<?php

namespace M2i\Mvc\Model;

class Book extends Model
{
    public $id;
    public $title;
    public $price;
    public $discount;
    public $isbn;
    public $author;
    public $published_at;
    public $image;

    public static function fake($id = null)
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Quae dolor itaque natus reiciendis ad quae.',
                'price' => 38,
                'discount' => 19,
                'isbn' => '8248827583739',
                'author' => 'Denise-Sabine Bernard',
                'published_at' => '2014-08-18',
                'image' => 'uploads/06.jpg',
            ],
            [
                'id' => 2,
                'title' => 'In in facilis quam vitae.',
                'price' => 26,
                'discount' => 0,
                'isbn' => '3680780915',
                'author' => 'Nicolas de la Courtois',
                'published_at' => '1987-10-22',
                'image' => 'uploads/05.jpg',
            ],
            [
                'id' => 3,
                'title' => 'Dolorum sit veritatis atque rerum cum quaerat.',
                'price' => 78,
                'discount' => 20,
                'isbn' => '0432990694820',
                'author' => 'Aimé Martineau',
                'published_at' => '2008-08-07',
                'image' => 'uploads/02.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Illo deleniti commodi ex.',
                'price' => 29,
                'discount' => 18,
                'isbn' => '7445094667310',
                'author' => 'Arthur Allard',
                'published_at' => '1991-07-23',
                'image' => 'uploads/01.jpg',
            ],
            [
                'id' => 5,
                'title' => 'Et modi sit dolorum.',
                'price' => 45,
                'discount' => 18,
                'isbn' => '0857622132295',
                'author' => 'Alphonse Gros',
                'published_at' => '1981-10-04',
                'image' => 'uploads/02.jpg',
            ],
            [
                'id' => 6,
                'title' => 'Quam iusto natus eos.',
                'price' => 62,
                'discount' => 11,
                'isbn' => '9478341825490',
                'author' => 'Théodore Francois',
                'published_at' => '2013-02-09',
                'image' => 'uploads/03.jpg',
            ],
            [
                'id' => 7,
                'title' => 'Natus possimus modi sint hic ut tempore.',
                'price' => 68,
                'discount' => 10,
                'isbn' => '0873356029069',
                'author' => 'René Joly',
                'published_at' => '1996-01-30',
                'image' => 'uploads/06.jpg',
            ],
            [
                'id' => 8,
                'title' => 'Maxime vel ut similique.',
                'price' => 25,
                'discount' => 10,
                'isbn' => '0593548548504',
                'author' => 'Henriette Gomes',
                'published_at' => '1975-08-20',
                'image' => 'uploads/05.jpg',
            ],
            [
                'id' => 9,
                'title' => 'Quia officia dignissimos et natus a.',
                'price' => 50,
                'discount' => 11,
                'isbn' => '1309708700366',
                'author' => 'Guillaume Leleu',
                'published_at' => '2021-09-29',
                'image' => 'uploads/05.jpg',
            ],
            [
                'id' => 10,
                'title' => 'Enim et omnis aliquid.',
                'price' => 60,
                'discount' => 14,
                'isbn' => '1223719243691',
                'author' => 'Louise Guyon',
                'published_at' => '1994-04-24',
                'image' => 'uploads/05.jpg',
            ],
        ];

        $newBooks = [];

        // Transforme le tableau de tableaux en tableau d'objets
        foreach ($books as $book) {
            $newBook = new Book();
            $newBook->id = $book['id'];
            $newBook->title = $book['title'];
            $newBook->price = $book['price'];
            $newBook->discount = $book['discount'];
            $newBook->isbn = $book['isbn'];
            $newBook->author = $book['author'];
            $newBook->published_at = $book['published_at'];
            $newBook->image = $book['image'];

            $newBooks[] = $newBook;
        }

        // Si on a passé un id à la fonction fake, on ne renvoie que ce livre
        foreach ($newBooks as $newBook) {
            if ($newBook->id == $id) {
                return $newBook;
            }
        }

        if ($id) {
            return null; // Sert pour la 404 si on a pas trouvé de livres
        }

        return $newBooks;
    }

    /**
     * Détermine si le livre est en promotion.
     */
    public function hasDiscount()
    {
        return $this->discount > 0;
    }

    /**
     * Permet de calculer un prix TTC.
     */
    public function price($withDiscount = false) {
        $percentage = $withDiscount ? $this->discount : 0;
        $taxPrice = $this->price * (1 + 20 / 100) * (1 - $percentage / 100); // 45.6
        $taxPrice = number_format($taxPrice, 2, ',', ' '); // 1450.6 devient 1 450,60

        return $taxPrice;
    }

    /**
     * Permet de formater une date US en années.
     */
    public function year()
    {
        return $this->date('Y');
    }

    /**
     * Permet de formater une date US en ce qu'on veut.
     */
    public function date($format = 'd/m/Y')
    {
        return date($format, strtotime($this->published_at));
    }

    /**
     * Permet de formater un ISBN.
     * 8248827583739 => 8-248827-583739
     * 8248827583    => 8-2488-2758-3
     */
    public function isbn()
    {
        $result = substr($this->isbn, 0, 1); // 8

        $size = strlen($this->isbn); // 10 ou 13
        $offset = ceil($size / 2);
        $result .= '-'.substr($this->isbn, 1, $offset - 1); // 8-248827
        $result .= '-'.substr($this->isbn, $offset, $offset - 1); // 8-248827-583739

        if ($size === 10) {
            $result .= '-'.substr($this->isbn, -1); // 8-2488-2758-3
        }

        return $result;
    }
}

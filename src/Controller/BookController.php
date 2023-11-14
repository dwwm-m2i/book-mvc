<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\View;

class BookController
{
    public function index()
    {
        return View::render('books/index');
    }
}

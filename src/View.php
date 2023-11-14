<?php

namespace M2i\Mvc;

class View
{
    public static function render($view, $data = [])
    {
        if (!file_exists('../views/'.$view.'.html.php')) {
            throw new \Exception("La vue $view n'existe pas.");
        }

        foreach ($data as $variable => $value) {
            // $name = 'Fiorella';
            // ${'name'} = 'Fiorella';
            // ${$variable} = 'Fiorella';
            $$variable = $value;
        }

        require '../views/'.$view.'.html.php';
    }

    public static function notFound()
    {
        http_response_code(404);

        return View::render('404');
    }
}

// Sans static
// $view = new View();
// $view->render();

// Avec static
// View::render();

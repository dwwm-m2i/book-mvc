<?php

namespace M2i\Mvc;

use AltoRouter;

class App extends AltoRouter
{
    public function run()
    {
        // On peut démarrer les sessions en même temps que l'app
        session_start();

        // Permet de styliser les erreurs
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();

        // Permet de récupérer l'URL actuelle
        $match = $this->match();

        // Lance le contrôleur
        if (is_array($match)) {
            [$controller, $method] = explode('@', $match['target']); // UserController@list
            $controller = 'M2i\Mvc\Controller\\'.$controller;
            $object = new $controller();
            $object->$method(...$match['params']);
        } else {
            return View::notFound();
        }
    }
}

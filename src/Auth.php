<?php

namespace M2i\Mvc;

class Auth
{
    public static function user()
    {
        return $_SESSION['user'] ?? null;
    }
}

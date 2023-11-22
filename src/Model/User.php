<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\Database;

class User extends Model
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $token;

    public static function findEmail($email)
    {
        $table = static::getTable(); // static:: est $this en static
        $sql = "SELECT * FROM $table WHERE email = :email";
        $query = Database::get()->prepare($sql);
        $query->execute(['email' => $email]);
        // Permet de récupérer un tableau d'objets au lieu d'un
        // tableau de tableaux
        $query->setFetchMode(\PDO::FETCH_CLASS, static::class);

        return $query->fetch();
    }

    public static function findToken($token)
    {
        $table = static::getTable(); // static:: est $this en static
        $sql = "SELECT * FROM $table WHERE token = :token";
        $query = Database::get()->prepare($sql);
        $query->execute(['token' => $token]);
        // Permet de récupérer un tableau d'objets au lieu d'un
        // tableau de tableaux
        $query->setFetchMode(\PDO::FETCH_CLASS, static::class);

        return $query->fetch();
    }
}

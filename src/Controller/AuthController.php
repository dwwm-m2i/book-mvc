<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\User;
use M2i\Mvc\View;

class AuthController
{
    public function login()
    {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $remember = $_POST['remember'] ?? null;
        $errors = [];

        if (! empty($_POST)) {
            $user = User::findEmail($email);

            if (! $user || ! password_verify($password, $user->password)) {
                $errors['email'] = 'Identifiants invalides.';
            }

            if (empty($errors)) {
                $_SESSION['user'] = $user;

                if ((bool) $remember) {
                    setcookie('REMEMBER', $user->token, time() + 60 * 60 * 24 * 365);
                }

                return View::redirect('/livres');
            }
        }

        return View::render('auth/login', [
            'email' => $email,
            'errors' => $errors,
        ]);
    }

    public function register()
    {
        $user = new User();
        $errors = [];
        $success = false;

        if (! empty($_POST)) {
            $clearPassword = $_POST['password'] ?? '';
            $confirmPassword = $_POST['confirm_password'];
            $user->email = $_POST['email'] ?? null;
            $user->name = $_POST['name'] ?? null;
            $user->password = password_hash($clearPassword, PASSWORD_DEFAULT);

            if (! filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'L\'email est invalide.';
            }

            if (empty($clearPassword) || $clearPassword !== $confirmPassword) {
                $errors['password'] = 'Le mot de passe est invalide.';
            }

            if (User::findEmail($user->email)) {
                $errors['email'] = 'L\'email est déjà utilisé.';
            }

            if (empty($errors)) {
                $success = $user->save(['name', 'email', 'password']);

                $_SESSION['user'] = $user;

                return View::redirect('/livres');
            }
        }

        return View::render('auth/register', [
            'user' => $user,
            'errors' => $errors,
            'success' => $success,
        ]);
    }

    public function logout()
    {
        unset($_SESSION['user']);
        setcookie('REMEMBER');

        return View::redirect('/livres');
    }
}

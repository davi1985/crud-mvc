<?php


namespace src\controllers;


use core\Controller;
use src\models\User;

/**
 * Class UsersController
 * @package src\controllers
 */
class UsersController extends Controller
{
    public function create(): void
    {
        $this->render('add');
    }

    public function store()
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRIPPED);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if ($name && $email) {
            $data = User::select()->where('email', $email)->execute();
            if (count($data) === 0) {
                User::insert(
                    [
                        'name' => $name,
                        'email' => $email
                    ]
                )->execute();
                $this->redirect('/');
            }
        }
        $this->redirect('/novo');
    }

    /**
     * @param $args
     */
    public function edit($args): void
    {
        $user = User::select()->find($args['id']);
        $this->render('edit', [
            'user' => $user
        ]);
    }

    /**
     * @param $args
     */
    public function update($args): void
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRIPPED);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if ($name && $email) {
            User::update()
                ->set('name', $name)
                ->set('email', $email)
                ->where('id', $args['id'])
                ->execute();
            $this->redirect('/');
        }
        $this->redirect('/usuario/' . $args['id'] . '/editar');
    }


    public function delete($args)
    {
        User::delete()->where('id', $args['id'])->execute();

        $this->redirect('/');
    }
}
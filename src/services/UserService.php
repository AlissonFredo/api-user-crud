<?php

namespace app\services;

use app\models\User;
use app\repositories\UserRepository;

class UserService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function show($params)
    {
        return $this->repository->show($params['id']);
    }

    public function list()
    {
        return $this->repository->list();
    }

    public function create($request)
    {
        $user = new User();

        $user->setName($request['name']);
        $user->setEmail($request['email']);
        $user->setPhoneNumber($request['phoneNumber']);
        $user->setBirthDate($request['birthDate']);
        $user->setAddress($request['address']);

        return $this->repository->create($user);
    }

    public function update($request, $params)
    {
        $user = new User();

        $user->setName($request['name']);
        $user->setEmail($request['email']);
        $user->setPhoneNumber($request['phoneNumber']);
        $user->setBirthDate($request['birthDate']);
        $user->setAddress($request['address']);

        return $this->repository->update($params['id'], $user);
    }

    public function destroy($params)
    {
        return $this->repository->destroy($params['id']);
    }
}

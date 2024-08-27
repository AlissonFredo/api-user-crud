<?php

namespace app\controllers;

use app\services\UserService;

class UserController
{
    private $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function show($params)
    {
        return json_encode($this->service->show($params));
    }

    public function list()
    {
        return json_encode($this->service->list());
    }

    public function create($request)
    {
        $result = $this->service->create($request);

        if ($result) {
            return json_encode(["message" => "Usuario criado com sucesso"]);
        } else {
            return json_encode(["message" => "Falha ao criar o usuario"]);
        }
    }

    public function update($request, $params)
    {
        $result = $this->service->update($request, $params);

        if ($result) {
            return json_encode(["message" => "Usuario atualizado com sucesso"]);
        } else {
            return json_encode(["message" => "Falha ao atualizar o usuario"]);
        }
    }

    public function destroy($params)
    {
        $result = $this->service->destroy($params);

        if ($result) {
            return json_encode(["message" => "Usuario deletado com sucesso"]);
        } else {
            return json_encode(["message" => "Falha ao deletar o usuario"]);
        }
    }
}

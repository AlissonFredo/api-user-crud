<?php

namespace app\controllers;

class UserController
{
    public function show($params)
    {
        return json_encode(["message" => "chegou em show"]);
    }

    public function list()
    {
        return json_encode(["message" => "chegou em list"]);
    }

    public function create($request)
    {
        return json_encode(["message" => "chegou em create"]);
    }

    public function update($request, $params)
    {
        return json_encode(["message" => "chegou em update"]);
    }

    public function destroy($params)
    {
        return json_encode(["message" => "chegou em destroy"]);
    }
}

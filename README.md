# API User CRUD

Este projeto é uma API para realizar operações de CRUD (Create, Read, Update, Delete) em usuários. A API foi desenvolvida em PHP e utiliza o Composer para gerenciamento de dependências e autoloading.

## Instalação

Para começar a usar o projeto, siga os passos abaixo:

1. **Instale as dependências:**

    Execute o comando abaixo para instalar as dependências do projeto definidas no arquivo `composer.json`:

    ```bash
    composer install
    ```

2. **Configure o autoloading:**

    Se você adicionar novas classes ou modificar a estrutura do projeto, não esqueça de regenerar o autoload:

    ```bash
    composer dump-autoload
    ```

3. **Configure o servidor local (opcional):**

    Se você deseja configurar um servidor local para rodar a API, você pode executar o script `configure.server.sh`:

    ```bash
    bash configure.server.sh
    ```

    Esse script irá configurar um servidor Apache local com as permissões corretas e criar o ambiente necessário para a API.

## Uso

### Endpoints

A API suporta as seguintes operações de CRUD para gerenciar usuários:

- **Criar Usuário**: `POST /users`
- **Listar Usuários**: `GET /users/list`
- **Obter Detalhes do Usuário**: `GET /users/show?id={id}`
- **Atualizar Usuário**: `PUT /users?id={id}`
- **Deletar Usuário**: `DELETE /users?id={id}`

### Exemplos de Requisição

Aqui estão alguns exemplos de como realizar requisições para a API:

- **Criar Usuário**

    ```bash
    POST http://api-user-crud.local.com.br/users
    ```

    **Corpo da Requisição:**
    ```json
    {
        "name": "example",
        "email": "example@gmail.com",
        "phoneNumber": "00000000000",
        "birthDate": "0000-00-00",
        "address": "example"
    }
    ```

- **Listar Usuários**

    ```bash
    GET http://api-user-crud.local.com.br/users/list
    ```

- **Obter Detalhes do Usuário**

    ```bash
    GET http://api-user-crud.local.com.br/users/show?id={id}
    ```

- **Atualizar Usuário**

    ```bash
    PUT http://api-user-crud.local.com.br/users?id={id}
    ```

    **Corpo da Requisição:**
    ```json
    {
        "name": "example",
        "email": "example@gmail.com",
        "phoneNumber": "00000000000",
        "birthDate": "0000-00-00",
        "address": "example"
    }
    ```

- **Deletar Usuário**

    ```bash
    DELETE http://api-user-crud.local.com.br/users?id={id}
    ```

## Estrutura do Projeto

A estrutura do projeto `api-user-crud` é organizada da seguinte maneira:

- **database/**
    - `database.sql`
- **logs/**
    - `error.log`
- **public/**
    - `index.php`
    - `.htaccess`
- **src/**
    - **controllers/**
        - `UserController.php`
    - **core/**
        - `Config.php`
        - `Database.php`
        - `Main.php`
        - `Router.php`
    - **models/**
        - `User.php`
    - **repositories/**
        - `UserRepository.php`
    - **services/**
        - `UserService.php`
- `.env`
- `.env.example`
- `.gitignore`
- `composer.json`
- `configure.server.sh`
- `README.md`

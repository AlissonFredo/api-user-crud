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
- **Listar Usuários**: `GET /users`
- **Obter Detalhes do Usuário**: `GET /users/{id}`
- **Atualizar Usuário**: `PUT /users/{id}`
- **Deletar Usuário**: `DELETE /users/{id}`

### Exemplos de Requisição


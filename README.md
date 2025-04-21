# Meu Projeto Laravel API

Este é um projeto Laravel que implementa uma API para gerenciamento de usuários e livros.

## Tecnologias
- Laravel 12.0
- PHP 8.12.2
- MySQL (XAMPP)
- Postman para testar as rotas

## Requisitos
- Composer
- PHP 8.12.2
- Laravel 12.0
- MySQL

## Configuração

1. Repositório GitHub:

https://github.com/nicole-jc/api-books

2. Instale dependências:

```bash
composer install
```

3. Configure o .env para o seu ambiente

4. Execute as migrações para o seu banco de dados:

```bash
php artisan migrate
```

5. Inicie o servidor Laravel:

```bash
php artisan serve
```

## API

## Usuários

    GET /api/users - Retorna todos os usuários registrados.


POST /api/users - Registra um novo usuário.

{
  "name": "Nome",
  "email": "email@exemplo.com",
  "password": "senha"
}


PUT /api/users/{id} - Edita os dados de um usuário.

{
  "name": "Novo Nome",
  "email": "novoemail@exemplo.com"
}

DELETE /api/users/{id} - Deleta um usuário.

## Livros

    GET /api/books - Retorna todos os livros registrados.

    POST /api/books - Registra um novo livro.

{
  "title": "Título do Livro",
  "author": "Autor do Livro",
  "genre": "Gênero",
  "year": 2021
}

PUT /api/books/{id} - Edita os dados de um livro.

{
  "title": "Novo Título",
  "author": "Novo Autor",
  "genre": "Novo Gênero",
  "year": 2022,
  "available": 1 (1 = True, 0 = False)
}

DELETE /api/books/{id} - Deleta um livro.

## Postman Collection

A collection do Postman para testar a API está disponível na pasta /docs/api-books.postman-collection.json.

Para importar a collection no Postman:

    Abra o Postman.

    Vá até "File" > "Import".

    Selecione o arquivo postman-collection.json.
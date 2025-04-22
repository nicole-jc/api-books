# 📚 API de Gerenciamento de Usuários e Livros

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7-orange?logo=mysql)](https://www.mysql.com/)
[![Postman](https://img.shields.io/badge/Tested_with-Postman-FF6C37?logo=postman)](https://www.postman.com/)
[![License](https://img.shields.io/badge/license-MIT-lightgrey)](LICENSE)

---

## 📖 Descrição

API REST feita com **Laravel 12.0**, **PHP 8.2.12**, **MySQL (via XAMPP)**, com frontend em HTML/CSS/JS puro.  
Permite cadastro, listagem, edição e exclusão de usuários e livros.  

## Tecnologias utilizadas

- Laravel 12
- PHP 8.2.12
- MySQL (XAMPP)
- Postman
- HTML, CSS e JavaScript (puro) para o frontend

## Como rodar o projeto
1. Instale as dependencias:
```bash
composer install
```
2. Configure o seu arquivo .env
   
4. Gere a chave do app Laravel:
```bash
php artisan key:generate
```
4. Execute as migrations:
```
php artisan migrate
```
5. Inicie o servidor:
```bash
php artisan serve
```
## Testes com Postman
Headers obrigatórios:

    Key: Accept

    Value: application/json

Recomenda-se instalar o Postman Agent para chamadas localhost.

## Objetivo da API

    Listar usuários e livros

    Registrar novos usuários e livros

    Editar usuários e livros

    Deletar usuários e livros

## 📮 Rotas da API (collection disponível no Postman)
🔹 USERS
| Método | Endpoint         | Ação                  |
|--------|------------------|-----------------------|
| GET    | /api/users       | Listar usuários       |
| POST   | /api/users    | Criar novo usuário    |
| PUT    | /api/users/{id}  | Editar usuário        |
| DELETE | /api/users/{id}  | Deletar usuário       |

🔸 Listar todos os usuários - GET

GET http://127.0.0.1:8000/api/users

🔸 Registrar novo usuário - POST

POST http://127.0.0.1:8000/api/users
```
{
    "name": "Exemplo",
    "email": "exemplo@email.com",
    "password": "senha"
}
```
🔸 Editar usuário - PUT

PUT http://127.0.0.1:8000/api/users/{id}
```
{
    "name": "Novo nome",
    "email": "novo@email.com"
}
```
🔸 Deletar usuário - DELETE

DELETE http://127.0.0.1:8000/api/users/{id}

## 🔹 BOOKS
| Método | Endpoint         | Ação                  |
|--------|------------------|-----------------------|
| GET    | /api/books       | Listar livros       |
| POST   | /api/books    | Criar novo livro   |
| PUT    | /api/books/{id}  | Editar livro       |
| DELETE | /api/books/{id}  | Deletar livro      |

🔸 Listar todos os livros - GET

GET http://127.0.0.1:8000/api/books

🔸 Registrar novo livro - POST

POST http://127.0.0.1:8000/api/books
```
{
    "title": "Título",
    "author": "Autor",
    "genre": "Gênero",
    "year": "Ano"
}
```
🔸 Editar livro - PUT

PUT http://127.0.0.1:8000/api/books/{id}
```
{
    "title": "Novo título",
    "author": "Novo autor",
    "genre": "Novo gênero",
    "year": "Novo ano",
    "available": true
}
```
🔸 Deletar livro - DELETE

DELETE http://127.0.0.1:8000/api/books/{id}

## 📁 Export da Collection do Postman

A collection com todos os testes está disponível neste repositório, no arquivo:
```
/docs/api-books.postman_collection.json
```

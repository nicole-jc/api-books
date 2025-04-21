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

---

## 🧰 Tecnologias utilizadas

- Laravel 12.0
- PHP 8.2.12
- MySQL (via XAMPP)
- Postman (com Postman Agent)
- HTML, CSS, JavaScript

---

## 🚀 Como rodar o projeto

```bash
# Inicie o servidor Laravel
php artisan serve

# Execute as migrations
php artisan migrate
```

---

## 📫 Testes com Postman

    Header necessário:
    Accept: application/json

---

## 📮 Rotas da API
👤 USERS
| Método | Endpoint         | Ação                  |
|--------|------------------|-----------------------|
| GET    | /api/users       | Listar usuários       |
| POST   | /api/users    | Criar novo usuário    |
| PUT    | /api/users/{id}  | Editar usuário        |
| DELETE | /api/users/{id}  | Deletar usuário       |

---

## 📚 BOOKS
| Método | Endpoint         | Ação                  |
|--------|------------------|-----------------------|
| GET    | /api/books      | Listar livros      |
| POST   | /api/books    | Criar novo livro   |
| PUT    | /api/users/{id}  | Editar usuário        |
| DELETE | /api/users/{id}  | Deletar usuário       |

--- 

📁 Arquivos importantes

    postman_collection.json: collection com todas as requisições

    .env.example: arquivo de exemplo de configuração ambiente

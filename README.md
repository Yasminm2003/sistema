Sistema de Cadastro de Itens por Departamento

API RESTful em Laravel 11 para gerenciar departamentos e seus respectivos itens.

 Tecnologias

- Laravel 11
- PHP 8.1+
- MySQL 8
- XAMPP + phpMyAdmin
- Docker

 Instalação

```bash
git clone <repo>
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve

Configure o .env com:
env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=


Endpoints
Departamentos
GET /api/departamentos

GET /api/departamentos/{id}

POST /api/departamentos

PUT /api/departamentos/{id}

DELETE /api/departamentos/{id}

Itens
GET /api/items

GET /api/items/{id}

POST /api/items

PUT /api/items/{id}

DELETE /api/items/{id}

Teste
Acesse http://localhost:8000

Crie um departamento via Blade

Verifique em http://localhost/phpmyadmin na tabela departamentos

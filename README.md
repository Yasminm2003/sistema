 Sistema de Cadastro de Itens por Departamento
API RESTful desenvolvida em Laravel 11 para gerenciar departamentos e seus respectivos itens.

Tecnologias Utilizadas
Laravel 11

PHP 8.1+

MySQL 8

XAMPP + phpMyAdmin

Docker (opcional)

Vue 3 + Vite (Frontend)

Axios (consumo de API)

Tailwind CSS (opcional)

Livewire (integração com Blade, opcional)

Instalação Backend (Laravel)
bash
Copiar
Editar
git clone <repo>
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve
Configuração do arquivo .env
env
Copiar
Editar
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
Endpoints da API
Departamentos
Método	Endpoint	Descrição
GET	/api/departamentos	Listar todos os departamentos
GET	/api/departamentos/{id}	Mostrar departamento por ID
POST	/api/departamentos	Criar novo departamento
PUT	/api/departamentos/{id}	Atualizar departamento
DELETE	/api/departamentos/{id}	Deletar departamento

Itens
Método	Endpoint	Descrição
GET	/api/items	Listar todos os itens
GET	/api/items/{id}	Mostrar item por ID
POST	/api/items	Criar novo item
PUT	/api/items/{id}	Atualizar item
DELETE	/api/items/{id}	Deletar item

Teste Backend
Acesse: http://localhost:8000

Crie departamentos via Blade (interface backend)

Verifique os dados no phpMyAdmin: http://localhost/phpmyadmin na tabela departamentos

Frontend (Vue.js)
Interface interativa para cadastro e visualização de departamentos.

Tecnologias
Vue 3 + Vite

Axios

Tailwind CSS (opcional)

Livewire (se usar Blade em paralelo)

Instalação Frontend
bash
Copiar
Editar
cd frontend
npm install
npm run dev
Funcionalidades
Listagem, cadastro, edição e exclusão de departamentos

Integração com API Laravel via Axios

Exemplo de chamada API via Axios
js
Copiar
Editar
axios.get('http://localhost:8000/api/departamentos')
  .then(response => {
    console.log(response.data);
  });
Teste Frontend
Acesse: http://localhost:5174/ para visualizar a interface Vue em desenvolvimento.

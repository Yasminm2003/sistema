
# Sistema de Cadastro de Itens por Departamento

API RESTful desenvolvida em **Laravel 11** para gerenciar departamentos e seus respectivos itens,com frontend em Vue 3.

---

## 🛠 Tecnologias Utilizadas

### Backend
- Laravel 11  
- PHP 8.1+  
- MySQL 8  
- XAMPP + phpMyAdmin  
- Docker (opcional)


### Frontend
- Vue 3 + Vite  
- Axios  
- Tailwind CSS (opcional)  
- Livewire (opcional - integração com Blade)

---

## ⚙️ Instalação do Backend (Laravel)

```bash
git clone <repo>
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve
Configuração do .env
env
Copiar
Editar
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
🧪 Endpoints da API
📁 Departamentos
Método	Endpoint	Descrição
GET	/api/departamentos	Listar todos os departamentos
GET	/api/departamentos/{id}	Mostrar um departamento
POST	/api/departamentos	Criar novo departamento
PUT	/api/departamentos/{id}	Atualizar departamento
DELETE	/api/departamentos/{id}	Deletar departamento

📦 Itens
Método	Endpoint	Descrição
GET	/api/items	Listar itens
GET	/api/items/{id}	Mostrar item
POST	/api/items	Criar item
PUT	/api/items/{id}	Atualizar item
DELETE	/api/items/{id}	Deletar item

🚀 Testando o Backend
Inicie Apache e MySQL pelo XAMPP

Acesse: http://localhost:8000

Crie departamentos via interface Blade

Verifique no phpMyAdmin: http://localhost/phpmyadmin, banco laravel, tabela departamentos

🐳 Rodando com Docker (opcional)
Se desejar usar Docker:

bash
Copiar
Editar
cd backend
docker-compose up -d
💻 Frontend (Vue.js)
Interface interativa para cadastro e visualização de departamentos.

Instalação do Frontend
bash
Copiar
Editar
cd vite-project  
npm install
npm run dev
Funcionalidades
Listagem de departamentos

Cadastro de novos departamentos

Edição e exclusão de departamentos

Integração com a API Laravel via Axios

Exemplo de chamada API com Axios
js
Copiar
Editar
axios.get('http://localhost:8000/api/departamentos')
  .then(response => {
    console.log(response.data);
  });
Teste do Frontend
Acesse: http://localhost:5173 para visualizar a interface Vue em modo de desenvolvimento.

✅ Observações Finais
Não suba o arquivo .env no repositório.

Certifique-se de que Apache e MySQL estão rodando antes de acessar a aplicação.

Se usar Docker, os serviços serão iniciados com docker-compose up -d.

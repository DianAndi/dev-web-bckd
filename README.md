# dev-web-bckd

# Usa php + laravel para funcionalidade do painel de gerenciamento de produtos
# CRUD

## Funcionalidades

- CRUD completo de produtos
- Upload de imagem
- Armazenamento com SQLite
- API JSON

## Tecnologias

- PHP 8+
- Laravel 10
- SQLite

## Como rodar

``bash
git clone https://github.com/SEU_USUARIO/laravel-backend.git
cd laravel-backend
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan storage:link
php artisan serve

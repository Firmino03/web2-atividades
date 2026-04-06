# Atividade 01 - Migrations no Laravel
## Sistema de Gerenciamento de Biblioteca

---

## Requisitos

- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM

---

## Instalação

```bash
# 1. Instalar dependências PHP
composer install

# 2. Instalar dependências JS
npm install

# 3. Copiar o arquivo de ambiente
cp .env.example .env

# 4. Gerar a chave da aplicação
php artisan key:generate

# 5. Configurar o banco de dados no .env
DB_DATABASE=atividade_01
DB_USERNAME=root
DB_PASSWORD=sua_senha

# 6. Rodar todas as migrations
php artisan migrate
```

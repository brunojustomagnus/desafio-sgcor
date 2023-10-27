<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Este é um projeto teste feito em Laravel com Tailwind CSS que inclui a criação, listagem, edição, exclusão e cálculo do IMC de usuários, com campos básicos como nome, cpf, celular, etc. Este README destaca os principais aspectos do projeto e os comandos comuns de desenvolvimento.

## Requisitos

- [PHP](https://www.php.net/) Utilizei a versão do PHP 8.2.4 
- [Composer](https://getcomposer.org/) Utilizei a versão do Composer 2.2.21
- [Node.js](https://nodejs.org/) Utilizei a versão 19.7.0
- [NPM](https://www.npmjs.com/) Utilizei a versão 9.5.1
- [Laravel](https://laravel.com/docs/10.x) Utilizei a versão 10.10
- [Breeze](https://laravel.com/docs/10.x/starter-kits#breeze-and-blade) Foi utilizado o Breeze do Laravel junto ao Blade para a criação das telas de autenticação, então ele já está no composer.json

## Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/brunojustomagnus/sgcor-test.git

2. Instale as dependências do PHP usando o Composer:
   ```bash
   composer install

3. Instale as dependências do JS:
   ```bash
   npm install

4. Copie as informações do .env.example para um novo .env:
   ```bash
   cp .env.example .env

5. Gere uma key para o aplicativo:
   ```bash
   php artisan key:generate

6. Rode as migrations juntamente com os seeders:
   ```bash
   php artisan migrate --seed

7. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve

- [Documentação do Laravel](https://laravel.com/docs/10.x).

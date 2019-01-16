<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

INSTRUÇÕES PARA INSTALAÇÃO DO BLOG

1º CRIAR UMA TABELA COM A DESCRIÇÃO "blog" NO BANCO DE DADOS DESEJADO.
- Nesse exemplo utilizamos um servidor local administrado pelo XAMPP utilizando o BD MySQL.

Caso utilize o XAMPP, após instalar: https://www.apachefriends.org/index.html
NO WINDOWS, MAC ou LINUX:
- Abra o terminal e acesse a pasta "xampp\mysql\bin":


Exemplo WINDOWS:
> cd \xampp\mysql\bin
> mysql -h localhost -u root
> CREATE DATABASE blog\g

(Feche o terminal)

OU

Acesse:
http://localhost/phpmyadmin e clique na opção "New" para criar a tabela "blog".
De preferência escolha um agrupamento do tipo "utf8_unicode_ci".


2º CLONANDO O PROJETO PARA O DIRETÓRIO DO SERVIDOR

- Abra o terminal e acesse a pasta "xampp/htdocs"
> cd \xampp\htdocs

- Dentro do repositório "/htdocs", clone o projeto "blog" com o seguinte comando:
> git clone https://github.com/tetyemillynha/blog.git
> cd blog

- INSTALL COMPOSER
> composer install

- INSTALL NPM
> npm install

- CRIAR CÓPIA DO .env
> copy .env.example .env

- CRIAR CHAVE DO APLICATIVO
> php artisan key:generate

3º MIGRANDO AS TABELAS E ALIMENTANDO O BANCO COM INFORMAÇÕES
Obs: Por padrão ao fazer a migração das tabelas, será criado um usuário administrador com os seguintes dados:
nome: admin
e-mail: admin@admin.com
senha: 1234

Caso deseje alterar esses dados, abra a pasta do projeto "blog/database/seeds" e altere as linhas 17,18,19 do arquivo UsersTableSeeder.php

Ainda no terminal e dentro da pasta do projeto "htdocs\blog" rode o comando:
>php artisan migrate:refresh --seed

4º INSTALANDO ARQUIVOS DE TRADUÇÃO DE MENSAGENS DE ERRO DO LARAVEL
https://github.com/vitorec/laravel-5.5-pt-br-locale

Ainda no terminal e dentro da pasta do projeto "blog" rode os seguintes comandos:
$ cd resources/lang/
$ git clone https://github.com/vitorec/laravel-5.5-pt-br-locale.git ./pt-br


4º TESTANDO A APLICAÇÃO
>php artisan serve

Nesse ponto acesse o navegador e digite o endereço informado no terminal.
Por padrão o endereço é: http://localhost:8000 ou http://127.0.0.1:8000

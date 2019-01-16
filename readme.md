<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

</br>
<b>INSTRUÇÕES PARA INSTALAÇÃO DO BLOG</b></br>

<b>1º CRIAR UMA TABELA COM A DESCRIÇÃO "blog" NO BANCO DE DADOS DESEJADO.</b>
- Nesse exemplo utilizamos um servidor local administrado pelo XAMPP utilizando o BD MySQL.

<b>Caso utilize o XAMPP, após instalar: https://www.apachefriends.org/index.html
NO WINDOWS, MAC ou LINUX:</b>
- Abra o terminal e acesse a pasta "xampp\mysql\bin":


<b>Exemplo WINDOWS:</b>
> cd \xampp\mysql\bin
> mysql -h localhost -u root
> CREATE DATABASE blog\g

(Feche o terminal)

OU

<b>Acesse:</b>
http://localhost/phpmyadmin e clique na opção "New" para criar a tabela "blog".
De preferência escolha um agrupamento do tipo "utf8_unicode_ci".


<b>2º CLONANDO O PROJETO PARA O DIRETÓRIO DO SERVIDOR</b>

<b>- Abra o terminal e acesse a pasta "xampp/htdocs"</b>
> cd \xampp\htdocs

<b>- Dentro do repositório "/htdocs", clone o projeto "blog" com o seguinte comando:</b>
> git clone https://github.com/tetyemillynha/blog.git
> cd blog

<b>- INSTALL COMPOSER</b>
> composer install

<b>- INSTALL NPM</b>
> npm install

<b>- CRIAR CÓPIA DO .env</b>
> copy .env.example .env

<b>- CRIAR CHAVE DO APLICATIVO</b>
> php artisan key:generate

<b>3º MIGRANDO AS TABELAS E ALIMENTANDO O BANCO COM INFORMAÇÕES</b>
    <b>Obs:</b> Por padrão ao fazer a migração das tabelas, será criado um usuário administrador com os seguintes dados:
nome: admin
e-mail: admin@admin.com
senha: 1234

Caso deseje alterar esses dados, abra a pasta do projeto "blog/database/seeds" e altere as linhas 17,18,19 do arquivo UsersTableSeeder.php

<b>Ainda no terminal e dentro da pasta do projeto "htdocs\blog" rode o comando:</b>
>php artisan migrate:refresh --seed

<b>4º INSTALANDO ARQUIVOS DE TRADUÇÃO DE MENSAGENS DE ERRO DO LARAVEL</b>
https://github.com/vitorec/laravel-5.5-pt-br-locale

<b>Ainda no terminal e dentro da pasta do projeto "blog" rode os seguintes comandos:</b>
> cd resources/lang/
> git clone https://github.com/vitorec/laravel-5.5-pt-br-locale.git ./pt-br


<b>4º TESTANDO A APLICAÇÃO</b>
> php artisan serve

<b>Nesse ponto acesse o navegador e digite o endereço informado no terminal.</b>
- Por padrão o endereço é: http://localhost:8000 ou http://127.0.0.1:8000

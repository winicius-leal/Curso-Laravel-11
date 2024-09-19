<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Testando o Laravel 11 : by Leal

## Pré-requisitos
Antes de começar, certifique-se de que você tem os seguintes requisitos instalados:

- Docker
- Docker Compose
- Composer (opcional, se não estiver usando Sail para gerenciar dependências)


## Passos para Iniciar o Projeto

1. Clone o Repositório do projeto para o seu ambiente local:

- git clone https://github.com/usuario/nome-do-repositorio.git
- cd nome-do-repositorio

2. Instale as Dependências do Projeto

- ./vendor/bin/sail composer install

3. Crie o Arquivo .env

- Copie o arquivo de exemplo .env.example para criar o seu arquivo .env:
- cp .env.example .env

  * Obs. O arquivo .env foi commitado para que possa utiliza-lo.

4. Inicie os Containers Docker usando o Sail:

- ./vendor/bin/sail up -d

5. Execute as Migrations (Crie as tabelas do banco de dados e outras estruturas necessárias:)

- ./vendor/bin/sail artisan migrate

6. Verifique se o Projeto Está Funcionando

- Abra seu navegador e acesse http://localhost para verificar se o projeto Laravel está funcionando corretamente.


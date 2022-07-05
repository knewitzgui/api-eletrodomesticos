# Teste Plan Marketing

O teste consiste em desenvolver uma API utilizando o framework Laravel em sua versão 6 ou superior, criando um CRUD de cadastro de eletrodomésticos.

Tecnologias utilizadas no projeto: Laravel 8, Laradock, MySQL, Insominia(para o processo de desenvolvimento)
Dependências: Composer, PHP 7.4

## Instalação

Clone

``
git clone git@github.com:knewitzgui/api-eletrodomesticos.git
``

Acesso ao diretório

``
cd api-eletrodomesticos
``

Instalação de dependências

``
composer install
``

Execução do servidor local com Docker

``
cd laradock
``
``
docker-compose up -d nginx mysql
``

Executar as migrations do Laravel

``
php artisan migrate
``

O servidor estará no ar no seguinte endereço

``
http://localhost:8888
``

O MySQL estará rodando na porta 3333

## Exemplos de requisições para a API

###Listagem de produtos (GET)
``
http://localhost:8888/api/produtos
``

###Cadastro de produtos (POST)
``
http://localhost:8888/api/produtos
``
Enviando no seu payload os seguintes dados:
-name
-description
-voltage
-brand_id

###Atualizar produto (PUT)
``
http://localhost:8888/api/produtos/{id}
``
Fazer o envio de JSON com os dados de atualização do produto para a URL localhost:8888/api/produtos/ + id do produto

###Deletar produto (DELETE)
``
http://localhost:8888/api/produtos/{id}
``
Enviar o método DELETE para a URL localhost:8888/api/produtos/ + id do produto

###Listar produtos filtrando por marca (GET)
``
http://localhost:8888/api/produtos?brand_id={id}
``
Efetuar um GET na URL base de produtos enviando como parâmetro de query o id da marca(brand_id)

###Listar marcas (GET)
``
http://localhost:8888/api/marcas
``

###Cadastro de marcas (POST)
``
http://localhost:8888/api/marcas
``
Enviando no seu payload o seguinte dado:
-name

###Atualizar marca (PUT)
``
http://localhost:8888/api/marcas/{id}
``
Fazer o envio de JSON com os dados de atualização da marca para a URL localhost:8888/api/marcas/ + id da marca

###Deletar marca (DELETE)
``
http://localhost:8888/api/marcas/{id}
``
Enviar o método DELETE para a URL localhost:8888/api/marcas/ + id da marca

## Retornos

Todas as requisições retornam o status da requisição, por exemplo status 200, juntamente com uma ``message`` informando o sucesso ou falha na requisição.

# Teste Plan Marketing

O teste consiste em desenvolver uma API utilizando o framework Laravel em sua versão 6 ou superior, criando um CRUD de cadastro de eletrodomésticos.

Tecnologias utilizadas no projeto: Laravel 8, MySQL, Insominia(para o processo de desenvolvimento)
Dependências: Composer, PHP 7.4

## Instalação
Utilizando Gitbash:

Clone

```bash
$ git clone https://github.com/knewitzgui/api-eletrodomesticos.git
```

Acesso ao diretório

```bash
$ cd api-eletrodomesticos
```

Instalação de dependências

```bash
$ composer install
```

Com seu ambiente de desenvolvimento no ar(WAMP, XAMPP, etc.)

Crie um Schema de banco de dados com o nome "laravel"

Executar as migrations do Laravel

```bash
$ php artisan migrate
```

Rodar o servidor local

```bash
$ php artisan serve
```

O servidor estará no ar no seguinte endereço

```bash
$ http://localhost:8000
```

O MySQL estará rodando na porta 3333

## Exemplos de requisições para a API

### Listagem de produtos (GET)

```bash
$ http://localhost:8000/api/produtos
```

### Cadastro de produtos (POST)

```bash
$ http://localhost:8000/api/produtos
```
Enviando no seu payload os seguintes dados:
-name
-description
-voltage
-brand_id

### Atualizar produto (PUT)

```bash
$ http://localhost:8000/api/produtos/{id}
```
Fazer o envio de JSON com os dados de atualização do produto para a URL localhost:8000/api/produtos/ + id do produto

### Deletar produto (DELETE)

```bash
$ http://localhost:8000/api/produtos/{id}
```
Enviar o método DELETE para a URL localhost:8000/api/produtos/ + id do produto

### Listar produtos filtrando por marca (GET)

```bash
$ http://localhost:8000/api/produtos?brand_id={id}
```
Efetuar um GET na URL base de produtos enviando como parâmetro de query o id da marca(brand_id)

### Listar marcas (GET)

```bash
$ http://localhost:8000/api/marcas
```

### Cadastro de marcas (POST)

```bash
$ http://localhost:8000/api/marcas
```
Enviando no seu payload o seguinte dado:
-name

### Atualizar marca (PUT)

```bash
$ http://localhost:8000/api/marcas/{id}
```
Fazer o envio de JSON com os dados de atualização da marca para a URL localhost:8000/api/marcas/ + id da marca

### Deletar marca (DELETE)

```bash
$ http://localhost:8000/api/marcas/{id}
```
Enviar o método DELETE para a URL localhost:8000/api/marcas/ + id da marca

## Retornos

Todas as requisições retornam o status da requisição, por exemplo status 200, juntamente com uma ``message`` informando o sucesso ou falha na requisição.

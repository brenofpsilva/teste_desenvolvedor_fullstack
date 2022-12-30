
# Backend

Esse serviço tem o objetivo de gerenciar os dados para que seja consumido pelo frontend.
## Stack utilizada

**PHP 8.1** 

**Laravel 9**


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/brenofpsilva/teste_desenvolvedor_fullstack.git
```

Entre no diretório do projeto

```bash
  cd este_desenvolvedor_fullstack/backend
```

Instale as dependências

```bash
  composer install 
```

Configuração de instalação

```bash
  cp .env.example .env
```
Gerar chave de aplicativo

```bash
  php artisan key:generate
```

Crie um banco de dados MySQL.

```bash
  Use o phpmyadmin
```

Execulte as migrations

```bash
  php artisan migrate
```

Inicie o servidor

```bash
  php artisan serve
```


## Documentação da API

#### Retorna todos os itens

```http
  GET /api/appliances
```


#### Retorna um item

```http
  GET /api/appliances/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer |

#### Adicionar um item

```http
  POST /api/appliances/
```

| Campos   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `name`    | `string` | **Obrigatório**. O nome do item que você quer  |
| `description`      | `string` | **Obrigatório**. A descrição do item que você quer |
| `image`      | `string` |  A imagem do item que você quer |
| `brand`      | `string` | **Obrigatório**. A voltagem do item que você quer |
| `status`      | `int` | **Obrigatório**. A status do item que você quer |
| `reference`      | `string` | **Obrigatório**. A referência do item que você quer |
| `line`      | `string` | **Obrigatório**. A linha do item que você quer |
| `color`      | `string` | **Obrigatório**. A cor do item que você quer |
| `product_weight`      | `string` | **Obrigatório**. O total de litros do item que você quer |
| `price`      | `decimal` | **Obrigatório**. A valor do item que você quer |


#### Editar um item

```http
  PATCH /api/appliances/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer editar|


| Campos   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `name`    | `string` | **Obrigatório**. O nome do item que você quer  |
| `description`      | `string` | **Obrigatório**. A descrição do item que você quer |
| `image`      | `string` |  A imagem do item que você quer |
| `brand`      | `string` | **Obrigatório**. A voltagem do item que você quer |
| `status`      | `int` | **Obrigatório**. A status do item que você quer |
| `reference`      | `string` | **Obrigatório**. A referência do item que você quer |
| `line`      | `string` | **Obrigatório**. A linha do item que você quer |
| `color`      | `string` | **Obrigatório**. A cor do item que você quer |
| `product_weight`      | `string` | **Obrigatório**. O total de litros do item que você quer |
| `price`      | `decimal` | **Obrigatório**. A valor do item que você quer |


#### Excluir um item

```http
  DELETE /api/appliances/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer excluir|



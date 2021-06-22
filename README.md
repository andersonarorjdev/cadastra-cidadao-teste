<h1 align="center">Cadastra cidadão</h1>
<p>
    Projeto desenvolvido com o intuíto de testar os conhecimentos em laravel. Com essa aplicação é possível cadastrar todos os usuários que se imaginar.
</p>

### Guia

Após clonar esse repositório, rodar o seguinte comando:

``` bash
composer install
```

Logo após, você precisa gerar um .env, apatir do arquivo `.env.example`,
renomeie esse arquivo para `.env` dentro da raíz.

Logo após, você precisa configurar o seu ambiente de desenvolvimento dentro do .env, com as configurações do seu banco de dados.

Execute o seguinte comando no termianl para poder gerar a chave da aplicação:

```
php artisan key:generate
```

para atualizar o seu banco de dados com o que a aplicação usa, execute o seguinte comando:
```
php artisan migrate
```

Inicie o seu projeto:

```
php artisan serve
```
O projeto estará rodando na porta que aparecer na sua linha de comando. Basta acessar a url.

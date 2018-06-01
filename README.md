# Gerenciador de Super Mercados
Projeto para o gerenciamento de estoque de cada supermercados de uma rede. O usuário pode cadastrar diversas lojas de sua rede, bem como produtos. Ele pode realizar vinculação dos produtos em cada loja de sua rede. Tem a possibilidade de diaramente lançar em cada loja a quantidade de produtos em estoque, a quantidade perdida ao fornecedor e o total vendido.

# Pré-requisitos
* PHP >= 7.1.3
* PosgreSQL
* Composer
* Node

# Instação
Após clonar o projeto executar os seguintes comandos:
* composer install
* npm install
* npm run prod

# Configuração
* Antes de executar o projeto deve ser renomeado o arquivo .env.example para .env. Depois deve ser editado o arquivo .evn com as configurações de banco de dados:
    * DB_CONNECTION=pgsql
    * DB_HOST=[host banco de dados]
    * DB_PORT=[porta](padrão:5432)
    * DB_DATABASE=[nome banco de dados]
    * DB_USERNAME=[usuario]
    * DB_PASSWORD=[senha]
 * Executar o seguinte comando para gerar a chave da aplicação:
    * php artisan key:generate
 * Criar o banco de dados conforme configurado na chave DB_DATABASE e executar o seguinte comando:
    * php artisan migrate

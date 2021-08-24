Clone o repositório

     git clone git@github.com:felipeganho/desafioUppersoft.git

Mude para a pasta do repositório

    cd desafioUppersoft
    
Instale as dependências

    composer install
    
Copie o arquivo .env e coloque o nome do banco de dados em: DB_DATABASE=nome-do-banco-aqui

    cp .env.example .env

Gere a chave da aplicação

    php artisan key:generate
    
Popule as migrations no banco

    php artisan migrate
    
Inicie o servidor

    php artisan serve

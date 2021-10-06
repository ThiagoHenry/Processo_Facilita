## Sobre

Sistema de desafios para processo seletivo


## Requisitos
php ^7


## Instalação

Instalação feita via linha de comando:

- git clone https://github.com/ThiagoHenry/Processo_Facilita.git

- cd Processo_Facilita

- composer update

- No Diretório raiz altere o nome do arquivo ".env.example" para ".env" (sem aspas)

- php artisan key:generate

- crie uma tabela chamada "process" (sem aspas)

- php artisan migrate --seed

- php artisan serve



## License

MIT

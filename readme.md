# Rafael do Nascimento Lima


Essa aplicação foi desenvolvida para fins de teste de candidatos para a vaga de desenvolvedor web.

##Instalação

para efetuar a instalação e execução da aplicação é necessário que já tenha instalado na máquina o git e o composer.

é necessário fazer o clone do projeto na sua maquina através do seguinte código:

```
git clone https://github.com/rafaelnlimaBR/GEQ_Blog my-folder-name
```

feito a clonagem, é necessário a configuração da base de dados.
No arquivo .env altere "DB_DATABASE=seuBanco, DB_USERNAME=seuUsuario e DB_PASSWORD=sua Senha".
após feito as configurações é necessário a importação das estrutuas e registros com o seguinte código:

```
php artisan migrate --seed
```
Logo após a importação da estrutura é necessário fazer a geração do key da aplicação com o seguinte codigo.

```
php artisan key:generate
```

Pronto.

Para acessar o sistema é necessário usar o usuario "rafaelnlima@live.com" senha "123".
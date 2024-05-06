# Configuração de ambiente Docker

Este é um projeto simples que demonstra como configurar um ambiente de desenvolvimento PHP com Docker, incluindo um servidor Nginx, PHP e um banco de dados MySQL.

## Configuração do Ambiente

Este projeto usa Docker e Docker Compose para gerenciar o ambiente de desenvolvimento. Certifique-se de ter o Docker e o Docker Compose instalados no seu sistema.

## Como Usar

1. Clone este repositório.

2. Navegue até o diretório do projeto.
   
3. Inicie os contêineres Docker: "docker-compose up -d"
 
4. Abra seu navegador e acesse `http://localhost:8000` para ver a aplicação em funcionamento.

5. Para parar os contêineres Docker, execute: "docker-compose down".

## Arquivos e Diretórios

- `app/`: Este diretório contém os arquivos PHP da aplicação.
- `docker/php/`: Este diretório contém o Dockerfile para o contêiner PHP.
- `docker/nginx/`: Este diretório contém o arquivo de configuração do Nginx.
- `docker-compose.yml`: Este arquivo define os serviços Docker para o ambiente de desenvolvimento.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir um problema ou enviar um pull request.

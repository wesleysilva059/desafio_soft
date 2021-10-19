## DESAFIO VAGA FULLSTACK PHP - SOFTDESIGN

Sistema de cadastro de livro desenvolvido utilizando as seguintes tecnologias

- Laravel 8
- PHP 7.4
- MySQL 
- Tailwind
- - - - -

Foram utilizados conceitos de:
- Services
- Migrations

## Como instalar

- Clone este repositório com __git clone__
- Faça uma cópia do arquivo __.env.example__ para __.env__ e edit suas credenciais de acesso
- No terminal rode o comando __composer install__
- Rode o comando __php artisan key:generate__
- Rode o comando  __php artisan migrate --seed__ (O usuário será criado via seed)
- É possível Rodar a aplicção pelo comando __php artisan serve__ .
- Acesse no Brownser localhost:8000 
- Você podera acessar a aplicação com as credenciais __admin@admin.com__ - __123456__

## Licença

Esta aplicação é livre para uso da forma que melhor lhe aprouver.

---

## Informações Adicionais

- Foram criados 3 testes básicos no sistema
   - Teste de funcionalidade
   - Teste Unitário
   para testar rode no console __php artisan test__

   - Teste de Navegador
   para testar rode no console
      __php artisan dusk:install__ (necessário somente a primeira execução)
      __php artisan dusk__

## Docker

O Docker ainda é um assunto novo para mim, porem mesmo assim tentei aplicar no desenvolvimento, porém ocorreu um erro de permissão no servidor que não tive tempo de resolver.

O comando para subir o container seria o :

__docker-compose up -d__

*req: Docker e Docker-compose

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

# Projeto Laravel

Bem-vindo ao meu projeto Laravel! Este repositório contém um sistema em desenvolvimento que será aprimorado continuamente. Atualmente, ele conta com um CRUD de usuários funcional, e a ideia é evoluir a aplicação até integrá-la com Vue.js para criar uma experiência mais dinâmica e moderna.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para desenvolvimento web robusto e escalável.
- **MySQL**: Banco de dados relacional para armazenar as informações da aplicação.
- **Blade**: Motor de templates do Laravel para renderização de páginas.
- **Eloquent ORM**: Mapeamento objeto-relacional para interagir com o banco de dados.
- **Vue.js** *(futuramente)*: Framework JavaScript para a construção de uma interface mais dinâmica.

## Funcionalidades Atuais

- Cadastro, edição, listagem e exclusão de usuários (CRUD completo)
- Validações de entrada de dados
- Estrutura inicial pronta para futuras melhorias e integrações

## Próximos Passos

- Melhorar a estrutura do código e otimizar consultas ao banco de dados.
- Implementar autenticação e autorização de usuários.
- Criar uma API para facilitar a comunicação com o frontend.
- Integrar Vue.js para melhorar a experiência do usuário.

## Instalação e Configuração

Para rodar o projeto localmente, siga os passos abaixo:

1.  Clone este repositório:

    ```bash
    git clone [https://github.com/seu-usuario/seu-projeto.git](https://github.com/seu-usuario/seu-projeto.git)
    ```

2.  Acesse a pasta do projeto:

    ```bash
    cd seu-projeto
    ```

3.  Copie o arquivo de ambiente e configure suas credenciais:

    ```bash
    cp .env.example .env
    ```

4.  Instale as dependências do Laravel:

    ```bash
    composer install
    ```

5.  Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

6.  Instale as dependências do frontend:

    ```bash
    npm install
    ```

7.  Compile os assets do frontend:

    ```bash
    npm run dev
    ```

8.  Configure o banco de dados no arquivo `.env` e execute as migrações:

    ```bash
    php artisan migrate
    ```

9.  Inicie o servidor local:

    ```bash
    php artisan serve
    ```

## Contribuição

Este é um projeto pessoal em constante evolução. Sugestões e melhorias são sempre bem-vindas! Caso queira contribuir, abra uma issue ou envie um pull request.

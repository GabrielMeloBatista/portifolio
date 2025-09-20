# Portfólio Laravel - Template Moderno

Este projeto é um modelo básico e moderno de portfólio pessoal, criado com Laravel, Tailwind CSS e Blade. É ideal para desenvolvedores que desejam mostrar seus projetos, experiências e informações de contato de maneira responsiva e visualmente atraente.

## Objetivo

Fornecer uma base pronta para portfólios, facilitando a personalização e a rápida publicação de um site pessoal, com foco em responsividade, animações suaves e facilidade de uso.

## Tecnologias Utilizadas

- [Laravel 10+](https://laravel.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- Blade (motor de templates do Laravel)
- Vite (ferramenta de build frontend)
- PHP 8+

## Demonstração

Veja um exemplo de uso deste modelo rodando localmente após a instalação.

## Como Configurar

### 1. **Clone o repositório:**

```bash
git clone https://github.com/GabrielMeloBatista/portifolio.git
cd portifolio
```

### 2. **Instale as dependências:**

```bash
composer install
npm install
```

### 3. **Configure o ambiente:**

- Copie o arquivo de exemplo:
    [Clique aqui para ver o .env.example](./.env.example)
- Renomeie para `.env`:

```bash
cp .env.example .env
```

- Gere a chave da aplicação:

```bash
php artisan key:generate
```

- Ajuste as variáveis do `.env` conforme necessário (APP_NAME, APP_URL, etc).

### 4. **Rode as migrations (opcional):**

```bash
php artisan migrate
```

### 5. **Inicie o servidor de desenvolvimento:**

```bash
php artisan serve
npm run dev
```

### 6. **Acesse:**

 Abra [http://localhost:8000](http://localhost:8000) no navegador.

## Estrutura do Projeto

- `resources/views/` — Páginas Blade e layouts
- `resources/css/` — Estilos com Tailwind
- `routes/web.php` — Rotas principais
- `public/` — Assets públicos

## Personalização

- Edite os arquivos em `resources/views/` para alterar textos, cores e seções.
- Os efeitos de fundo e animações podem ser ajustados em `welcome.blade.php` e no CSS.
- Adicione seus projetos e informações pessoais facilmente.

## Licença

Este modelo é open-source e pode ser utilizado livremente para fins pessoais e profissionais.

---

Tem dúvidas ou sugestões? Abra uma issue ou entre em contato!

## A Fazer

- [ ] Pagina explicando o protocolo RS232
- [ ] Shaders
- [ ] Animação 3d
- [ ] Algum esteregg sobre anime e hatsune miku sou um fan
- [ ] Adicionar Kasane Teto
    - [ ] TetoPear

[![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)](https://laravel.com)

[![github](https://github.com/laravel/framework/workflows/tests/badge.svg)](https://github.com/laravel/framework/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/framework")
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/framework)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

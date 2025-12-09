<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Check Moi Ça

**Check Moi Ça** is a simple and powerful to-do list application built using **Laravel** and **TailwindCSS**. Stay organized, productive, and manage your daily tasks with an intuitive and beautiful interface.

## Features

- 📝 Create, edit, and delete to-do items
- ✅ Mark tasks as completed or pending
- 📱 Responsive UI powered by TailwindCSS
- ⚡ Fast, modern backend with Laravel
- 🔒 Secure authentication
- 🗂️ Categorize and manage your tasks efficiently

## Screenshots

> _Add some screenshots or a demo GIF here!_

## Tech Stack

- **Backend:** [Laravel](https://laravel.com/) (PHP)
- **Frontend UI:** [TailwindCSS](https://tailwindcss.com/)
- **Blade Templates**
- **Other:** (e.g., JavaScript, Alpine.js or Livewire if used)

## Getting Started

### Prerequisites

- [PHP](https://www.php.net/) >= 8.x
- [Composer](https://getcomposer.org/)
- [Node.js and npm](https://nodejs.org/)
- [MySQL](https://www.mysql.com/) or any supported DB

### Installation

1. **Clone the repo**

    ```bash
    git clone https://github.com/ChristEdenKouame/check-moi-ca.git
    cd check-moi-ca
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install JavaScript dependencies**

    ```bash
    npm install
    ```

4. **Copy and edit environment variables**

    ```bash
    cp .env.example .env
    # Edit .env to match your DB credentials and environment
    ```

5. **Generate application key**

    ```bash
    php artisan key:generate
    ```

6. **Run database migrations**

    ```bash
    php artisan migrate
    ```

7. **Build frontend assets**

    ```bash
    npm run build
    ```

8. **Start the development server**

    ```bash
    php artisan serve
    ```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

- Register a new account or sign in (if applicable)
- Start adding your tasks!
- Mark completed tasks
- Organize your workflow

## Folder Structure

- `app/` — Laravel application logic
- `resources/views/` — Blade templates
- `public/` — Public assets
- `routes/` — Route definitions

## Contributing

Contributions, issues, and feature requests are welcome!

1. Fork this repository
2. Create your feature branch: `git checkout -b my-feature`
3. Commit your changes: `git commit -am 'Add a new feature'`
4. Push to the branch: `git push origin my-feature`
5. Open a pull request

## License

[MIT](LICENSE)

## Contact

Created by [ChristEdenKouame](https://github.com/ChristEdenKouame) — feel free to reach out!

---
_Application to-do-list built with Laravel and TailwindCSS._

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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

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

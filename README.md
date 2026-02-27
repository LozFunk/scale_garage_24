# Mini Garage

Mini Garage is a Laravel-based web application for managing car models, images, comments, and users.

## Features

- User authentication and management
- Car model listing and management
- Image uploads for cars
- Commenting system
- Responsive UI with Bootstrap and Tailwind CSS
- RESTful API endpoints

## Live Demo

View the live site: [Scale Garage24](https://scale-garage-24.up.railway.app)

## 📸 Screenshots

### Home Page
![Home](screenshots/home.png)

### Showroom
![Car List](screenshots/showroom.png)

### Car Details
![Car Detail](screenshots/details-page.png)

### Registration Form
![Dashboard](screenshots/registration-form.png)

### Upload Form
![Car Management](screenshots/upload-form.png)


## Project Structure

- **app/**: Application core (Controllers, Models, Requests, Providers, View Components)
- **bootstrap/**: Laravel bootstrap files
- **config/**: Configuration files (database, session, cache, etc.)
- **database/**: Migrations, seeders, factories, SQLite database
- **public/**: Public assets and entry point (`index.php`)
- **resources/**: Views, CSS, JS
- **routes/**: Route definitions (`web.php`, `auth.php`, `console.php`)
- **storage/**: File and cache storage
- **tests/**: Unit and feature tests
- **vendor/**: Composer dependencies

## Setup

1. **Clone the repository**
2. **Install dependencies**
   ```sh
   composer install
   npm install
   ```
3. **Copy environment file**
   ```sh
   cp .env.example .env
   ```
4. **Generate application key**
   ```sh
   php artisan key:generate
   ```
5. **Run migrations**
   ```sh
   php artisan migrate
   ```
6. **Start development server**
   ```sh
   npm run dev
   php artisan serve
   ```

## Testing

Run all tests with:
```sh
php artisan test
```

## Configuration

- Environment variables are managed in `.env`
- Session, cache, and database settings are in `config/`
- Frontend assets are built with Vite (`vite.config.js`)

## Contributing

See [Laravel documentation](https://laravel.com/docs/contributions) for guidelines.

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

---

For more details, see the [Laravel documentation](https://laravel.com/docs).

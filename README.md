# 📚 Bookstore Management System

A simple Bookstore Management System built using **Laravel**.  
This system helps manage books, categories, and orders efficiently. Ideal for small-scale bookshops or digital book inventory tracking.

---

## 🔧 Features

- 📖 Book Management (CRUD)
- 🟒️ Category Management
- 🛒 Order Management
  <!-- 👥 User Authentication (Login/Register) -->
- 📊 Dashboard with statistics (optional)
- 📁 MVC Architecture (Laravel Standard)

---

## 🛠️ Tech Stack

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Template Engine
- **Database**: MySQL
- **Other Tools**: Composer, Artisan CLI

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/Pollob-Kumar/bookstore-laravel.git
cd bookstore-laravel
```

### 2. Install Dependencies

```bash
composer install
npm install && npm run dev
```

### 3. Set Up Environment

```bash
cp .env.example .env
php artisan key:generate
```

Configure your `.env` file with correct DB credentials.

### 4. Run Migrations (optional)

```bash
php artisan migrate
```

### 5. Start Development Server

```bash
php artisan serve
```

Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📂 Folder Structure

- `app/` – Core app logic (Models, Controllers, etc.)
- `routes/` – Web routes
- `resources/` – Views (Blade), CSS/JS assets
- `public/` – Public assets
- `database/` – Migrations and seeders

---

## ✍️ Author

**Pollob Kumar**  
📧 [pkspollob14@gmail.com](mailto:pkspollob14@gmail.com)  
🔗 [GitHub Profile](https://github.com/Pollob-Kumar)

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

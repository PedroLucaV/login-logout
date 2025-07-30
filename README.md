# 🔐 Login & Logout System

## 📋 Overview

This is a simple project designed to **practice and demonstrate API integration in Vue.js** for authentication purposes. It features **Login**, **Logout**, and **Token validation** using a Laravel backend with Sanctum.

## 🚀 Features

- User authentication with Sanctum  
- Token-based session validation  
- Login and Logout functionality  
- Front-end integration using Vue.js  
- Laravel API with Eloquent ORM  

## 🛠️ Technologies Used

### Front-end

- **Vue.js** — Reactive JavaScript framework  
- **Axios** — HTTP client for API requests  

### Back-end

- **Laravel** — PHP framework for building secure APIs  
- **Sanctum** — Lightweight Laravel authentication system  
- **Eloquent ORM** — Database interaction using Laravel’s ORM  

## 📦 Project Structure

```

/frontend   -> Vue.js application (Login UI, token management)
/backend    -> Laravel API (auth routes, Sanctum setup, user model)

```

## 🔧 Installation

### Backend (Laravel)

1. Clone the repository.
2. Run `composer install`
3. Configure your `.env` file (DB settings, Sanctum, CORS, etc).
4. Run database migrations:

``` bash
   php artisan migrate
```

5. Serve the API:

``` bash
   php artisan serve
```

### Frontend (Vue.js)

1. Navigate to the `frontend` directory:

``` bash
   cd frontend
```

2. Install dependencies:

```bash
    npm install
```

3. Start the dev server:

```bash
   npm run dev
```

## 🔐 Authentication Flow

1. **Login**: User submits credentials → request sent to Laravel API.
2. **Token Validation**: On success, Sanctum returns a token saved in the browser (e.g. localStorage).
3. **Protected Routes**: Token is attached via `Authorization: Bearer <token>` headers for secure requests.
4. **Logout**: Token/session is revoked on both the client and server.

## 📚 Learning Goals

* Deepen understanding of front-end/back-end integration.
* Practice secure authentication with Laravel Sanctum.
* Manage and validate sessions using tokens.
* Improve structuring full-stack projects.

## 📄 License

This project is for **educational purposes only**.
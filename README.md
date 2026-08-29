# 🎬 CineStream - Dynamic MVC Movie & Show Guide

A lightweight, modern web application built using **PHP (Pure MVC Architecture)**, **Custom Routing**, and **Bootstrap 5**. The application serves as an interactive movie and TV show directory that allows users to seamlessly browse and filter content in real-time without reloading the page.

---

## ✨ Features

* **Architectural Pattern**: Designed strictly using the **Model-View-Controller (MVC)** pattern for clean code separation.
* **Custom Router**: Built-in PHP router handling URI paths dynamically.
* **Autoloading**: Utilizes **Composer PSR-4** for clean and efficient class autoloading.
* **Client-Side Filtering**: Dynamic filtering for Movies and TV Shows powered by **Vanilla JavaScript**.
* **Modern UI**: Clean, responsive layout crafted with **Bootstrap 5** and **Bootstrap Icons**.

---

## 🛠️ Built With

* **PHP 8.x**
* **Composer (PSR-4)**
* **Bootstrap 5**
* **Vanilla JavaScript**
* **HTML5 / CSS3**

---

## 📁 Project Structure

```text
├── app/
│   ├── Controllers/
│   │   └── MovieController.php    # Business logic & View rendering
│   ├── Models/
│   │   └── Movie.php              # Data structure & Mock datasets
│   ├── Views/
│   │   └── home.php               # UI layout & client-side scripts
│   └── Router.php                 # Core Request Routing engine
├── public/
│   ├── .htaccess                  # Rewrite engine settings
│   └── index.php                  # Application entry point
├── .gitignore                     # Git exclusion rules
├── composer.json                  # PSR-4 Autoloading configuration
└── README.md                      # Project documentation
```
## 🚀 Getting Started
Prerequisites

Make sure you have a local web server installed (such as XAMPP, LAMP, or Apache) along with Composer.
### Installation
1. Clone the repository:
   ```text
    git clone [https://github.com/27waab/mvc-php-app.git](https://github.com/27waab/mvc-php-app.git)
   ```
2. Navigate to the project directory:
   ```text
   cd mvc-php-app
   ```
3. Install dependencies (Generate Autoloader):
   ```text
   composer install
   ```
4. Run the Application:
   Place the project directory inside your local server's web root (htdocs or www) and access it via your browser:
   ```text
   http://localhost/mvc/public/movies
   ```

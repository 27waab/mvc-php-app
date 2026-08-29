<?php

namespace App\Controllers;

use App\Models\Movie;

class MovieController {
    public function index () {
        $movieModel = new Movie();
        $content = $movieModel->getAllContent();
        require_once __DIR__ . '/../Views/home.php';
    }
}
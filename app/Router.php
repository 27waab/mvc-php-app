<?php
namespace App;

class Router {
    // جدول لتعريف الروابط الكنترولرات المقترنة بها
    private array $routes = [];

    // دالة لتسجيل رابط جديد
    public function get(string $path, array $controller): void {
        $this->routes['GET'][$path] = $controller;
    }

    // دالة التوجيه: تقرأ رابط المتصفح وتشغل الكنترولر المناسب
    public function dispatch(string $uri): void {
        // استخراج المسار فقط وتنظيفه من زوائد السيرفر المحتمله
        $path = parse_url($uri, PHP_URL_PATH);
        $path = str_replace('/mvc/public', '', $path);
        
        if ($path === '') {
            $path = '/';
        }

        // البحث هل الرابط مسجل لدينا؟
        if (isset($this->routes['GET'][$path])) {
            [$controllerClass, $method] = $this->routes['GET'][$path];
            $controller = new $controllerClass();
            $controller->$method();
        } else {
            http_response_code(404);
            echo "<h1>404 - الصفحة غير موجودة ⚠️</h1>";
        }
    }
}
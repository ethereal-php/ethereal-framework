<?php

if (!function_exists('env')) {
    function env($name, $default = null)
    {
        return $_ENV[$name] ?? getenv($name) ?: $default;
    }
}

if (!function_exists('app')) {
    function app(string $accessor = null)
    {
        $app = Ethereal\Foundation\Application::getInstance();

        return $accessor ? $app[$accessor] : $app;
    }
}

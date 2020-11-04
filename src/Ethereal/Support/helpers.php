<?php

if (!function_exists('env')) {
    function env($name, $default = null)
    {
        return $_ENV[$name] ?? getenv($name) ?: $default;
    }
}

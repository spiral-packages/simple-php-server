<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$rootDir = getenv('SERVER_ROOT_DIR') ?? __DIR__ . '/';

if ($uri !== '/' && file_exists($rootDir.'public'.$uri)) {
    return false;
}

require_once $rootDir.'app.php';

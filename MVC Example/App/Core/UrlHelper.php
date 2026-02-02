<?php

function url_to(string $destino, ?array $param = null): string
{
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    // Garante barra inicial
    $destino = '/' . ltrim($destino, '/');

    $url = '//' . $host . BASE_PATH . $destino;

    if (!empty($param)) {
        foreach ($param as $p) {
            $url .= '/' . urlencode((string)$p);
        }
    }

    return $url;
}

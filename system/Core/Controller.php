<?php

namespace Lieurcode\Core;

class Controller
{
    protected function view($view, $data = [])
    {
        extract($data);
        $viewFile = __DIR__ . '/../../app/Views/' . $view . '.php';

        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "View <b>$view</b> tidak ditemukan.";
        }
    }

    protected function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    // Tambahan: redirect helper
    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}


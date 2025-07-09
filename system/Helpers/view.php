<?php

function view($name, $data = []) {
    extract($data);
    ob_start();
    include "../app/Views/{$name}.php";
    $content = ob_get_clean();
    include "../app/Views/layouts/main.php";
}

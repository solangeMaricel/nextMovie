<?php

declare(strict_types=1);

function render_template(string $template, array $data = [])
{
    // metodo que extrae variables de array asociativos con extract
    // con esto no tengo que hacer $data["title"] automaticamente me genera una variable que se llama tittle = contenido
    extract($data);
    require "templates/$template.php";
}
?>
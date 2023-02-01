<?php

use App\Controller\PessoaController;

// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch ($url) 
{
    case '/':
        echo "página inicial";
        break;

    case '/pessoa':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
       echo "   PessoaController::index()";
        break;

    case '/pessoa/form':
        echo "  PessoaController::form()";
        break;

    case '/pessoa/form/save':
        echo "PessoaController::save()";
        break;

    case '/pessoa/delete':
        echo "PessoaController::delete()echo ";
        break;

    default:
        echo "Erro 404";
        break;
}
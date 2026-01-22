<?php

use app\controller\AlunosController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url){
  case "/":
    echo "Homepage";
    break;
  case "/alunos":
    AlunosController::listar();
    break;
  case "/alunos/cadastro":
    AlunosController::cadastrar();
    break;
}
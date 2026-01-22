<?php
// Diretório base
define("BASE_DIR", dirname(__FILE__, 2));
// Onde estão as views
define("VIEWS", BASE_DIR . "/Views");
// Acesso ao banco de dados
$_ENV["db"]["host"] = "localhost:3306";
$_ENV["db"]["usuario"] = "root";
$_ENV["db"]["senha"] = "Tyler@2405";
$_ENV["db"]["database"] = "biblioteca";


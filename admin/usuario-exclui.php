
<?php
use Projeto\Usuario;
require_once "../vendor/autoload.php";
$usuario = new Usuario;
$usuario->setId($_GET['id']);
$usuario->excluir();
    header("location:usuarios.php");
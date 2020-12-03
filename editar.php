<?php
require __DIR__.'/vendor/autoload.php';
use \App\Entity\Vaga;
if (!isset($_GET['id']) or !isset($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}
define('TITLE','Editar Vaga');

$vaga = VAGA::getVaga($_GET['id']);

if(!$vaga instanceof Vaga){
    header('location: index.php?status=error');
    exit;
}
if (isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $vaga->titulo = $_POST['titulo'];
    $vaga->descricao = $_POST['descricao'];
    $vaga->ativo = $_POST['ativo'];
    $vaga->atualizar();
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';

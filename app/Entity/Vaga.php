<?php
namespace App\Entity;
use \App\Db\Database;
class Vaga
{
     public $id;
     public $titulo;
     public $descricao;
     public $ativo;
     public $data;
    public function cadastrar(){
        $this->data = date('Y-m-d H:i:s');
        $database = new Database('vagas');
        $this->id = $database->insert([
           'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);

        print_r($this);
    }
}
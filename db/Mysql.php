<?php 
class Mysql 
{
    public $conn;
    public $titulo;
    public $duracao_de_tempo;
    public $receita;
    public $tipo;

public function __construct()
{
    $this->conn = new PDO("mysql:dbname=dbSantConfeitaria;host=localhost","root" , "");    
}

public function cadastrarReceita($cadastro)
{
    $stmt = $this->conn->prepare("INSERT INTO receitas(nome, ingredientes , modo_de_preparo, tempo ,tipo)
     VALUES(?,?,?,?,?)");

    $stmt->execute([$cadastro->nome, $cadastro->ingredientes,$cadastro->modo_de_preparo,$cadastro->tempo,$cadastro->tipo]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
    json_encode($resultado);
}

public function buscarReceita($tipoReceita){

    $stmt = $this->conn->prepare("select * from receitas where tipo like ?");
    $stmt->execute(["%$tipoReceita%"]);
    $receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $receitas;
    
}

public function buscarReceitaPorId($idReceita){

$stmt = $this->conn->prepare("SELECT * FROM receitas WHERE id = ?");
$stmt->execute([$idReceita]);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $resultado[0];

}

}


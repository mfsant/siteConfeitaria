<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Receitas</title>
    <link rel="stylesheet" href="../css/cadastro_styles.css">
    <a href="../db/Mysql.php"></a>
</head>

<body>
    <form method="post">
        <h1>Cadastrar Receitas</h1>
        <label for="escolha">Cadastrar:</label>
        <select id="opções" name="tipo">
            <option value="bolo">bolos</option>
            <option value="torta">tortas</option>
            <option value="doce_caseiro">doces caseiros</option>
            <option value="natal">natal</option>
            <option value="dia_das_mães">dia das mães</option>
            <option value="dia_dos_pais">dia dos pais</option>
            <option value="festa_junina">festa junina</option>

        </select>
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <label for="">Ingredientes:</label>
        <textarea name="ingredientes" rows="10" cols="40" maxlength="1000"></textarea>
        <label for="">Modo de preparo:</label>
        <textarea name="modo_de_preparo" rows="15" cols="40" maxlength="1000"></textarea>
        <label for="">tempo:</label>
        <input type="text" name="tempo">
        <button type="submit" name="enviar">enviar</button>
    </form>
</body>

</html>
<?php
$cadastro = (object)[];
require_once('../db/Mysql.php');
$mysql = new Mysql();
if (isset($_POST['enviar'])) {
    $cadastro->tempo = $_POST['tempo'];
    $cadastro->ingredientes = $_POST['ingredientes'];
    $cadastro->modo_de_preparo = $_POST['modo_de_preparo'];
    $cadastro->nome = $_POST['nome'];
    $cadastro->tipo = $_POST['tipo'];
    $receitas = (object) $mysql->cadastrarReceita($cadastro);
}


?>
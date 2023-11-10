<?php

require_once("../db/Mysql.php");
$idReceita = $_GET['id'];
$mysql = new Mysql();
$receita = (object) $mysql->buscarReceitaPorId($idReceita);
$ingredientes = explode(".", $receita->ingredientes);
$modo_de_preparo = explode("." , $receita->modo_de_preparo);

if(isset($_POST['voltar'])){
 header("location:./SantConfeitaria.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolos e Tortas</title>
    <a href="../db/Mysql.php"></a>
    <link rel="stylesheet" href="../css/bolosetortas_styles.css">
</head>


<body>
    </div>


    <div class="row">
        <div class="col"></div>
        <div class="col-sm-6">
            <div class="container">

                <hr><h3><?= $receita->nome ?></h3><br><hr>
                <form action="" method="post">
                <button name="voltar" type="submit" class="btn-close" aria-label="Close"></button>
                </form>
                <img src="<?= $receita->img ?>" class="card-img-top" alt="" style="" height="490vh" width="390vh">
                <hr>
                <h5><i class="fa-solid fa-book"></i> Ingredientes</h5><hr>
                <?php foreach ($ingredientes as $ingrediente) : ?>
                    <h5><?= $ingrediente ?></h5>
                <?php endforeach; ?>
                <br><h5><i class="fa-solid fa-spoon"></i> Modo de Preparo</h5><hr>
                <?php foreach ($modo_de_preparo as $modo_de_preparo) : ?>
                   <h5><?= $modo_de_preparo ?></h5>
                <?php endforeach;?>
                <br><h5><i class="fa-regular fa-clock"></i> Tempo</h5><hr>
                <h5><?= $receita->tempo ?></h5>




            </div>
        </div>
        <div class="col"></div>
    </div>
    </section>


    </form>

    <body></body>
    <footer>

<hr></span><p>SantConfeitaria</p>
<h1>As melhores receitas vc encontra aqui!</h1>
<h1><i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-twitter"> <i class="fa-brands fa-tiktok"> </i></i> <br></i> <h3><?php echo date('Y'); ?></h3><hr><br></h1>

</footer>
</html>
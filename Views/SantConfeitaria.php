<?php
require_once("../db/Mysql.php");
$tipoReceita = [];
$receitas = [];
$mysql = new Mysql();
$receitas =  $mysql->buscarReceita('');

if (isset($_POST['pesquisar'])) {
    $tipoReceita = $_POST['tipo_receita'];
    $receitas =  $mysql->buscarReceita($tipoReceita);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SantConfeitaria</title>
    <a href="../db/Mysql.php"></a>
    <link rel="stylesheet" href="../css/bolosetortas_styles.css">


</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">SantConfeitaria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                </ul>
                <form class="d-flex" method="post">
                    <input name="tipo_receita" class="form-control me-2" type="pesquisar" placeholder="pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="pesquisar">Pesquisar</button>


            </div>
        </div>
    </nav>
</header>


<body>
    
    <div class="header-content">
        <hr><h3>SantConfeitaria</h3><hr>
      
    </div>


    </div>
    </div>
    <div class="col"></div>
    </div>
    </section>
    <section class="receitas">
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-10">
                <div class="row">
                    <?php if (count($receitas) > 0) : ?>
                        <?php foreach ($receitas as $receita) : ?>
                            <div class="col-3">
                            
                            
                            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                                    <img src="<?= $receita['img'] ?>" class="card-img-top" alt="" style="" height="190vh" width="190vh">
                                    <div class="card-body">
                                    <a class="link-dark" href="./receita.php?id=<?= $receita['id'] ?>" class="card-text"><?= $receita['nome'] ?></a>
                                    <hr><h6><i class="fa-regular fa-clock"></i><?= $receita['tempo'] ?></h6>                                    
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col"></div>
        </div>

    </section>

    </form>
</body>
<footer>

    <hr></span><p>SantConfeitaria</p>
    <h1>As melhores receitas vc encontra aqui!</h1>
    <h1><i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-twitter"> <i class="fa-brands fa-tiktok"> </i></i> <br></i> <h3><?php echo date('Y'); ?></h3><hr><br></h1>
    
</footer>

</html>
</body>

</html>
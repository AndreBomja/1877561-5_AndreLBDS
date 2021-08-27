<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAtsGUYevN.ttf" crossorigin="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- <link rel="stylesheet" href="lib/bulma.css">
    <link rel="stylesheet" href="lib/swiper.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css"> -->
    
    <?php if ($pagina === "index") : ?>
        <?php  echo '<link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>'?>
        <?php  echo '<link rel="stylesheet" href="lib/swiper.css" />' ?>
        <?php  echo '<link rel="stylesheet" href="lib/bulma.css" />' ?>
        <?php  echo '<link rel="shortcut icon" href="img/logo/Zeca_ico.png" type="image/x-icon">' ?>
        
    <?php endif; ?>

    <?php if ($pagina === "quemSomos" || $pagina === "produto" || $pagina === "contato"): ?>
        <?php  echo '<link type="text/css" rel="stylesheet" href="../css/index.css"  media="screen,projection"/>' ?>
        <?php  echo '<link rel="stylesheet" href="../lib/swiper.css" />' ?>
        <?php  echo '<link rel="stylesheet" href="../lib/bulma.css" />' ?>
        <?php  echo '<link rel="shortcut icon" href="../img/logo/Zeca_ico.png" type="image/x-icon">' ?>
    <?php endif; ?>
    
    <title>Zeca doces</title>
</head>

<body>
    <main>
        <!--MENU-->
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <div class="logo">
                    <?php if ($pagina === "index") : ?>
                    
                        <?php  echo '<img src="img/logo/Zeca_logo.png" alt="Logo">'?>

                    <?php endif; ?>
                    <?php if ($pagina === "quemSomos" || $pagina === "produto" || $pagina === "contato") : ?>
                    
                        <?php  echo '<img src="../img/logo/Zeca_logo.png">'?>

                    <?php endif; ?>
                        <!-- <img src="img/logo/Zeca_logo.png" alt="Logo"> -->
                    </div>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start" id="btn-menu">
                    <?php if ($pagina === "index") : ?>
                        <?php  echo '<a href="index.php"           class="navbar-item btn active">Home</a>'?>
                        <?php  echo '<a href="pages/quemSomos.php" class="navbar-item btn ">Quem somos</a>'?>
                        <?php  echo '<a href="pages/contato.php"      class="navbar-item btn ">Contato</a>'?>
                    <?php endif; ?>
                    <?php if ($pagina === "quemSomos" || $pagina === "produto" || $pagina === "contato") : ?>
                        <?php  echo '<a href="../index.php"          class="navbar-item btn active">Home</a>'?>
                        <?php  echo '<a href="../pages/quemSomos.php" class="navbar-item btn">Quem somos</a>'?>
                        <?php  echo '<a href="../pages/contato.php"      class="navbar-item btn">Contato</a>'?>
                    <?php endif; ?>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a class="button is-primary">
                                    <strong>Revendedor</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

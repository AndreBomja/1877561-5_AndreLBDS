<?php 
    $pagina = "produto";
    include '../funcoes/validadores.php';
    $dados = include '../dados/dados.php';

    $id = $_GET['id'];
    $array = $_GET['array'];
    $isPROD = "false";
    $infoPROD = getInfo($dados, $id, $isPROD, $array );

if (!$infoPROD['isReturn']) {
    //  header('location: ../index.php?erro=erro');
    exit();
}


    include '../layout/header.php';
?>

<article class="produto ">
    <div class="content-produto container ">
        <div class="content-produto-img">
            <figure>
                <img src=<?= "../" . $infoPROD['img'] ?> alt="Doce do Zeca" />
                <legend>*Imagem meramente ilustrativa</legend>
            </figure>
        </div>
        <form action="comprar.php" method="post">
        <div class="content-produto-descricao">
            <div class="content-produto-nome">
                <h2><?= $infoPROD['name']  ?></h2>
                <input type="hidden" name="Nome" value="<?= $infoPROD['name'] ?>" />
            </div>
            <div class="content-produto-desc">
                <h2><?= $infoPROD['description']  ?></h2>
                <input type="hidden" name="descricao" value="<?= $infoPROD['description'] ?>" />
            </div>
            <div class="content-produto-price">
            <h2><?=  $infoPROD['price'] ?></h2>
                <input type="hidden" name="preco" value="<?= $infoPROD['price'] ?>" />
            </div>
            <div class="content-produto-qtd-comprar">
                <div class="content-produto-qtd">
                    <input type="number" class="" step="1" min="1" max="" name="quantity" value="1" title="Qtd" size="4" placeholder="" inputmode="numeric">
                </div>
                <div class="content-produto-comprar">
                <button class="button is-success"><a href="comprar.php"></a> Comprar</button>
                </div>
                <div class="content-produto-ico">
                    <span style='font-size:50px;'>&#129316;</span>
                    <span style='font-size:50px;'>&#128525;</span>
                </div>
            </div>
        </div>
        </form>
    </div>
</article>

<?php 
      include '../layout/footer.php';
?>
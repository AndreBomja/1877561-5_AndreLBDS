<?php 
    $pagina = 'index';
    include 'layout/header.php';
    include 'funcoes/validadores.php';
    $dados = include 'dados/dados.php';
?>
<?php 
foreach ($dados as $key => $object) : 
    if (validar_array($dados, $key) !== true) {
    header('location: index.php?erro=erro');
    exit();
  }
?>
<?php endforeach; ?>
<?php foreach ($dados as $key => $object) : ?>
    <?php if ($key === 0) : ?>
        <?php
        $vitrine = 'Mais vendidos';
        ?>
    <?php elseif ($key === 1) : ?>
        <?php
        $vitrine = 'Tradicionais';
        ?>
    <?php endif; ?>
        <!--PRODUTOS SLIDER-->
        <article class="content container">
            <!-- Swiper -->
            <div class="swiper container">
                <h2><?= $vitrine  ?></h2>
                <div class="swiper-wrapper">
                <?php foreach ($object as $field => $value) : ?>
                        <?php foreach ($object[$field] as $field => $value) : ?>
                            <?php if ($field == 'img') : ?>
                                <?php
                                $urlIMG = $value;
                                ?>
                            <?php else : ?>
                                <?php if ($field == 'id') : ?>
                                    <?php
                                    $idPROD = $value;
                                    ?>
                                <?php endif; ?>
                                <?php if ($field == 'name') : ?>
                                    <?php
                                    $nome =  $value;
                                    ?>
                                <?php endif; ?>
                                <?php if ($field == 'price') : ?>
                                    <?php
                                    $preco = 'R$ '.$value;
                                    ?>
                                <?php endif; ?>
                                <?php if ($field == 'description') : ?>
                                    <?php
                                    $description = $value;
                                    ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    <div class="swiper-slide">
                       <a href="pages/produto.php?id=<?= $idPROD  ?>&array=<?= $key  ?>"> <img src="<?= $urlIMG ?>" alt="Produto" ></a>
                        <div class="info-produto">
                            <div class="nome">
                                <div class="nome-a">
                                <a href="pages/produtos.php?="><?= $nome ?></a>
                                </div>
                            </div>
                            <div class="preco">
                            <a href="pages/produtos.php?="><?= $preco ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
        </article>
<?php endforeach; ?>
<?php 
    include 'layout/footer.php';
?>
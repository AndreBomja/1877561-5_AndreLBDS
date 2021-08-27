<?php 
    $pagina = "produto";
    include '../layout/header.php';
?>




<article class="produto ">
    <div class="content-produto container ">
        <div class="content-produto-img">
            <figure>
                <img src="../img/maisVendidos/Doce-Cremoso-com-Leite-e-Goiabafe95.jpg" alt="Doce de Leite" />
                <legend>*Imagem meramente ilustrativa</legend>
            </figure>
        </div>
        <form action="comprar.php" method="post">
        <div class="content-produto-descricao">
            <div class="content-produto-nome">
                <h2>morango</h2>
                <input type="hidden" name="Nome" value="" />
            </div>
            <div class="content-produto-desc">
                <h2>33</h2>
                <input type="hidden" name="descricao" value="" />
            </div>
            <div class="content-produto-price">
                <h2>22</h2>
                <input type="hidden" name="preco" value="" />
            </div>
            <div class="content-produto-qtd-comprar">
                <div class="content-produto-qtd">
                    <input type="number" class="" step="1" min="1" max="" name="quantity" value="1" title="Qtd" size="4" placeholder="" inputmode="numeric">
                </div>
                <div class="content-produto-comprar">
                <button class="button is-success">Comprar</button>
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
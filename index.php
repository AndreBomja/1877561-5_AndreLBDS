<?php 
    $pagina = 'index';
    include 'layout/header.php';
?>
        <!--PRODUTOS SLIDER-->
        <article class="content container">
            <!-- Swiper -->
            <div class="swiper container">
                <h2>Mais Vendidos</h2>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/maisVendidos/Brigadeiro-com-Cocada-3fe95.jpg" alt="produto" />
                        <div class="info-produto">
                            <div class="nome">
                                <div class="nome-a">
                                    <a href="#">Nome Loram Ipsim Doce Bomjardim Almeida de souza</a>
                                </div>
                            </div>
                            <div class="preco">
                                <p href="#">Preço</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
        </article>

<?php 
    include 'layout/footer.php';
?>
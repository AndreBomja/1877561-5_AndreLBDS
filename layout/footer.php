<section class="rodape ">
            <article class="footer">
                <div id="dados-academicos">
                    <h2>SUPERIOR DE TECNOLOGIA EM SISTEMAS</h2>
                    <h3>DISCIPLINA: BACK END I</h3>
                    <p>NOME: ANDRE LUIS BOMJARDIM DOS SANTOS</p>
                    <p>RA: 1877561-5</p>
                </div>
                <div id="dados-menu">
                    <nav>
                        <ul>
                            <li><a href="../index.php" class="">Home</a></li>
                            <li><a href="../index.php" class="">Quem somos</a></li>
                            <li><a href="../index.php" class="">Contato</a></li>
                            <li><a href="../index.php" class="">Localização</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="dados-social">
                    <a href=""><img src="img/social/social-facebook.png" alt=""></a>
                    <a href=""><img src="img/social/social-twitter.png" alt=""></a>
                    <a href=""><img src="img/social/social-youtube.png" alt=""></a>
                </div>
            </article>
        </section>
        <?php if ($pagina === "index") : ?>

            <?php  echo '<script src="lib/swiper.js"></script>'?>
            <?php  echo '<script src="js/index.js"></script>'?>
        <?php endif; ?>
        <?php if ($pagina === "quemSomos") : ?>
            <?php  echo '<script src="../lib/swiper.js"></script>'?>
            <?php  echo '<script src="../js/index.js"></script>'?>
        <?php endif; ?>
        <!-- <script src="lib/swiper.js"></script>
        <script src="js/index.js"></script> -->
</body>

</html>
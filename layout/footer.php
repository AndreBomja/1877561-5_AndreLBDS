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
                        <?php if ($pagina === "index") : ?>
                            <?php  echo  '<li><a href="index.php" class="">Home</a></li>'?>
                            <?php  echo '<li><a href="pages/quemSomos.php" class="">Quem somos</a></li>' ?>
                            <?php  echo  '<li><a href="pages/contato.php" class="">Contato</a></li> '?>
                           
                        
                        <?php endif; ?>
                        <?php if ($pagina === "quemSomos" || $pagina === "produto" || $pagina === "contato") : ?>
                            <?php  echo  '<li><a href="../index.php" class="">Home</a></li>'?>
                            <?php  echo '<li><a href="../pages/quemSomos.php" class="">Quem somos</a></li>' ?>
                            <?php  echo  '<li><a href="../pages/contato.php" class="">Contato</a></li> '?>
                        
                        <?php endif; ?>
                          
                        </ul>
                    </nav>
                </div>
                <div id="dados-social">
                <?php if ($pagina === "index") : ?>
                            <?php  echo  '<a href=""><img src="img/social/social-facebook.png" alt=""></a>'?>
                            <?php  echo '<a href=""><img src="img/social/social-twitter.png" alt=""></a>' ?>
                            <?php  echo  '<a href=""><img src="img/social/social-youtube.png" alt=""></a>'?>
                        <?php endif; ?>
                        <?php if ($pagina === "quemSomos" || $pagina === "produto" || $pagina === "contato") : ?>
                            <?php  echo  '<a href=""><img src="../img/social/social-facebook.png" alt=""></a>'?>
                            <?php  echo '<a href=""><img src="../img/social/social-twitter.png" alt=""></a>' ?>
                            <?php  echo  '<a href=""><img src="../img/social/social-youtube.png" alt=""></a>'?>
                        <?php endif; ?>
                </div>
            </article>
        </section>
        <?php if ($pagina === "index") : ?>

            <?php  echo '<script src="lib/swiper.js"></script>'?>
            <?php  echo '<script src="js/index.js"></script>'?>
        <?php endif; ?>
        <?php if ($pagina === "quemSomos" || $pagina === "produto" || $pagina === "contato") : ?>
            <?php  echo '<script src="../lib/swiper.js"></script>'?>
            <?php  echo '<script src="../js/index.js"></script>'?>
        <?php endif; ?>
        <!-- <script src="lib/swiper.js"></script>
        <script src="js/index.js"></script> -->
</body>

</html>
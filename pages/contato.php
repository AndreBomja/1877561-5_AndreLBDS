<?php 
    $pagina = "quemSomos";
    include '../layout/header.php';
?>

<article class="localizacao">
    <div class="localizacao-title-1">
        <h2>Contato</h2>
    </div>
    <div class="information container">
        <h3>Entre em contato com agente, adoramos sugestões, opniões e críticas</h3>
    </div>
    <div class="conteudo container">
        <div class="dados-form container">
            <div class="dados-img">
                
            </div>
            <div class="dados-input">
                <form class="inputs" action="/action_page.php" method="POST" >
                    <label></label>
                    <input class="input is-large" type="text" placeholder="nome">
                    <label></label>
                    <input class="input is-large" type="email" placeholder="email">
                    <textarea class="textarea" placeholder="Escreva sua mensagem aqui..."></textarea>
                    <input type="submit" value="Enviar mensagem">
                </form>
            </div>
        </div>
        </div>
        <div class="information-address container">
        <address class="">
            Fábrica dO Zec <a href="mailto:webmaster@example.com">email </a>.<br>
            Visite-nos Paraná:<br>
            Endereço <br>
            Av. 564, Cidade Exemple<br>
        </address>   
        </div>
        
</article>

<?php 
      include '../layout/footer.php';
?>
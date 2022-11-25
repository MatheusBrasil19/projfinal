<?php
session_start();
 
require_once 'init.php';
 
require 'check.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/panel.css">
        <title>Painel</title>
    </head>
    <img src="../img/copa.png" id="img">
    <body>
         
        <h1>Painel do Usuário</h1>
 
            <p id="label">Bem-vindo (a), <?php echo $_SESSION['user_name']; ?>! | Clique aqui Para <a href="logout.php">Sair</a></p>



    <body>
         
        
        <div class="selecoes">
            <a href="https://g1.globo.com/mundo/copa-do-catar/noticia/2022/11/20/catar-x-equador-confira-os-memes-do-primeiro-jogo-da-copa-do-mundo-2022.ghtml">
                <img src="../img/qatar.png" id="qatar">
            </a>
            <a href="https://www.uol.com.br/esporte/futebol/copa-do-mundo/2022/11/20/qatar-x-equador-copa-do-mundo-2022.htm">
                <img src="../img/equador.png" id="equador">
            </a>
            <a href="https://temporeal.lance.com.br/copa-do-mundo-2022-21-11-2022-senegalxholanda">
            <img src="../img/senegal.png" id="senegal">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/holanda/noticia/2022/11/21/laranja-ou-amarela-camisa-da-holanda-na-copa-do-mundo-deixa-publico-confuso.ghtml">
            <img src="../img/holanda.png" id="holanda">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/inglaterra/noticia/2022/11/21/inglaterra-protesta-apos-veto-a-bracadeiras.ghtml">
            <img src="../img/inglaterra.png" id="inglaterra">
            </a>
            <a href="https://ge.globo.com/futebol/copa-do-mundo/noticia/2022/11/21/pais-de-gales-acolhe-veto-da-fifa-e-usa-apenas-a-bracadeira-oficial-na-estreia-na-copa.ghtml">
                <img src="../img/gales.png" id="gales">
            </a>
            <a href="https://www.band.uol.com.br/esportes/futebol/copa-do-mundo/placar/ao-vivo/estados-unidos-x-pais-de-gales-201304">
                <img src="../img/usa.png" id="eua">
            </a>
            <a href="https://g1.globo.com/mundo/copa-do-catar/noticia/2022/11/21/jogadores-do-ira-nao-cantaram-o-hino-nacional-em-forma-de-protesto.ghtml">
                <img src="../img/iran.png" id="ira">
            </a>
            <a href="https://www.uol.com.br/esporte/futebol/copa-do-mundo/2022/11/21/argentina-arabia-saudita-copa-do-mundo-grupo-c-onde-assistir-transmissao.htm">
                <img src="../img/argentina.png" id="argentina">
            </a>
            <a href="https://www.uol.com.br/esporte/futebol/copa-do-mundo/2022/11/21/argentina-arabia-saudita-copa-do-mundo-grupo-c-onde-assistir-transmissao.htm">
                <img src="../img/arabia.png" id="arabia">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/mexico/noticia/2022/11/20/representante-do-mexico-vai-a-abertura-da-copa-do-catar-pensando-na-cerimonia-de-2026.ghtml">
                <img src="../img/mexico.png" id="mexico">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/polonia/noticia/2022/11/21/nao-e-so-lewandowski-conheca-outros-cinco-destaques-da-polonia-para-ficar-de-olho-na-copa.ghtml">
                <img src="../img/polonia.png" id="polonia">
            </a>
            <a href="https://www.terra.com.br/esportes/franca-x-australia-onde-assistir-provaveis-times-e-desfalques-do-jogo-da-copa-do-mundo,2adf4efa68800ebbf7e610259655227can19gk2y.html">
                <img src="../img/australia.png" id="australia">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/dinamarca/noticia/2022/11/21/estamos-gratos-por-eriksen-estar-aqui-afirma-capitao-da-dinamarca.ghtml">
                <img src="../img/dinamarca.png" id="dinamarca">
            </a>
            <a href="https://www.espn.com.br/futebol/copa-do-mundo/artigo/_/id/11249212/benzema-cortado-franca-apos-sofrer-lesao-treino-esta-fora-copa-mundo-qatar">
                <img src="../img/franca.png" id="franca">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/tunisia/noticia/2022/11/21/tecnico-da-tunisia-aposta-em-apoio-em-massa-de-arabes-como-trunfo-na-copa.ghtml">
                <img src="../img/tunisia.png" id="tunisia">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/costa-rica/noticia/2022/11/20/zagueiro-destaca-experiencia-adquirida-em-copas-e-projeta-costa-rica-forte-contra-espanha.ghtml">
                <img src="../img/costa.png" id="costa">
            </a>
            <a href="https://diariodopoder.com.br/notas/ttc-fique-de-olho/comitiva-do-governo-da-alemanha-conhece-sistema-de-meio-ambiente-do-amazonas">
                <img src="../img/alemanha.png" id="alemanha">
            </a>
            <a href="https://www.lance.com.br/copa-do-mundo/japao/japao-pode-ter-retorno-de-morita-para-estreia-contra-alemanha-na-copa-do-mundo.html">
                <img src="../img/japao.png" id="japao">
            </a>
            <a href="https://trivela.com.br/copa-do-mundo/espanha-corta-o-lateral-jose-gaya-por-lesao-e-convoca-alejandro-balde-do-barcelona/">
                <img src="../img/espanha.png" id="espanha">
            </a>
            <a href="https://br.bolavip.com/futebol/Qatar-2022-Belgica-e-mais-uma-selecao-a-sofrer-com-baixa-por-lesao-as-vesperas-da-estreia-no-Mundial--20221120-0056.html">
                <img src="../img/belgica.png" id="belgica">
            </a>
            <a href="https://revistaforum.com.br/esporte/copadomundo/2022/11/21/seleo-do-canada-chega-copa-do-mundo-do-catar-2022-para-sua-segunda-participao-na-historia-dos-mundiais-127592.html">
                <img src="../img/canada.png" id="canada">
            </a>
            <a href="https://www.netflu.com.br/apostas/marrocos-x-croacia-palpite-prognostico-transmissao/">
                <img src="../img/croacia.png" id="croacia">
            </a>
            </a>
            <a href="https://www.netflu.com.br/apostas/marrocos-x-croacia-palpite-prognostico-transmissao/">
                <img src="../img/marrocos.png" id="marrocos">
            </a>
            <a href="https://www1.folha.uol.com.br/mercado/2022/11/servidores-terao-horario-especial-nos-jogos-do-brasil-na-copa-veja-como-sera.shtml">
                <img src="../img/brasil.png" id="brasil">
            </a>
            <a href="https://ge.globo.com/futebol/selecoes/camaroes/noticia/2022/11/21/nao-viemos-como-turistas-ao-catar-diz-auxiliar-de-camaroes-sobre-a-pressao-de-samuel-etoo.ghtml">
                <img src="../img/camaroes.png" id="camaroes">
            </a>
            <a href="https://ge.globo.com/futebol/selecao-brasileira/noticia/2022/11/21/comissao-tecnica-e-jogadores-da-selecao-visitam-estadio-da-estreia-contra-a-servia.ghtml">
                <img src="../img/servia.png" id="servia">
            </a>
            <a href="https://premierleaguebrasil.com.br/suica-x-camaroes-palpites-dicas-e-prognostico-24-11/">
                <img src="../img/suica.png" id="suica">
            </a>
            <a href="https://www.uol.com.br/esporte/futebol/copa-do-mundo/enquetes/2022/11/20/portugal-x-gana-quem-vence-o-jogo-pelo-grupo-h-da-copa-do-mundo.htm">
                <img src="../img/gana.png" id="gana">
            </a>
            <a href="https://www.uol.com.br/esporte/futebol/copa-do-mundo/enquetes/2022/11/20/portugal-x-gana-quem-vence-o-jogo-pelo-grupo-h-da-copa-do-mundo.htm">
                <img src="../img/portugal.png" id="portugal">
            </a>
            <a href="https://www1.folha.uol.com.br/esporte/2022/11/son-jogara-com-mascara-de-protecao-na-estreia-da-coreia-do-sul-na-copa.shtml">
                <img src="../img/koreia.png" id="k  oreia">
            </a>
            <a href="https://www.lance.com.br/copa-do-mundo/uruguai/torcida-do-uruguai-provoca-brasil-em-musica-da-copa-nao-sou-brasileiro-porque-nao-vivo-so-de-titulos.html">
                <img src="../img/uruguai.png" id="uruguai">
            </a>
        </div>
    </body>
</html>

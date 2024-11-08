<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="assets/icons/icone_branco.png">
    <link rel="preload" href="js/script.js" as="script">
    <link rel="preload" href="css/main.css" as="style">
    <title>Ricardo Santos</title>
</head>
<body>
    <!-- Inicio Aniversário -->
    <div class="alerta" id="alt">
        <div class="mensagem">
            <img src="assets/exit.png" id="exit">
            <img src="assets/aniversario.png" id="aniver" style="width: 55%; height: auto;">
            <h3>Hoje é aniversário do Ricardo Santos!</h3>
            <h4>Mande sua mensagem!</h4>
        </div>
    </div>
    <!-- Fim Aniversário -->
    <!-- Header do Site -->
    <header id="head">
        <div class="shortcuts">
            <a style="width: 5%; height: 25px;"><img id="logo" src="assets/icons/icone_branco.png"></a>
            <a href="#head" class="btn">Home</a>
            <a href="#anchorAbout" class="btn">Memórias</a>
            <a href="#anchorMusic" class="btn">Músicas</a>
            <a href="#anchorPhotos" class="btn">Fotos</a>
            <a href="#anchorVideos" class="btn">Vídeos</a>
            <a href="#section_e" class="btn">Contato</a>
        </div>
        <div class="content_header">
            <span>Ricardo Santos</span> 
        </div>
    </header>
    <main class="main">
        <!-- Sobre mim -->
        <span id="anchorAbout" style="opacity:0"></span>
        <section id="section_a">
            <h3 style="text-align: center">Memórias</h3>
            <p>Em 1976 na cidade de Rio Grande inicia minha história, João Ricardo da Silveira dos Santos, Ricardinho. Quando menino Deus colocou no meu coração um sonho. Sonho de cantar, inspirado em artistas como, Chitãozinho e Xororó, autodidata comecei cantando aos 14 anos por incentivo dos amigos de infância, Fabiano (Binho), Valdemir de Lima (fincão), Sandro Barcelos (Sandrinho) fazendo apresentações em tertúlias, do saudoso Edi San Martins, e participando de festivais de música sertaneja. Em 1995 por intermédio do amigo Fabiano (Binho) comecei os primeiros toques na bateria, em 1994 me tornei integrante do grupo Bailantas, Vila da Quinta, posteriormente no grupo Herança Campeira de Pelotas, com a oportunidade de nos apresentar em diversos locais, incluindo o palco da Festa do mar. Minhas referências foram grandes bateristas da região, dentre eles, Paulo Batera, Leandro Marques, Marquinhos Fê, Paulo Olmedo, Fabiano (Binho) e o grande professor Petto. No ano de 1996, por intermédio do amigo Claudio Soares, participei de um teste e com a aprovação passei a integrar um dos melhores grupos da música gaúcha, Grupo Querência de Pelotas.</p>
            <a href="pages/about.php" class="btn">Leia mais</a>
        </section>
        <section id="img_a" class="img">
            <span id="anchorMusic"></span>
        </section>
        <!-- Aba das Músicas -->
        <section id="section_b"> </br>
            <h3 style="text-align: center; color: white;">Músicas</h3>                
            <div class="mainB">
                <img id="prev" onclick="prev()" src="assets/icons/previousW.png">
                    <div class="musicContent">
                        <div class="infoMusic">
                            <div class="music">
                                <p id="title"></p>
                                <p id="album"></p>
                                <audio id="msc" controls controlsList="nodownload noplaybackrate">
                                    <source src="" type="audio/mp3">
                                </audio>
                            </div></br>
                            <a href="pages/musicas.php" alt="Ver músicas">Ver músicas</a>
                        </div>
                        <div class="infoCd">
                            <img id="cds" src="">
                        </div>
                    </div>
                <img id="next" onclick="next()" src="assets/icons/nextW.png"> 
            </div>   
        </section>
        <section id="img_b" class="img">
            <span id="anchorPhotos"></span>
        </section> 
        <!-- Aba das Fotos -->
        <section id="section_c">
            <h3 id="anchorImg" style="text-align: center;">Fotos</h3>
            <div class="slider"> 
                <img id="prevImg" onclick="prevImage()" src="assets/icons/previous.png">
                <div class="container">
                    <div id="imageContainer" class="image">
                        <img src="images/1.jpg" class="ativo" id="id1">
                        <img src="images/2.jpg" id="id2">
                        <img src="images/3.jpg" id="id3">
                        <img src="images/4.jpg" id="id4">
                        <img src="images/5.jpg" id="id5">
                        <img src="images/6.jpg" id="id6">
                        <img src="images/7.jpg" id="id7">
                        <img src="images/8.jpg" id="id8">
                        <img src="images/9.jpg" id="id9">
                        <img src="images/10.jpg" id="id10">
                        <img src="images/11.jpg" id="id11">
                        <img src="images/12.jpg" id="id12">
                        <img src="images/13.jpg" id="id13">
                        <img src="images/14.jpg" id="id14">
                        <img src="images/15.jpg" id="id15">
                        <img src="images/16.jpg" id="id16">
                        <img src="images/17.jpg" id="id17">
                        <img src="images/18.jpg" id="id18">
                        <img src="images/19.jpg" id="id19">
                        <img src="images/20.jpg" id="id20">
                        <img src="images/21.jpg" id="id21">
                        <img src="images/22.jpg" id="id22">
                        <img src="images/23.jpg" id="id23">
                        <img src="images/24.jpg" id="id24">
                        <img src="images/25.jpg" id="id25">
                        <img src="images/26.jpg" id="id26">
                        <img src="images/27.jpg" id="id27">
                        <img src="images/28.jpg" id="id28">
                        <img src="images/29.jpg" id="id29">
                        <img src="images/30.jpg" id="id30">
                        <img src="images/31.jpg" id="id31">
                        <img src="images/32.jpg" id="id32">
                        <img src="images/33.jpg" id="id33">
                        <img src="images/34.jpg" id="id34">
                        <img src="images/35.jpg" id="id35">
                        <img src="images/36.jpg" id="id36">
                        <img src="images/37.jpg" id="id37">
                        <img src="images/38.jpg" id="id38">
                    </div> 
                    <div class="buttonImgs">
                        <button onclick="dot(1)"></button>
                        <button onclick="dot(2)"></button>
                        <button onclick="dot(3)"></button>
                        <button onclick="dot(4)"></button>
                        <button onclick="dot(5)"></button>
                        <button onclick="dot(6)"></button>
                        <button onclick="dot(7)"></button>
                        <button onclick="dot(8)"></button>
                        <button onclick="dot(9)"></button>
                        <button onclick="dot(10)"></button>
                        <button onclick="dot(11)"></button>
                        <button onclick="dot(12)"></button>
                        <button onclick="dot(13)"></button>
                        <button onclick="dot(14)"></button>
                        <button onclick="dot(15)"></button>
                        <button onclick="dot(16)"></button>
                        <button onclick="dot(17)"></button>
                        <button onclick="dot(18)"></button>
                        <button onclick="dot(19)"></button>
                        <button onclick="dot(20)"></button>
                        <button onclick="dot(21)"></button>
                        <button onclick="dot(22)"></button>
                        <button onclick="dot(23)"></button>
                        <button onclick="dot(24)"></button>
                        <button onclick="dot(25)"></button>
                        <button onclick="dot(26)"></button>
                        <button onclick="dot(27)"></button>
                        <button onclick="dot(28)"></button>
                        <button onclick="dot(29)"></button>
                        <button onclick="dot(30)"></button>
                        <button onclick="dot(31)"></button>
                        <button onclick="dot(32)"></button>
                        <button onclick="dot(33)"></button>
                        <button onclick="dot(34)"></button>
                        <button onclick="dot(35)"></button>
                        <button onclick="dot(36)"></button>
                        <button onclick="dot(37)"></button>
                        <button onclick="dot(38)"></button>
                    </div>
                </div>
                <img id="nextImg" onclick="nextImage()" src="assets/icons/next.png"> 
            </div>
        </section>
        <section id="img_c" class="img">
            <span id="anchorVideos"></span>
        </section> 
        <!-- Aba dos videos -->
        <section id="section_d">
            <h3 style="text-align: center">Videos</h3>
            <div class="player">        
                <div class="video">
                    <img id="prevVideo" src="assets/icons/previous.png">
                    <iframe id="video" width="100%" height="460px" src="https://www.youtube.com/embed/Or8YTtR-pBQ" title="Música" frameborder="0" allowfullscreen></iframe>
                    <img id="nextVideo" src="assets/icons/next.png"> 
                </div> 
            </div>
            <a href="pages/videos.php" alt="Ver videos">Ver videos</a>
        </section>
        <!-- Aba de Mensagens / Contato -->
        <section id="section_e">
            <div class="msg">
                <form action="index.php#section_e" method="POST" class="form">
                    <h3 style="text-align: center;">Mande sua mensagem</h3>
                    <div class="name">
                        <p>Nome:</p>
                        <input type="text" id="name"  name="nome" placeholder="Digite seu nome!" class="inputControl" required>
                    </div>
                    <div class="comment">
                        <p>Mensagem:</p>
                        <textarea id="comment" class="inputArea" name="mensagem" placeholder="Deixe seu comentário aqui!" maxlength="150" required></textarea>
                    </div></br>
                    <input type="submit" name="submit" class="inputButton"></button></br>
                    <a href="pages/messages.php" alt="Mensagens" >Ver todas as mensagens</a>
                </form>
            </div>
            <div class="contact">
                <h3 style="text-align: center">Contato</h3>
                <div class="links">
                    <a href="https://www.instagram.com/joaoricardosilveira76/" alt="Instagram" title="Ir para o Instagram" target="_blank"><img src="assets/icons/instagram.png" class="socialMedia">Instagram</a>
                    <a href="https://www.facebook.com/profile.php?id=100014565941745" alt="Facebook" title="Ir para o Facebook" target="_blank"><img src="assets/icons/facebook.png" class="socialMedia">Facebook</a>
                    <a href="https://www.youtube.com/channel/UC0SFpWux1oqoTlrzYgmnZSg" alt="YouTube" title="Ir para o YouTube" target="_blank"><img src="assets/icons/youtube.png" class="socialMedia">YouTube</a>
                </div>
            </div>  
        </section>
        <div class="desenvolvedor">
            <a href="https://www.linkedin.com/in/flávio-santos-196a5a1a1/" target="_blank" id="created">Desenvolvido por: Flávio Santos</a>  
        </div>
    </main>
</body>
<script src="js/script.js" defer></script>
<?php 

    if(isset($_POST['submit'])) {

        include_once('pages/config.php');

        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];
        date_default_timezone_set('America/Sao_Paulo');
        $data_dia = date('d/m/Y');

        $result = mysqli_query($conexao, "INSERT INTO mensagens(nome, mensagem, data_dia) VALUES ('$nome', '$mensagem', STR_TO_DATE('$data_dia', '%d/%m/%Y'))");
    }

?>
</html>
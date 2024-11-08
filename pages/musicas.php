<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/others.css">
    <link rel="icon" href="../assets/icons/icone_branco.png">
    <title>Ricardo Santos - Músicas</title>
</head>
<body>
    <header id="head">
        <div class="shortcuts">
            <a style="width: 5%; height: 25px;"><img id="logo" src="../assets/icons/icone_branco.png"></a>
            <a href="../index.php#head" class="btn">Home</a>
            <a href="../index.php#anchorAbout" class="btn">Memórias</a>
            <a href="../index.php#anchorMusic" class="btn">Músicas</a>
            <a href="../index.php#anchorPhotos" class="btn">Fotos</a>
            <a href="../index.php#anchorVideos" class="btn">Vídeos</a>
            <a href="../index.php#section_e" class="btn">Contato</a>
        </div>
    </header>
        <h2>Músicas</h2>
        <div id="gridGeral" class='gridA'>
            <div class='grid'>
                <img class="album" onclick="openList('album1')" id="album1" src="../assets/cds/Capa_Um_sonho_pra_Viver.jpg" onmouseover="this.src='../assets/cds/Contra_Um_sonho_pra_Viver.jpg'" onmouseout="this.src='../assets/cds/Capa_Um_sonho_pra_Viver.jpg'">
                <p>Grupo Querência: Um Sonho pra Viver</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album2')" id="album2" src="../assets/cds/Capa_Querencia_Brasil.jpg" onmouseover="this.src='../assets/cds/Contra_Querencia_Brasil.jpg'" onmouseout="this.src='../assets/cds/Capa_Querencia_Brasil.jpg'">
                <p>Grupo Querência: Querência Brasil</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album3')" id="album3" src="../assets/cds/Capa_Novo_Amanha.jpg" onmouseover="this.src='../assets/cds/Contra_Novo_Amanha.jpg'" onmouseout="this.src='../assets/cds/Capa_Novo_Amanha.jpg'">
                <p>Grupo Querência: Novo Amanhã</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album4')" id="album4" src="../assets/cds/Capa_20_Anos.jpg" onmouseover="this.src='../assets/cds/Contra_20_Anos.jpg'" onmouseout="this.src='../assets/cds/Capa_20_Anos.jpg'">
                <p>Grupo Querência: 20 anos de Festa Gaúcha</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album5')" id="album5" src="../assets/cds/Capa_Querencia_Chegou.jpg" onmouseover="this.src='../assets/cds/Contra_Querencia_Chegou.jpg'" onmouseout="this.src='../assets/cds/Capa_Querencia_Chegou.jpg'">
                <p>Grupo Querência: O Querência Chegou</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album6')" id="album6" src="../assets/cds/Capa_Ao_Vivo.jpg" onmouseover="this.src='../assets/cds/Contra_Ao_Vivo.jpg'" onmouseout="this.src='../assets/cds/Capa_Ao_Vivo.jpg'">
                <p>Grupo Querência: Ao Vivo</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album7')" id="album7" src="../assets/cds/Capa-C-P-B.jpg" onmouseover="this.src='../assets/cds/Contra-C-P-B.jpg'" onmouseout="this.src='../assets/cds/Capa-C-P-B.jpg'">
                <p>Carlinhos do Pala Branco: Procurando Encantos</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album8')" id="album8" src="../assets/cds/Capa-Ensaio.jpg">
                <p>Grupo Querência: Ensaio</p>
            </div>
            <div class='grid'>
                <img class="album" onclick="openList('album9')" id="album9" src="../assets/cds/Capa_Eri.jpg" onmouseover="this.src='../assets/cds/Contra_Eri.jpg'" onmouseout="this.src='../assets/cds/Capa_Eri.jpg'">
                <p>Erivelto Pires - Marca de Raíz</p>
            </div>
        </div>

        <div class="mainOverlay"  id="over">
        <img onclick="overlaySwitch()" id="exit" src="../assets/icons/exit.png" style="position: absolute; top: 3%; left: 3%; width:30px; height:30px; z-index: 999;">
        <img id="capa" src="">  
            <div class="overlay">
                <div class="player">
                    <img id="prev" src="../assets/icons/previous.png">
                    <div class="infoGeral"> 
                        <div class="infoMusic">
                            <div class="info">
                                <p>Tocando agora:</p>
                                <p id="title"></p>
                                <p id="album"></p>
                            </div>
                            <div class="music">
                                <audio id="msc" controls controlsList="nodownload noplaybackrate">
                                    <source src="" type="audio/mp3">
                                </audio>
                            </div>  
                        </div>
                    </div>
                    <img id="next" src="../assets/icons/next.png"> 
                </div> 
                <div class="list">
                    <p class="linkMusic" id="music1" onclick="goTo(1)"></p>
                    <p class="linkMusic" id="music2" onclick="goTo(2)"></p>
                    <p class="linkMusic" id="music3" onclick="goTo(3)"></p>
                    <p class="linkMusic" id="music4" onclick="goTo(4)"></p>
                    <p class="linkMusic" id="music5" onclick="goTo(5)"></p>
                    <p class="linkMusic" id="music6" onclick="goTo(6)"></p>
                    <p class="linkMusic" id="music7" onclick="goTo(7)"></p>
                    <p class="linkMusic" id="music8" onclick="goTo(8)"></p>
                    <p class="linkMusic" id="music9" onclick="goTo(9)"></p>
                    <p class="linkMusic" id="music10" onclick="goTo(10)"></p>
                    <p class="linkMusic" id="music11" onclick="goTo(11)"></p>
                    <p class="linkMusic" id="music12" onclick="goTo(12)"></p>
                    <p class="linkMusic" id="music13" onclick="goTo(13)"></p>
                    <p class="linkMusic" id="music14" onclick="goTo(14)"></p>
                    <p class="linkMusic" id="music15" onclick="goTo(15)"></p>
                </div>  
            </div>
        </div>
</body>
<script src="../js/scriptMusicas.js"></script>
<?php

    include_once('config.php');

?>
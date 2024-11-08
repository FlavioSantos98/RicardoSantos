// Centralizar as ancoras no meio [flexbox e align itens]

const musics = ["musics/GRUPO_QUERÊNCIA_20_ANOS_DE_FESTA_GAUCHA_2003/13_TE_AMO_DEMAIS.mp3", "musics/GRUPO_QUERÊNCIA_QUERÊNCIA_BRASIL_1999/1_GANA_DE_FARRA.mp3", 
"musics/ERIVELTO_PIRES_MARCA_DE_RAIZ_2012/1_PRA_ESCUTAR_MINHAS_VANERA_LÁ_FORA.mp3", "musics/ERIVELTO_PIRES_MARCA_DE_RAIZ_2012/2_AO_RIO_GRANDE_VOU_ABRIR_MEU_CORAÇÃO.mp3", 
"musics/GRUPO_QUERÊNCIA_QUERÊNCIA_BRASIL_1999/3_A_VANERA_QUE_É_NOSSA.mp3", "musics/GRUPO_QUERÊNCIA_O_QUERÊNCIA_CHEGOU_2005/4_DE_BOAS_VINDAS.mp3", 
"musics/GRUPO_QUERÊNCIA_UM_SONHO_PRA_VIVER_1997/4_UM_SONHO_PRA_VIVER.mp3", "musics/GRUPO_QUERÊNCIA_20_ANOS_DE_FESTA_GAUCHA_2003/5_DE_BOMBACHA_E_DE_À_CAVALO.mp3", 
"musics/GRUPO_QUERÊNCIA_O_QUERÊNCIA_CHEGOU_2005/5_SOLIDÃO.mp3", "musics/GRUPO_QUERÊNCIA_UM_SONHO_PRA_VIVER_1997/7_AO_SOM_DE_UM_CHAMAMÉ.mp3", 
"musics/GRUPO_QUERÊNCIA_QUERÊNCIA_BRASIL_1999/7_VOLTA.mp3", "musics/CARLINHOS_DO_PALA_BRANCO_PROCURANDO_ENCANTOS_1999/8_RELÍQUIAS_DO_HOMEM_DO_CAMPO.mp3",
"musics/GRUPO_QUERÊNCIA_UM_SONHO_PRA_VIVER_1997/9_AMADA.mp3", "musics/GRUPO_QUERÊNCIA_20_ANOS_DE_FESTA_GAUCHA_2003/9_MÃE_CAMPEIRA.mp3", 
"musics/GRUPO_QUERÊNCIA_UM_SONHO_PRA_VIVER_1997/11_DE_FOGÕES_E_INVERNEIRAS.mp3", "musics/GRUPO_QUERÊNCIA_NOVO_AMANHÃ_2001/11_SINA_ESTRADEIRA.mp3", 
"musics/GRUPO_QUERÊNCIA_UM_SONHO_PRA_VIVER_1997/12_MERCEDITAS.mp3" ]
const cds = ["assets/cds/Capa_20_Anos.jpg", "assets/cds/Capa_Querencia_Brasil.jpg", 
"assets/cds/Capa_Eri.jpg", "assets/cds/Capa_Eri.jpg", 
"assets/cds/Capa_Querencia_Brasil.jpg", "assets/cds/Capa_Querencia_Chegou.jpg",
"assets/cds/Capa_Um_sonho_pra_Viver.jpg", "assets/cds/Capa_20_Anos.jpg", 
"assets/cds/Capa_Querencia_Chegou.jpg", "assets/cds/Capa_Um_sonho_pra_Viver.jpg", 
"assets/cds/Capa_Querencia_Brasil.jpg", "assets/cds/Capa-C-P-B.jpg",
"assets/cds/Capa_Um_sonho_pra_Viver.jpg", "assets/cds/Capa_20_Anos.jpg", 
"assets/cds/Capa_Um_sonho_pra_Viver.jpg", "assets/cds/Capa_Novo_Amanha.jpg", 
"assets/cds/Capa_Um_sonho_pra_Viver.jpg"]
const songName = ["Te Amo Demais", "Gana De Fara", 
"Pra Escutar Minhas Vanera Lá Fora", "Ao Rio Grande Vou Abrir Meu Coração", 
"A Vanera Que É Nossa", "De Boas Vindas", 
"Um Sonho Pra Viver", "De Bombacha e de à Cavalo", 
"Solidão", "Ao Som de um Chamamé", 
"Volta", "Relíquias do Homem do Campo", 
"Amada", "Mãe Campeira", 
"De Fogões e Inverneiras", "Sina Estradeira", 
"Merceditas"]
const albumName = ["Grupo Querência: 20 Anos de Festa Gaúcha - 2003", "Grupo Querência: Querência Brasil - 1999", 
"Erivelto Pires - Marca de Raíz - 2012", "Erivelto Pires - Marca de Raíz - 2012", 
"Grupo Querência: Querência Brasil - 1999", "Grupo Querência: O Querência Chegou - 2005",
"Grupo Querência: Um Sonho Pra Viver - 1997", "Grupo Querência: 20 Anos de Festa Gaúcha - 2003",
"Grupo Querência: O Querência Chegou - 2005", "Grupo Querência: Um Sonho Pra Viver - 1997",
"Grupo Querência: Querência Brasil - 1999", "Carlinhos do Pala Branco: Procurando Encantos - 1999", 
"Grupo Querência: Um Sonho Pra Viver - 1997", "Grupo Querência: 20 Anos de Festa Gaúcha - 2003", 
"Grupo Querência: Um Sonho Pra Viver - 1997", "Grupo Querência: Novo Amanhã - 2001", 
"Grupo Querência: Um Sonho Pra Viver - 1997"]
const videos = ["https://www.youtube.com/embed/Or8YTtR-pBQ", "https://www.youtube.com/embed/AxWy34ZRdZY", "https://www.youtube.com/embed/koy1zlQqZz0",
"https://www.youtube.com/embed/BpC2Xh-afxA", "https://www.youtube.com/embed/tGnYdxhHBXg", "https://www.youtube.com/embed/UW60fbjgl_s"]
const dots = document.querySelectorAll(".buttonImgs button");
const images = document.querySelectorAll(".image img");

let pointer = 0;
let pointerVideo = 0;
let pointerImage = 0;
let maxImage = 38;

var image = document.getElementById('cds');
var song = document.getElementById('msc');
var title = document.getElementById('title');
var album = document.getElementById('album');
var vid = document.getElementById('video');
var intro = document.getElementById('introVideo');
var html = document.querySelector('html');
    
image.src = cds[pointer];
song.src = musics[pointer];
title.textContent = "Título: " + songName[pointer];
album.textContent = "Álbum: " + albumName[pointer];
song.volume = 0.5;

function nextImage() {
    document.getElementById("id" + (pointerImage + 1)).classList.remove("ativo");
    pointerImage = (maxImage + pointerImage + 1) % maxImage;
    document.getElementById("id" + (pointerImage + 1)).classList.add("ativo");
    indicator(pointerImage + 1);
}

function prevImage() {
    document.getElementById("id" + (pointerImage + 1)).classList.remove("ativo");
    pointerImage = (maxImage + pointerImage - 1) % maxImage;
    document.getElementById("id" + (pointerImage + 1)).classList.add("ativo");
    indicator(pointerImage + 1);
}

function indicator(num) {
    dots.forEach(function(dot) {
        dot.style.backgroundColor = "white";
    });
    document.querySelector(".buttonImgs button:nth-child(" + num + ")").style.backgroundColor = "#231F20";
}

function dot(index) {
    images.forEach(function(image){
        image.classList.remove("ativo");
    });
    document.getElementById("id" + index).classList.add("ativo");
    pointerImage = index - 1;
    indicator(index);
}

function next() {
    if (musics[pointer + 1] !== null && musics[pointer + 1] !== undefined) {
        pointer++;
        image.src = cds[pointer];
        song.src = musics[pointer];
        title.textContent = "Título: " + songName[pointer];
        album.textContent = "Álbum: " + albumName[pointer];
        song.load();
        song.play();
    }
}
    
function prev() {
    if (musics[pointer - 1] !== null && musics[pointer - 1] !== undefined) {
        pointer--;
        image.src = cds[pointer];
        song.src = musics[pointer];
        title.textContent = "Título: " + songName[pointer];
        album.textContent = "Álbum: " + albumName[pointer];
        song.load();
        song.play();
    }
}

document.getElementById('nextVideo').addEventListener('click', function() {
    if (videos[pointerVideo + 1] !== null && videos[pointerVideo + 1] !== undefined) {
        pointerVideo++;
        vid.src = videos[pointerVideo] + '?autoplay=1';
    }
})
    
document.getElementById('prevVideo').addEventListener('click', function() {
    if (videos[pointerVideo - 1] !== null && videos[pointerVideo - 1] !== undefined) {
        pointerVideo--;
        vid.src = videos[pointerVideo] + '?autoplay=1';
    }
})

song.addEventListener('ended', function() {
    next();
})

function timer() {
    setInterval(function() {
        nextImage();
    }, 5000);
}

function playVideo() {

    html.classList.add('-is-locked');

    if(window.innerWidth > 770) {
        intro.src = "assets/intro.webm";
        intro.load();
        intro.play();
    } else { 
        intro.src = "assets/introCelular.webm";
        intro.load();
        intro.play();
    }
    
    intro.addEventListener('ended', function() {
        html.classList.remove('-is-locked');
        intro.style.opacity = '0';
        intro.style.zIndex = '-100';
    });
}

function start() {
    timer();
    history.pushState("", document.title, window.location.pathname);
}

window.onloadstart = start();

//Aniversário

document.getElementById('exit').addEventListener('click', function() {
    document.getElementById('alt').style.display = "none";
})
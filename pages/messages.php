<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/others.css">
    <link rel="icon" href="../assets/icons/icone_branco.png">
    <title>Ricardo Santos - Mensagens</title>
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
    <h2>Mensagens</h2>
</body>
<?php

    include_once('config.php');

    $result = mysqli_query($conexao, "SELECT COUNT(id) AS count FROM mensagens;");
    $row = mysqli_fetch_assoc($result);
    $index = $row['count'] + 1;

    echo "<div class='gridG'>";

    for ($i=1; $i < $index; $i++) { 
        $nome = mysqli_query($conexao, "SELECT nome FROM mensagens WHERE id=". $i);
        $mensagem = mysqli_query($conexao, "SELECT mensagem FROM mensagens WHERE id=". $i);
        $data_dia = mysqli_query($conexao, "SELECT DATE_FORMAT(data_dia, '%d/%m/%Y') as data_d FROM mensagens WHERE id=". $i);

        $row_nome = mysqli_fetch_assoc($nome);
        $row_mensagem = mysqli_fetch_assoc($mensagem);       
        $row_data_dia = mysqli_fetch_assoc($data_dia);

        if(is_null($row_nome)&&is_null($row_mensagem)&&is_null($row_data_dia)) {

        } else {
            $nomeR = $row_nome['nome'];
            $mensagemR = $row_mensagem['mensagem'];
            $data_diaR = $row_data_dia['data_d'];

            echo "<div class='grid'>";
            echo "<p><b>Nome: </b>" . $nomeR . "</p>";
            echo "<p><b>Mensagem: </b>". $mensagemR ."</p>";
            echo "<p style='float:right;'><sub>" . $data_diaR . "</sub></p>";
            echo "</div>";
        }
    }

    echo "</div>";
?>
</html>
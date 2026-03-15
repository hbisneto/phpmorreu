<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PHP MORREU .com</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <style>
        body { background: #000 url('bg_code.gif') repeat; color: lime; font-family: 'Courier New', monospace; }
        marquee { font-size: 24px; }
    </style>
</head>
<body>
    <marquee>PHP NUNCA MORRE, SEU ÓDIO SÓ ME DEIXA MAIS FORTE</marquee>
    <h1 align="center">PHP MORREU?</h1>
    <?php
    echo "<p>Não.</p>";
    echo "<p>Data atual: " . date('d/m/Y H:i:s') . " e eu ainda tô aqui rodando...</p>";
    ?>
    <center>
        <img src="https://i.imgur.com/alguma-imagem-meme-php.gif" alt="PHP vivo">
    </center>
    <?php
    // Contador raiz 2005
    $contador = @file_get_contents('contador.txt');
    $contador = $contador ? $contador + 1 : 1;
    file_put_contents('contador.txt', $contador);
    echo "<p>Visitantes que já viram a verdade: $contador</p>";
    ?>
    <marquee direction="right">Ainda em 2026... e em 2030... e sempre</marquee>
</body>
</html>

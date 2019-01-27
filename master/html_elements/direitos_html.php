<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" >
<meta charset="utf-8">
<title>HTML</title>
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Direitos</title>
</head>
<body>
    <header>
        <div id="topHeader">
            <h1>Direitos</h1>
            <a id="navButton" href="#">&#9776;</a>
        </div>

        <div id="navWrapper">

            <div id="nav">
                <a id="closeMenu" class="menuBtn" href="#root">&times;</a>
                <a class="menuBtn" href="index.html#root">Raíz</a>
                <a class="menuBtn" href="index.html#metadata">Metadados</a>
                <a class="menuBtn" href="index.html#section-root">Raíz de Secção</a>
                <a class="menuBtn" href="index.html#content">Secção de Conteúdo</a>
                <a class="menuBtn" href="index.html#text">Conteúdo de Texto</a>
                <a class="menuBtn" href="index.html#semantics">Semântica</a>
                <a class="menuBtn" href="index.html#multimedia">Multimédia</a>
                <a class="menuBtn" href="index.html#embeded">Conteúdo incorporado</a>
                <a class="menuBtn" href="index.html#script">Conteúdo de script</a>
                <a class="menuBtn" href="index.html#DemarcatingEdits">Edição de demarcados</a>
                <a class="menuBtn" href="index.html#tableContents">Conteúdo de tabelas</a>
                <a class="menuBtn" href="index.html#forms">Formulários</a>
                <a class="menuBtn" href="index.html#interactiveEl">Elementos Interactivos</a>
                <a class="menuBtn" href="index.html#webComponents">Componentes da web</a>
                <a class="menuBtn" href="index.html#obsolete">Elementos obsoletos</a>

            </div>

        </div>

    </header>

    <div id="wrapper">
        <h1>Direitos de Autor</h1>
        <br>
        <h3>Direitos intelectuais</h3>
        <p>Fundação <a href="https://www.mozilla.org/en-US/" target="_blank">Mozzila</a></p>
        <hr>
        <h3>Direitos de imagem</h3>
        <p></p>
        <hr>
        <h3>Direitos de tradução</h3>
        <p><a href="http://valdorio.net">Valdorio</a></p>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        //$(nomeDoElemento).nomeDaAcção
        $('#nav').slideUp(1);

        $('#navButton').on('click', function(){
            $("#nav").delay(10).animate({width: 'toggle'}, 500);
        });

        $('.menuBtn').on('click', function(){
            $("#nav").delay(10).animate({width: 'toggle'}, 500);

        });

        /* obter intervalo entre cada item */

        $('p').append( "<br>").append( "<hr>").append("<br>");

    });
</script>
</body>
</html>

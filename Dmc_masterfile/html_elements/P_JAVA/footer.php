<footer>
  <a rel="license" href="direitos.html" target="_blank">
    <img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />
    Este trabalho está licenciado com uma Licença
    <p>2018 &copy; Val do Rio</p>
</footer>

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

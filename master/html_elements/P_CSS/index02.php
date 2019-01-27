<?php
  include_once 'header.php';
  ?>

  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <meta charset="utf-8">
  <title>CSS</title>
  <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
  <link href="../css/index02.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <div id="wrapper">
    	<div id="divLogo"><img id="logo" src="CSS_logo.png" alt=""></div>
    	<div id="goUp">
    		<a href="#root">
    			<i class="fas fa-arrow-up"></i>
    		</a>
    	</div>
    <section id="root">
    <div id="c_1" class="container">
    		<h2>Meaning</h2>
    	<ul>
    		<li class="li"><a href="#">Css</a></li>
    			<p>
            CSS is a language that describes the style of an HTML document.
            CSS describes how HTML elements should be displayed.
    	</ul>
    </div>
    </section>
    	<hr>
    <section id="metadata">
    <div id="c_2" class="container">
    		<h2>Internal CSS</h2>
    	<ul>
    		<li class="teste li"><a href="#">head</a></li>
    			<p>
    				An internal CSS is used to define a style for a single HTML page.

    		An internal CSS is defined in the "head" section of an HTML page, within a "style element":
    			</p>
    	</ul>
    </div>
    </section>
    	<hr>
    <section id="section-root">
    <div id="c_3" class="container">
    		<h2>External CSS</h2>
    	<ul>
    		<li class="li"><a href="#">External sheit</a></li>
    			<p>
            External style sheets can be referenced with a full URL or with a path relative to the current web page.
This example uses a full URL to link to a style sheet:

<br>"link rel="styhttps://www.w3schools.com/html/styles.css">
    			</p>
    	</ul>
    </div>
    </section>

  </div><!-- /wrapper -->

<?php
  include_once 'footer.php';
  ?>

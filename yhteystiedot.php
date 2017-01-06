<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Annan portfolio</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
     
       <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
              
            <h1><a href="index.html">Etusivu</a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#">valikko</a></li>
        </ul>

        <section class="top-bar-section">
         
          <ul class="right">
            <li><a href="mina.html">Minä</a></li>
            <li><a href="tyot.html">Työnäytteet</a></li>
            <li><a href="yhteystiedot.php">Yhteystiedot</a></li>
          </ul>
        </section>
      </nav>

  
 
 <!-- YLÄLAATIKKO-->  
  <section class="hero">
      <div class="row">
        <div class="large-12 columns">
          <div class="main-wrapper">
			 <img src="kuvat/kokologo.png"/>
            <hr>
          </div>
        </div>
      </div>
    </section>

   <div class="row">
    <div class="large-6 columns">

   
    <form name="emaillomake" action="./yhteystiedot.php" method="post">
		<fieldset>
			<legend> <h3 style="text-align:center;">Ota minuun yhteyttä!</h3></legend>

			<label>Nimi:
				<input type="text" placeholder="Kirjoita tähän nimesi" name="nimi">
			</label>
			<label>Puhelinnumero:
				<input type="text" placeholder="Kirjoita tähän puhelinnumerosi, 040 123 4567" name="puhelin">
			</label>
			<label>Sähköposti:
				<input type="text" placeholder="Kirjoita tähän sähköpostiosoitteesi, a@b.fi" name="email">
			</label>
			<label>Viestisi:
				<textarea name="viesti" rows="6" cols="30"></textarea>
			</label>
			<input name="Submit" type="submit" value="Lähetä lomake minulle">
		</fieldset>
	</form>
		<?php include_once("./mail.php"); ?>
    </div>
	
	<div class="large-4 columns">
      <div class="panel">
        <h3>Yhteystietoni</h3>
        <p>Lomakkeen kautta otat minuun helposti yhteyttä. Muistathan täyttää kaikki kohdat, jotta lomake lähtee minulle!
		Voit myös soittaa tai lähettää minulle sähköpostia.<br><br>
		Anna Hurtta
		<br>puh. 044 010 1992
		<br>sähköposti: annahurtta@gmail.com</p>
      </div>
    </div>
	
	
    </div>

 


 

 
   
  
  <footer class="row">
    <div class="large-12 columns">
      <hr/>
      <div class="row">
        <div class="large-6 columns">
          <p>Anna Hurtta</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="index.html">Etusivu</a></li>
            <li><a href="mina.html">Minä</a></li>
            <li><a href="tyot.html">Työnäytteet</a></li>
            <li><a href="yhteystiedot.php">Yhteystiedot</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

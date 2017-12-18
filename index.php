<!doctype html>
<!--**************************************************************************************-->
<!--**************************************************************************************-->
<html>
  <head>
<!--**************************************************************************************-->
    <link rel ="stylesheet" type ="text/css" href="stylesheet.css">
<!--**************************************************************************************-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/contact-buttons.css">-->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
<!--************************************Titel pagina**************************************-->
    <title>Portfolio Richard van der Veen</title>

  </head>
<!--**************************************************************************************-->
<body>
<!--************************** Horizontale navigatie balk ********************************-->
    <div class=header>
      <ul>
        <li><a href ="#ga01">Home</a></li>
        <li><a href ="#ga02">Over mij</a></li>
        <li><a href ="#ga03">Portfolio</a></li>
        <li><a href ="#ga04">C.V.</a></li>
        <li><a href ="#ga05">Hobbies</a></li>
        <li style="float:right"><a class="active" href ="#ga06">Contact</a></li>
      </ul>
    </div>
<!--**************************************************************************************-->

<!--**************************************************************************************-->
  <div id="wrapper">
<!-------------------------------------------------------------------------------------------------------------->
      <div id="ga01" class="panels">
        <p id="cornerbox">Welkom op de pagina van Richard van der Veen</p>
      </div>
      <div id="dia">
      </div>
<!-------------------------------------------------------------------------------------------------------------->
      <div id="ga02" class="panels">
        <p id="cornerbox">Mijn naam is Richard van der Veen. Ik ben 49 jaar en geboren en getogen in Emmen, Nederland.</br>
                          Van jongs af aan ben ik ben met computers bezig. </br>Wat begonnen is als hobbie heeft uiteindelijk
                          geresulteerd in werk in de ict sector. </br>Op deze website staat meer informatie
                          over mijn werkverleden, hobbies en mijn doelstellingen.</p>
      </div>
      <div id="dia">
      </div>
<!-------------------------------------------------------------------------------------------------------------->
      <div id="ga03" class="panels">
        <p id="cornerbox">Op dit moment is de portfolio nog leeg.</p>
      </div>
      <div id="dia">
      </div>
<!-------------------------------------------------------------------------------------------------------------->
      <div id="ga04" class="panels">
        <p id="cornerbox">C.V. Richard van der Veen</br></br></br> U kunt hier mijn C.V. bekijken als PDF.</p>
      </div>
      <div id="dia">
      </div>
<!-------------------------------------------------------------------------------------------------------------->
      <div id="ga05" class="panels">
        <p id="cornerbox">Hobbies:</br>Koken</br>Muziek</br>Uitgaan</br>Computers</p>
      </div>
      <div id="dia">
      </div>
<!-------------------------------------------------------------------------------------------------------------->
      <div id="ga06" class="panels">
        <div id="cornerbox">
          <!--*************************** roept formulier in box aan *******************************-->
          <form  method="post">Naam:<br />
            <input type="text" autocomplete="off" name="naam" maxlength="45" /><br />E-mail:<br />
            <input type="text" autocomplete = "off" name="email" maxlength="45" /><br />Bericht:<br />
            <textarea cols="45" rows="5" name="bericht"></textarea><br />
            <input type="submit" value="Verzenden" />
          </form>
          <!-- Roept het php script aan om de data naar de database te sturen -->
          <?php include 'process.php';?>
        </div>
      </div>
      <!--****************** roept de scripts aan voor de social buttons ******************************--->
      <script src="js/jquery.contact-buttons.js"></script>
      <script src="js/demo.js"></script>
  </div>
<!-------------------------------------------------------------------------------------------------------------->
</body>
<!--*************************Roept javascript scroll.js aan ******************************-->

  <script type="text/javascript" src="./scroll.js"></script>
<!--**************************************************************************************-->
<!--**************************************************************************************-->
</html>

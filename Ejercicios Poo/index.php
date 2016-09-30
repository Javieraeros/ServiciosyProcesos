<html>
  <body>
    <p>
      <!--<?php
      require_once "Texto.php";
      $Texto=new Texto("Esto es un texto de prueba");
      echo $Texto->cuentaPalabras("es");?>-->
      <?php
      require_once "Texto.php";
      $Texto=new Texto("Esto es un texto de prueba");
      $array=$Texto->indicaPosicion("es");
      var_dump($array);?>
      </p>
  </body>
</html>
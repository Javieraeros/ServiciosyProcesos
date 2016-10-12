<html>
  <body>
    <p>
      <!--<?php
      require_once "Texto.php";
      $Texto=new Texto("Esto es un texto de prueba");
      echo $Texto->cuentaPalabras("es");?>-->
      <!--<?php
      require_once "Texto.php";
      $Texto=new Texto("Esto es un texto de prueba es es");
      $array=$Texto->indicaPosicion("es");
      var_dump($array);?>-->
      
      <!--<?php
      require_once "Texto.php";
      
      $Texto=new Texto("texto de prueba , prueba de texto o no texto de prueba");
      echo $Texto->getTexto()."<br/>";
      $Texto->sustituyePalabras("texto","prueba");
      echo $Texto->getTexto();
      ?>-->
      <?php
      require_once "Texto.php";
      $Texto=new Texto("Voy a cambiar esta palabra: pene , por esta otra: vagina ");
      echo $Texto->getTexto()."<br/>";
      $Texto->sustituyePosiciones(5,10);
      echo $Texto->getTexto()."<br/>";
      ?>
      </p>
  </body>
</html>
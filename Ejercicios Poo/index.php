<html>
  <body>
    <p>
      
    <?php
      require_once "Texto.php";
      $Texto=new Texto("Esto es un texto de prueba");
      echo $Texto->cuentaPalabras("es");
      echo $Texto->getTexto();
    ?>
      </p>
  </body>
</html>
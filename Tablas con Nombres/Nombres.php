<html>
  <body>
    <form method="post" action="tabla.php">
      <?php 
        for($i=1;$i<=$_POST["numeros"];$i++){
          echo '<label>Nombre '.$i.'</label><br/>
          <input type="text" name="nombres[]"/><br/>';
        }
      ?>
      <input type="submit" name="Enviar" value="Siguiente"/>
    </form>
  </body>
</html>
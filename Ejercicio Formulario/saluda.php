<html>
  <body>
    <style>
      body{
        <?php
          if($_POST["sexo"]=="Hombre"){
            echo"background-color:blue;";
           }else{
            echo "background-color:pink;";
          }
        ?> 
      }
      </style>
    <h1>
      Hola <?php echo "$_POST[Nombre] $_POST[Apellidos]"; ?>
    </h1>
    <br/>
    <?php
    if($_POST["edad"]<=10){
      echo '<img src="descarga.jpg" alt="peque"/>';
    }elseif($_POST["edad"]<=21){
      echo'<img src="shogi.jpg" alt="peque"/><br/>';
      echo'<img src="balones.jpg" alt="balon"/><br/>';
      echo'<img src="videojuegos.jpg" alt="juegos"/><br/>';
    }else{
      echo'<img src="libros.jpg" alt="libros"/><br/>';
    }
    
    ?>
  </body>
</html>
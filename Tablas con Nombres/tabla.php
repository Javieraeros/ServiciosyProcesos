<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tabla.css">
  </head>
  <body>
    <table>
      <tr><th>Nombre</th></tr>
      <?php
      $array=$_POST["nombres"];
      for($i=0;$i<count($array);$i++){
          echo'<tr><td>'.$array[$i].'</td></tr>';
        }
      ?>
    </table>
  </body>
</html>
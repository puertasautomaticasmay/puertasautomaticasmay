<?php
  require_once('conexion.php');
  global $uri;
  $cnx = @mysql_connect($host, $usuario, $clave) or die (mysql_error());
  @mysql_select_db($database, $cnx) or die (mysql_error());
  $limit = 0;
  $sql = "SELECT * FROM `imagenes`";
  $consult = @mysql_query($sql, $cnx) or die(mysql_error());
  //echo $sql;
  if(@mysql_num_rows($consult) >= 1)
  {
    while($row = @mysql_fetch_array($consult)){
      echo '<figure itemprop="associatedMedia" itemscope class="col-md-2 col-sm-4 col-xs-6 grid-item" style="padding:1px;">
        <a href="img/galeria/'.$row['imagen'].'" itemprop="contentUrl" data-size="'.$row['size'].'">
            <img src="img/galeria/'.$row['thumb'].'" itemprop="thumbnail" alt="'.$row['titulo'].'" />
        </a>
        <figcaption itemprop="caption description">'.utf8_encode($row['titulo']).'</figcaption>
      </figure>';
    }
  }
?>

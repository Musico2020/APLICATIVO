    <?php
    $conexion = mysqli_connect("localhost", "root", "" , "personal");

   
    $fecha=$_POST["fecha"];

    if($_FILES["archivo"]) {
        $nombre_base = basename($_FILES["archivo"]["name"]);
        $nombre_final = date("m-d-y"). "-". date("h-i-s"). "-". $nombre_base;
        $ruta = "archivo/" . $nombre_final;
        $subirarchivo= move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
       if($subirarchivo){
          $insertarSQL= "INSERT INTO chequeo( fecha, archivo) VALUES ( '$fecha', '$ruta')";
          $resultado= mysqli_query($conexion, $insertarSQL);
          if($resultado){
              echo"<script>alert('se ha enviado su imforme'); window.location=equipo.php'</script>";

          }else{
              echo"error al subir el archivo";
          }
        }
    }
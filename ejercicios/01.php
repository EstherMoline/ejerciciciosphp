<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ficha</title>
</head>
<body>
    <?php
    $nombre="Esther";
    $apellido="Moline";
    $edad="24";
    $telefono="655443289";
    $email="emoline1996@gmail.com";
    ?>
  <table>
      <tr>
          <td>Nombre</td>
          <td><?php echo $nombre ?></td>
      </tr>
      <tr>
          <td>Apellido</td>
          <td><?php echo $apellido ?></td>
      </tr>
      <tr>
          <td>Edad</td>
          <td><?php echo $edad ?></td>
      </tr>
      <tr>
          <td>Teléfono</td>
          <td><?php echo $telefono ?></td>
      </tr>
      <tr>
          <td>Email</td>
          <td><?php echo $email ?></td>
      </tr>
  </table>
  
</body>
</html>
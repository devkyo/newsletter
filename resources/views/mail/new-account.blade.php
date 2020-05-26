<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenid@ a newsletter Avitar</title>

</head>
<body style="margin:0;padding:0;">

  <table style="width:100%;max-width:600px;padding:10px;margin:0 auto;border-collapse:collapse;font-family:Arial, Helvetica, sans-serif;color:#1b3b4a;background-color:#F3F3F3;padding: 0 1em;">
    <tr>
      <td style="text-align:center">
        <img style="max-width: 150px;padding:2em;" src="http://avitar.pe/wp-content/uploads/2020/03/logotipo@2x.png" alt="">
      </td>
    </tr>
    <tr>
      <td style="text-align:center">
        <h3>Bienvenido al administrador de newsletter de Avitar</h3>
      </td>
    </tr>
    <tr>
      <td>
        <p style="padding: 0 1em">
          Hola {{ $msg['name'] }}, tus datos de acceso son:
        </p>
      </td>
    </tr>
    <tr>
      <td style="padding:0 1em 5em 1em">
        <p><strong>URL:</strong><a href=" {{ base_path()}}"> {{ base_path()}}</a></p>
        <p><strong>USUARIO:</strong> {{ $msg['email'] }}</p>
        <p><strong>CONTRASEÑA:</strong> {{ $msg['password'] }}</p>
      </td>
    </tr>
  </table>
</body>
</html>
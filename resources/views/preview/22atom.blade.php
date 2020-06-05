<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATOM</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
</head>
<body style="margin:0;padding:0;">

 
  <table style="width:100%;max-width:600px;padding:10px;margin:0 auto;border-collapse:collapse;font-family:Open Sans;color:#1b3b4a;background-color:#f0eada;">
    <tr>
      <td style="text-align:center;padding:2em 0 0 0;background:url('https://i.postimg.cc/QxgG2PnP/bg-right.jpg') no-repeat top right">
        <a href="#">
          <img width="220px" src="https://i.postimg.cc/FH95NZMK/logo.jpg" alt="ATOM Surquillo">
        </a>
        <h1 style="margin:.2em;color:#c3904e">HOLA,</h1>
        <h2 style="margin:0">{{ $message['client'] }}</h2>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:14px;line-height: 1.5;">
          Mi nombre es <strong>{{ $message['fullname'] }}</strong>, Asesor comercial de Avitar grupo inmobiliario y tengo el agrado de presentarle el proyecto <strong style="text-transform:uppercase">{{ $message['projectname'] }} {{ $message['district'] }}</strong>.
        </p>
      </td>
    </tr>
    <tr>
      <td >
        <ul style="display:flex;justify-content:space-between;padding:0;list-style: none;text-align:center;max-width:330px;margin:.2em auto;font-size:14px">
          <li style="padding:.2em 1em; border-right: 2px solid #c3904e;margin:0!important;">
            <strong>{{ $message['bedrooms'] }} <br>
            Dormitorios</strong>
          </li>
          <li  style="padding:.2em 1em;margin:0!important;">
            Desde <strong>{{ $message['from'] }}</strong><br>
            Hasta <strong>{{ $message['to'] }}</strong>
          </li>
          <li style="padding:.2em 1em;border-left: 2px solid #c3904e;margin:0!important;">
            PREVENTA <br>
            <strong>DIC 2022</strong>
          </li>
        </ul>
      </td>
    </tr>
    <tr>
      <td style="text-align:center">
        <h5 style="margin:1.4em 0 .5em 0;color:#c3904e;">ENTREGA</h5>
        <h4 style="margin:.5em 0;">{{ $message['year'] }}</h4>
      </td>
    </tr>
    <tr>
      <td style="text-align:center">
        <img style="" src="https://i.postimg.cc/L80yw3Rw/bg-proyecto.jpg
        " alt="Atom Surquillo" title="ATOM Surquillo">
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin: 0 auto;padding:.5em 0;background:url('https://i.postimg.cc/Zq5WB6db/bg-left.jpg')no-repeat bottom left">
        <h4 style="margin:0 0 .5em 0;font-size:1.2em;font-weight: normal;">{{ $message['address'] }}, <strong>{{ $message['district'] }}</strong></h4>
        <a style="display:inline-block;padding:2em 0;" target="_blank" href="https://api.whatsapp.com/send?phone={{ $message['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20ATOM"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/yNpkFWmF/whatsapp.jpg" alt=""></a>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:14px;line-height: 1.5;">
          Nuestro nuevo proyecto Atom es un edificio de 22 pisos que está pensado para darle equilibrio a tu vida. Disfruta del día a día en espacios que te harán la vida más simple. <strong> ¡Todo lo que necesitas a un paso de ti!</strong>
        </p>
      </td>
    </tr>

    <tr>
      <td style="text-align:center">
        <img width="360"src="https://i.postimg.cc/PxWWWpD1/atom-items.jpg" alt="¡Todo lo que necesitas a un paso de ti!">
      </td>
    </tr>

    <tr>
      <td style="text-align:center;margin:0 auto;padding:.5em 0; display:flex;justify-content: center;color:#1b3b4a;align-items: center;">
        <div style="width:80px;;height:80px;border-radius: 50%;overflow: hidden;"><img width="100" src="{{ public_path() }}/profiles/{{ $message['avatar'] }}" alt=""></div>
        <div style="display:flex;flex-direction: column; text-align:left;margin-left: 12px">
          <p style="margin:0;text-align: left;"><strong>{{ $message['fullname'] }}</strong> </p>
            <span style="font-size: 11px;">{{ $message['charge'] }}</span>
            <span style="font-size: 11px;">{{ $message['email_asesor'] }}</span>
        </div>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin:0 auto">
        <a style="display:inline-block;padding-bottom:2em" target="blank_" href="https://api.whatsapp.com/send?phone={{ $message['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20ATOM"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/yNpkFWmF/whatsapp.jpg" alt=""></a>
      </td>
    </tr>
    <tr>
      <td style="margin:0 auto;">
        <div style="max-width:400px;margin:0 auto;border-top: 1px solid #1b3b4a;padding: 1em 0 6em 0;">

          <table align="left">
            <tr>
              <td >
                <img src="https://i.postimg.cc/WpwcKCyy/inmobiliaria.jpg" alt="">
              </td>
            </tr>
          </table>
          <table align="right">
            <tr>
              <td style="text-align: right;font-size:12px">
                <a style="text-decoration:none;color:#1b3b4a;text-align:right"href="#">info@avitar.pe</a><br>
              </td>
            </tr>
            <tr>
              <td style="text-align: left;">
                <a style="text-decoration:none;color:#1b3b4a;text-align:left;position:relative;font-size:11px" href="/">
                  <table>
                    <tr style="transform:translateY(-8px)">
                      <td style="text-align:left;">
                        <img style="" src="https://i.postimg.cc/TY9Bs2Lf/Logo-WP.png" alt="">
                      </td>
                      <td style="text-align: left;font-size:12px">
                        <span>{{ $message['phone'] }}</span>
                      </td>
                    </tr>
                  </table>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
  </table>
</body>
</html> 
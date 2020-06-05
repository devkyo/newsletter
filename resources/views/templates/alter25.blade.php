<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $msg['subject'] }}</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
</head>
<body style="margin:0;padding:0;">

  <table style="width:100%;max-width:600px;padding:10px;margin:0 auto;border-collapse:collapse;font-family:Open Sans;color:#fff;background:#2E382C url('https://i.ibb.co/Tw5zZWg/bg-big.png') no-repeat; background-size:contain">
    <tr>
      <td style="text-align:center;padding:4em 0 0 0;">
        <a href="#" style="margin-bottom:20px">
          <img width="220px" src="https://i.postimg.cc/tJxqf2fL/alter25.png" alt="Alter 25">
        </a>
        <h1 style="margin:.5em 0 0 .2em;color:#FA6F3A">HOLA,</h1>
        <h2 style="margin:0">{{ $msg['client'] }}</h2>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:13px;line-height: 1.5;">
          Mi nombre es <strong>{{ $msg['fullname'] }}</strong>, Asesor comercial de Avitar grupo inmobiliario y tengo el agrado de presentarle el proyecto <strong>{{ $msg['projectname'] }} {{ $msg['district'] }}</strong>.
        </p>
      </td>
    </tr>
    <tr>
      <td>
        <ul style="display:flex;justify-content:space-between;padding:0;list-style: none;text-align:center;max-width:370px;margin:.2em auto;font-size:14px;justify-content: center;max-width:220px">
          <li style="padding:.2em 1em; border-right: 2px solid #FA6F3A;margin:0!important;">
            <strong>{{ $msg['bedrooms'] }} <br>
            Dormitorios</strong>
          </li>
          <li  style="padding:.2em 1em;margin:0 auto!important;">
            <span style="font-size:11.2px">Desde</span> <strong>{{ $msg['from'] }}</strong><br>
            <span style="font-size:11.2px">Hasta</span> <strong>{{ $msg['to'] }}</strong>
          </li>
          
        </ul>
      </td>
    </tr>

    <tr>
      <td style="text-align:center;">
        <h5 style="margin:1.4em 0 0 0;color:#FA6F3A;">ENTREGA</h5>
        <h4 style="margin:0 0 2em 0;">{{ $msg['year'] }}</h4>
        <img style="" src="{{ Request::root() }}/profiles/{{ $msg['image'] }}" alt="" title="Alter 25">
        <a style="text-decoration:none;color:#fff" href="https://www.google.com/maps/place/Roentgen+150,+Cercado+de+Lima+15038/@-12.1148184,-77.0088995,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c7e3a608ee6d:0x677dbc0a392c44f!8m2!3d-12.1148184!4d-77.0067108">
        <h4 style="padding:.5em 0;font-size:1em;font-weight: normal;max-width: 240px;margin:0 auto">{{ $msg['address'] }}, <strong>{{ $msg['district'] }}</strong></h4></a>
        <a style="display:inline-block;padding:1em 0;" target="_blank" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20Alter25"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/4y6dyW5p/whatsapp.png" alt=""></a>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin: 0 auto;padding:.5em 0;">
  
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:13px;line-height: 1.5;">
          Nuestro nuevo proyecto Alter 25 nace con el concepto de reinventarnos constantemente. Buscamos crear una versión para ti en un espacio adaptado a la ciudad
        <strong> ¡Todo lo que necesitas a un paso de ti!</strong>
        </p>
      </td>
    </tr>



    <tr>
      <td style="text-align:center;margin:0 auto;padding:.5em 0;color:#fff;align-items: center">
        <div style="padding: 2.5em 0">
          <img src="https://i.postimg.cc/dQkGwvKK/items.png" alt="¡Todo lo que necesitas a un paso de ti!">
        </div>
      

        <table style="margin: 0 auto;border-spacing: 0;color:#fff;background:#2E382C;">
          <tr>
            <td>
              <div style="width:70px;height:70px;border-radius: 50%;overflow: hidden;margin-right:1em">
                <img width="80" src="{{ Request::root() }}/profiles/{{ $msg['avatar'] }}" alt="">
              </div>
            </td>
            <td>
              <table style="text-align: left;line-height: 10px;">
                <tr valign="bottom">
                  <td style="margin:0;text-align: left;">
                    <strong style="font-size:1.3em">{{ $msg['fullname'] }}</strong>
                  </td>
                </tr>
                <tr>
                  <td style="font-size: 11px;"">
                  {{ $msg['charge'] }}
                  </td>
                </tr>
                <tr>
                  <td style="font-size: 11px;transform: translateY(-5px)">
                    <a style="color:#fff;text-decoration:none" href="mailto:{{ $msg['email_asesor'] }}">{{ $msg['email_asesor'] }}</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
        </table>


        
        <table style="width:100%;max-width:600px;padding:10px;margin:0 auto;border-collapse:collapse;font-family:Open Sans;color:#fff;background:#2E382C;" >
          <tr>
            <div style="text-align:center;margin:0 auto;padding:2em 0">
              <a style="display:inline-block;padding-bottom:2em" target="blank_" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20Alter25">
<img style="display:block;margin: 0 auto" src="https://i.postimg.cc/4y6dyW5p/whatsapp.png" alt=""></a>
            </div>
          </tr>
        </table>

        <table style="width:100%;max-width:420px;margin:0 auto;">
          <tr>
            <td style="padding-bottom:2em">
              <div style="border-top:1px solid #fff;padding:1.5em 0">
                <table align="left" style="text-align:left;">
                  <tr>
                    <td>
                      <a href="http://avitar.pe"><img src="https://i.postimg.cc/5jW4M8Wj/avitar.png" alt=""></a>
                    </td>
                  </tr>
                </table>
                <table align="right" style="text-align:left;line-height: 10px;">
                  <tr>
                    <td style="margin-bottom:-5px">
                      <img src="https://i.postimg.cc/50M6gTnQ/Vector-1.png" alt="">
                      <a style="color:#fff;text-decoration:none;font-size:12px"href="mailto:info@avitar.pe"><span>info@avitar.pe</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="margin-top:-5px">
                      <img style="" src="https://i.postimg.cc/y8Md62qp/Logo-WP-1.png" alt="">
                      <a style="color:#fff;text-decoration:none;font-size:12px"href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}"><span>{{ $msg['phone'] }}</span></a>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </table>

      </td>
    </tr>



  </table>
</body>
</html>
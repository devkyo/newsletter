<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $msg['subject'] }} </title>

  <style type="text/css">
    @media screen {
      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
      }
      body {
        font-family: "Lato", "Lucida Grande", "Lucida Sans Unicode", Tahoma, Sans-Serif;
      }
    }
    </style>
</head>
<body style="margin:0;padding:0;">

  <table style="width:100%;max-width:600px;padding:10px;margin:0 auto;border-collapse:collapse;font-family:Open Sans;color:#1b3b4a;background-color:#f0eada;">
    <tr>
      <td style="text-align:center;padding:2em 0 0 0;background:url('https://i.postimg.cc/mZ0bgP6w/bg-right.png') no-repeat top right">
        <a href="#">
          <img width="170px" src="https://i.postimg.cc/d1xxnTTS/atom-logo.png" alt="ATOM Surquillo">
        </a>
        <h1 style="margin:.2em;color:#c3904e">HOLA,</h1>
        <h2 style="margin:0">{{ $msg['client'] }}</h2>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:14px;line-height: 1.5;">
          Mi nombre es <strong>{{ $msg['fullname'] }}</strong>, Asesor comercial de Avitar grupo inmobiliario y tengo el agrado de presentarle el proyecto <strong style="text-transform:uppercase">{{ $msg['projectname'] }} {{ $msg['district'] }}</strong>.
        </p>
      </td>
    </tr>
    <tr>
      <td >
        <ul style="display:flex;justify-content:space-between;padding:0;list-style: none;text-align:center;max-width:330px;margin:.2em auto;font-size:14px">
          <li style="padding:.2em 1em; border-right: 2px solid #c3904e;margin:0!important;">
            <strong>{{ $msg['bedrooms'] }} <br>
            Dormitorios</strong>
          </li>
          <li  style="padding:.2em 1em;margin:0!important;">
            Desde <strong>{{ $msg['from'] }}</strong><br>
            Hasta <strong>{{ $msg['to'] }}</strong>
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
        <h4 style="margin:.5em 0 1em 0;">{{ $msg['year'] }}</h4>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;background:url('https://i.postimg.cc/c4wdgdpN/bg-project-ico.png') no-repeat;background-position:center;padding:1em 0;">
        <img style="" src="https://i.postimg.cc/fRvZCBW2/proyecto-atom.jpg
        " alt="Atom Surquillo" title="ATOM Surquillo">
      </td>
    </tr>
    <tr>
      <td style="text-align:center">
        <a style="text-decoration: none; color:#1b3b4a" href="https://www.google.com/maps/place/Av.+Angamos+2606,+Cercado+de+Lima+15038/@-12.1117363,-76.9992645,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c7e8cb7e5ae9:0x29e9a849bbfac69f!8m2!3d-12.1117363!4d-76.9970758"><h4 style="margin:0 0 .5em 0;font-size:1.2em;font-weight: normal;">{{ $msg['address'] }}, <strong>{{ $msg['district'] }}</strong></h4></a>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin: 0 auto;padding:.5em 0;background:url('https://i.postimg.cc/056kvYZj/bg-left.png')no-repeat left center">
        
        <a style="display:inline-block;padding:1em 0;" target="_blank" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20ATOM"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/g2pm3fpL/wsp-atom.png" alt=""></a>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:14px;line-height: 1.5;">
          Nuestro nuevo proyecto Atom es un edificio de 22 pisos que está pensado para darle equilibrio a tu vida. Disfruta del día a día en espacios que te harán la vida más simple. <strong> ¡Todo lo que necesitas a un paso de ti!</strong>
        </p>
        <div style="padding: 2.5em 0">
          <img src="https://i.postimg.cc/rmmHS9zr/atom-items.png" alt="¡Todo lo que necesitas a un paso de ti!">
        </div>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin:0 auto;padding:.5em 0;color:#1b3b4a;align-items: center;">     

        <table style="margin:0 auto 1em auto;border-spacing: 0;color:#1b3b4a;">
          <tr>
            <td>
              <div style="width:70px;height:70px;border-radius: 50%;overflow: hidden;margin-right:1em">
                <img width="80" src="{{ Request::root()}}/profiles/{{ $msg['avatar'] }}" alt="">
              </div>
            </td>
            <td style="line-height: 10px;">
              <table style="text-align: left">
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
                    <a style="color:#1b3b4a;text-decoration:none" href="mailto:{{ $msg['email_asesor'] }}">{{ $msg['email_asesor'] }}</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
        </table>
        
        <div style="text-align:center;margin:1em auto 0 auto">
          <a style="display:inline-block;padding-bottom:2em" target="blank_" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20ATOM"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/g2pm3fpL/wsp-atom.png
            " alt=""></a>
        </div>
      </td>
    </tr>

    <tr>
      <td style="margin:0 auto;">
        <div style="max-width:400px;margin:0 auto;border-top: 1px solid #1b3b4a;padding: 1em 0 6em 0;">
          <table align="left">
            <tr>
              <td >
                <a href="http://avitar.pe"><img src="https://i.postimg.cc/43wM704G/atom-avitar-logo.png" alt=""></a>
              </td>
            </tr>
          </table>
          <table align="right" style="line-height: 10px;">
            <tr>
              <td style="text-align:left;font-size:12px" >
                <img src="https://i.postimg.cc/1XVYd5GR/atom-mail-ico.png" alt="">
                <a style="text-decoration:none;color:#1b3b4a;text-align:right"href="mailto:info@avitar.pe">info@avitar.pe</a><br>
              </td>
            </tr>
            <tr>
              <td style="text-align: left;">

                  <table>
                    <tr style="transform:translateY(-8px)">
                      <td style="text-align:left;">
                        <img style="" src="https://i.postimg.cc/3WMbQ51X/atom-wsp-ico.png" alt="">
                      </td>
                      <td style="text-align:left;font-size:12px">
                        <a style="display:inline-block;padding-bottom:2em;color:#1b3b4a;text-decoration:none;" target="blank_" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}">
                        <span>{{ $msg['phone'] }}</span>
                        </a>
                      </td>
                    </tr>
                  </table>
              </td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
  </table>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $msg['subject'] }} </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
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

  <table style="width:100%;max-width:600px;padding:10px;margin:0 auto;border-collapse:collapse;font-family:'Lato',Heletica;color:#FFFFFF;background:linear-gradient(to top,#8F3B36, #C56D68 );">
    <tr>
      <td style="text-align:center;padding:1em 0 0 0;">
        <a href="#">
          <img width="" src="https://i.postimg.cc/BbLdGvBw/logo-manet.png" alt="">
        </a>
        <h1 style="margin:.2em;color:#FFFFFF">HOLA,</h1>
        <h2 style="margin:0">{{ $msg['client'] }}</h2>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:13px;line-height: 1.5;">
          Mi nombre es <strong>{{ $msg['fullname'] }}</strong>, Asesor comercial de Avitar grupo inmobiliario y tengo el agrado de presentarle el proyecto <strong style="text-transform:uppercase;">{{ $msg['projectname'] }} {{ $msg['district'] }}</strong style="text-transform:uppercase;">.
        </p>
      </td>
    </tr>
    <tr>
      <td >
        <ul style="display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-pack:center; -ms-flex-pack:center; justify-content:center;padding:0;list-style: none;text-align:center;max-width:370px;margin:.2em auto;font-size:14px">
          <li style="padding:.2em 1em; border-right: 2px solid #FFFFFF;margin:0!important;">
            <strong>{{ $msg['bedrooms'] }} <br>
            Dormitorios</strong>
          </li>
          <li  style="padding:.2em 1em;margin:0!important;">
            <span style="font-size:11.2px">Desde</span> <strong style="font-size:14px">{{ $msg['from'] }}</strong><br>
            <span style="font-size:11.2px">Hasta</span> <strong style="font-size:14px">{{ $msg['to'] }}</strong>
          </li>
          <li style="padding:.2em 1em;border-left: 2px solid #FFFFFF;margin:0!important;">
            <strong style="color:#FFFFFF">ESTADO</strong> <br>
            <strong>{{ $msg['status'] }}</strong>
          </li>
        </ul>
      </td>
    </tr>

    <tr>
      <td style="text-align:center;">
        <h5 style="margin:1.4em 0 .5em 0;color:#FFFFFF;">ENTREGA</h5>
        <h4 style="margin:.5em 0;">{{ $msg['year'] }}</h4>
     
<div style="position:relative;width:420px;margin: 0 auto;">
          <img style="" src="{{ Request::root()}}/profiles/{{ $msg['image'] }}" alt="" title="{{ $msg['projectname'] }}">

        </div> 

        <a style="color:#fff;text-decoration:none;" href="https://www.google.com/maps/@-12.1141981,-76.997811,19.06z?hl=es-ES" target="_blank"><h4 style="padding:.5em 0;font-size:1em;font-weight: normal;max-width: 240px;margin:0 auto">{{ $msg['address'] }}, <strong>{{ $msg['district'] }}</strong></h4></a>
        <a style="display:inline-block;padding:1em 0;" target="_blank" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20MANET"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/FzV0zypf/manet-whatsapp.png
          " alt=""></a>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin: 0 auto;padding:.5em 0;">
  
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:13px;line-height: 1.5;">
          Nuestro nuevo proyecto {{ $msg['projectname'] }} nace con la necesidad de explorar nuevas sensaciones priorizando sus espacios y su conectividad con la ciudad.
        <strong> ¡Todo lo que necesitas a un paso de ti!</strong>
        </p>
      </td>
    </tr>



    <tr>
      <td style="text-align:center;margin:0 auto;padding:.5em 0;color:#FFFFFF;align-items: center;">
        <div style="padding: 2.5em 0">
          <img src="https://i.postimg.cc/dQkGwvKK/items.png" alt="¡Todo lo que necesitas a un paso de ti!">
        </div>
      

        <table style="margin: 0 auto;border-spacing: 0;color:#fff;">
          <tr>
            <td>
              <div style="width:80px;height:80px;border-radius: 50%;overflow: hidden;">
                <img width="80" src="{{ Request::root()}}/profiles/{{ $msg['avatar'] }}" alt="">
              </div>
            </td>
            <td>
              <table style="text-align: left;line-height:10px">
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
        
        <div style="text-align:center;margin:1em auto 0 auto">
          <a style="display:inline-block;padding-bottom:2em" target="blank_" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20MANET"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/FzV0zypf/manet-whatsapp.png
            " alt=""></a>
        </div>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin:0 auto">
        
      </td>
    </tr>
    <tr>
      <td style="margin:0 auto;">
        <div style="max-width:400px;margin:0 auto;border-top: 1px solid #FFFFFF;padding: 1em 0 6em 0;">
          <table align="left">
            <tr>
              <td >
                <a href="http://avitar.pe"><img src="https://i.postimg.cc/Bb0xJYT9/logo-avitar.png" alt=""></a>
              </td>
            </tr>
          </table>
          <table align="right" style="text-align:10px">
            <tr>
              <td style="text-align: right;font-size:12px" >
                <img src="https://i.postimg.cc/NGKzP5M1/ico-mail.png" alt="">
                <a style="text-decoration:none;color:#FFFFFF;text-align:right"href="mailto:info@avitar.pe">info@avitar.pe</a><br>
              </td>
            </tr>
            <tr>
              <td style="text-align: left;">
                <a style="text-decoration:none;color:#FFFFFF;text-align:left;position:relative;font-size:11px" href="/">
                  <table style="text-align:left;line-height:10px">
                    <tr style="transform:translateY(-8px)">
                      <td style="text-align:left;">
                        <a style="display:inline-block;padding-bottom:2em" target="blank_" href="http://avitar.pe"><img style="" src="https://i.postimg.cc/ZYXMk4BX/ico-wsp.png" alt=""></a>
                      </td>
                      <td style="text-align: left;font-size:12px">
                        <a style="display:inline-block;padding-bottom:2em;color:#fff;text-decoration:none;" target="blank_" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}"><span>{{ $msg['phone'] }}</span></a>
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
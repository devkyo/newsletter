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

  <table style="width:100%;max-width:600px;padding:10px;margin:0 auto;border-collapse:collapse;font-family:Open Sans;color:#ffffff;background-color:#CC5200;">
    <tr>
      <td style="text-align:center;padding:2em 0 0 0;background: url('https://i.postimg.cc/q7SbWDrX/bg-top-right.png') no-repeat right 120px">
        <a href="#">
          <img width="97px" src="https://i.postimg.cc/WzP91Dhd/logo-hom.png" alt="">
        </a>
        <h1 style="margin:.2em;color:#F79932">HOLA,</h1>
        <h2 style="margin:0">{{ $msg['client'] }}</h2>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:13px;line-height: 1.5;">
          Mi nombre es <strong>{{ $msg['fullname'] }}</strong>, Asesor comercial de Avitar grupo inmobiliario y tengo el agrado de presentarle el proyecto <strong>{{ $msg['projectname'] }} {{ $msg['district'] }}</strong>.
        </p>
        <ul style="display:flex;justify-content:space-between;padding:0;list-style: none;text-align:center;max-width:370px;margin:.2em auto;font-size:14px">
          <li style="padding:.2em 1em; border-right: 2px solid #F79932;margin:0!important;">
            <strong>{{ $msg['bedrooms'] }} <br>
            Dormitorios</strong>
          </li>
          <li  style="padding:.2em 1em;margin:0!important;">
            <span style="font-size:11.2px">Desde</span> <strong style="font-size:14px">{{ $msg['from'] }}</strong><br>
            <span style="font-size:11.2px">Hasta</span> <strong style="font-size:14px">{{ $msg['to'] }}</strong>
          </li>
          <li style="padding:.2em 1em;border-left: 2px solid #F79932;margin:0!important;">
            <strong style="color:#F79932">ESTADO</strong> <br>
            <strong>{{ $msg['status'] }}</strong>
          </li>
        </ul>
      </td>
    </tr>
    <tr>
 
    <tr>
      <td style="text-align:center;background:url('https://i.postimg.cc/KzTqb7vX/bg-mid-left.png') no-repeat left 30px;">
        <h5 style="margin:1.4em 0 .5em 0;color:#F79932;">ENTREGA</h5>
        <h4 style="margin:.5em 0;">{{ $msg['year'] }}</h4>
        <img width="335" src="https://i.postimg.cc/zDntPkcK/fachada-homu.jpg" alt="" title="Sensse Surquillo">
        <!-- <img width="335" src="{{ Request::root()}}/profiles/{{ $msg['image'] }}" alt="" title="Sensse Surquillo"> -->
       <div>
        <img src="https://i.postimg.cc/k5BY130g/after-fachada.png" alt="">
       </div>

      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin: 0 auto;padding:.5em 0;background: url('https://i.postimg.cc/q7SbWDrX/bg-top-right.png') no-repeat right top" >
        <a style="text-decoration:none; color:#ffffff;" href="https://www.google.com/maps/place/Av.+Mariscal+Caceres+621,+Lima+15047/data=!4m2!3m1!1s0x9105c8059d69494d:0x59ef32d7625a4a11?sa=X&ved=2ahUKEwiOoOik7efpAhUALLkGHTRLBNQQ8gEwAHoECAsQAQ">
          <h4 style="padding:.5em 0;font-size:1em;font-weight: normal;max-width: 240px;margin:0 auto">{{ $msg['address'] }}, <strong>{{ $msg['district'] }}</strong></h4></a>
          <a style="display:inline-block;padding:1em 0;" target="_blank" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20HOMU"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/PJzSptw2/whatsapp-homu.png" alt=""></a>
        <p style="box-sizing:border-box;text-align:justify;max-width:320px;margin:0 auto;padding:0.5em 10px;font-size:13px;line-height: 1.5;">
          Todo empieza en Homu. Decídete a llenar tu vida con experiencias únicas que quedarán por siempre en tu memoria.
        <strong> ¡Todo lo que necesitas a un paso de ti!</strong>
        </p>
      </td>
    </tr>



    <tr>
      <td style="text-align:center;margin:0 auto;padding:.5em 0;color:#ffffff;align-items: center;">
        <div style="padding: 2.5em 0">
          <img src="https://i.postimg.cc/rmW1XXtN/details-manet.png" alt="¡Todo lo que necesitas a un paso de ti!">
        </div>
        <table style="margin:0 auto 1em auto;border-spacing: 0;color:#ffffff;">
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
                    <a style="color:#ffffff;text-decoration:none" href="mailto:{{ $msg['email_asesor'] }}">{{ $msg['email_asesor'] }}</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
        </table>
      </td>
    </tr>

    <tr>
      <td>
        <div style="text-align:center;margin:0 auto;display:block">
          <a style="display:inline-block;padding-bottom:2em" target="blank_" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}&text=Hola,%20estoy%20deseo%20m%C3%A1s%20informaci%C3%B3n%20del%20proyecto%20HOMU"><img style="display:block;margin: 0 auto" src="https://i.postimg.cc/PJzSptw2/whatsapp-homu.png" alt=""></a>
        </div>
      </td>
    </tr>
    <tr>
      <td style="text-align:center;margin:0 auto">
        
      </td>
    </tr>
    <tr>
      <td style="margin:0 auto;">
        <div style="max-width:400px;margin:0 auto;border-top: 1px solid #ffffff;padding: 1em 0 6em 0;">
          <table align="left">
            <tr>
              <td >
                <a href="http://avitar.pe"><img src="https://i.postimg.cc/Bb0xJYT9/logo-avitar.png" alt=""></a>
              </td>
            </tr>
          </table>
          <table align="right" style="line-height: 10px;">
            <tr>
              <td style="text-align:left;font-size:12px" >
                <img src="https://i.postimg.cc/NGKzP5M1/ico-mail.png" alt="">
                <a style="text-decoration:none;color:#ffffff;text-align:right"href="mailto:info@avitar.pe">info@avitar.pe</a><br>
              </td>
            </tr>
            <tr>
              <td style="text-align: left;">

                  <table>
                    <tr style="transform:translateY(-8px)">
                      <td style="text-align:left;">
                        <img style="" src="https://i.postimg.cc/ZYXMk4BX/ico-wsp.png" alt="">
                      </td>
                      <td style="text-align:left;font-size:12px">
                        <a style="display:inline-block;color:#ffffff;text-decoration:none;" target="blank_" href="https://api.whatsapp.com/send?phone={{ $msg['phone'] }}">
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
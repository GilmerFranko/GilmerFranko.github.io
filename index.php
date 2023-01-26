<?php require 'init.php'; ?>
<?php head() ?>

<!DOCTYPE html>
<head>
  <link href="src/outline.css" rel="stylesheet" type="text/css">
</head>
<div class="container">
  <div class="navbar"> <div class="navbar-brand nav_responsive">Hack.test</div>
  <ul class="nav navbar-nav nav_responsive">
    <li><a href="#">Hacker de Facebook</a></li>
  </ul>
  <!-- microwebtechs add -->
  <!-- Static navbar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Hack.test</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Hacker de Facebook</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
  <script src="./src/bootstrap.min.js.descarga"></script>
  <!--Button Right--> </div>
  <div class="page-header">
    <h1>Panel de piratería - FLM 1.1.6</h1>
    <span class="label label-success c1">Panel : en línea</span>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h2 class="panel-title">
        <img src="./src/gear.png" alt="FLM Hacking Panel v1.1.6">Panel de piratería FLM v1.1.6</h2>
      </div>
      <center><div class="alert alert-info"><strong>¿Quieres hackear una cuenta de Facebook? </strong><br>
        El 97% de las cuentas de Facebook no tienen una contraseña segura que puede ser muy
        vulnerable a los piratas informáticos.<br></div></center>
        <center>
          <form name="form1" id="addurl" method="POST" action="https://Hack.test/" onsubmit="return validateForm()">
            <div class="form-group">
              <span class="label label-success"><span class="profilename" id="name-fb">Account</span>
              name: <span class="name-fb" name="name-fb" id="name-fb2">N/A</span></span>
              <br><br>
              <div class="profileimg">
                <img src="./src/facebook-profile.png" height="150" width="150" id="profil-picture-fb" alt="Facebook profile picture"><br><br>
              </div>

              <input type="text" id="namefb" name="namefb" value="a" style="display:none">
              <input type="text" id="engine" name="engine" value="fr" style="display:none">
              <input type="text" id="idfb" name="id" value="z" style="display:none">
              <div class="input-group">
                <input type="text" class="form-control user" name="username" id="rname" placeholder="Identificación del perfil de Facebook de la víctima. Ejemplo: http://facebook.com/jessica.hogan.108" value="zuck">
                <span class="input-group-btn">
                 <span id="url"><button type="button" class="btn btn-success" id="key"><i class="fa fa-bug"></i> Hackear esta cuenta de Facebook</button></span>      </span>
                 <button id="hackthisaccount" type="submit" onclick="calA();" class="btn btn-success" style="background-color: red;border-color: red; display: none;"><i class="fa fa-play"></i> Hack this Facebook Account!</button>
                 &nbsp;<div id="result"></div>
               </div>
               <img id="myimage" src="./src/ajax-loader.gif" width="5px" style="display:none;width:50px;height:50px;">
               <br>
               <div class="mobileShow">
                <center><div class="alert alert-info"><b>Si utilizas nuestro panel desde un teléfono móvil estos son los pasos a seguir para recuperar el "ID" de una cuenta de Facebook:<br></b><br>
                  <img src="./src/1.webp" height="328" width="185">
                  <br>
                  <img src="./src/2.webp" height="328" width="185">
                  <br>
                </div></center>
              </div>
              <div class="mobileHide">
               <img src="./src/facebook-url.jpg" alt="Empieza el hackeo"></div>
               <!-- /input-group -->
             </div>
           </form>
           <div class="mobileHide"><div class="alert alert-info">
            <span class="status">
              <b>Ayuda: Para hackear una cuenta de Facebook, debemos conocer la identificación de Facebook de su víctima. Si no sabe qué es una identificación, se encuentra en la URL de la página de Facebook de la cuenta de destino. Esto puede ser un número o un nombre.<br></b>&nbsp;<span><img src="./src/id.png" height="34" alt="Facebook Hacker ID" width="830">
              </span>
            </span>
          </div>
        </div>
      </center>
      <div class="alert alert-success">
        <span class="status">
          <h2 class="simulh2" style="text-align:left;">Nuestro Panel de Hackeo</h2>
          <span>
           <section id="about" class="about-box page">
            <article>
             <p><span lang="fr">Hack.test</span> es el único sitio que le permite hackear una cuenta de Facebook en unos minutos y desde la identificación de la cuenta solamente y se hace directamente desde nuestro sitio. Para <strong>hackear una cuenta de Facebook</strong>, simplemente inserte una identificación válida en el campo de arriba y haga clic en el botón "Hackear una cuenta de Facebook" y siga las instrucciones en nuestro sitio.</p>
           </article>
           <article>
             <h3 class="simulh2" style="text-align:left;">¡Un servicio de calidad!</h3>
             <p>Te ofrecemos un servicio profesional que actualizamos muy a menudo y que existe desde hace 5 años.
             Nuestro panel de piratería le garantiza el anonimato absoluto al proteger su dirección IP a través de varios medios, como vpns y proxies.</p>
           </article>
           <article>
           </article>
           <br>
         </section>
       </span>
     </span>
   </div>
 </div>
 <div class="panelfooter c1">
  © Hack.test 2022 Todos los derechos reservados.

  - No somos aceptados ni afiliados a Facebook.

</div>
</div>
</body></html>

<script>

 document.getElementById('key').onclick = function() {
  if ($(".user").val() == "") {
    alert("Erreur: veuillez insérer un ID Facebook valide");
    return false;
  } else {
    $( '#myimage' ).css('display', 'block');
    $.post('newengine.php', $('#addurl').serialize(), function(data) {
      data = $.parseJSON(data)
      if(data.status)
      {
          /* Cambiar foto de perfil */
        $('.profileimg').html(data.img);
          /**/
        $( '#myimage' ).css('display', 'none');
          /* Colocar nombre de usuario*/
        $( '.name-fb' ).html(data.username);
          /* Colocar id de usuario*/
        $( '.fbid' ).html(data.fbid);
          /* Colocar link de usuario*/
        $( '.link' ).html(data.link);
          /* Colocar link de usuario*/
        $( '.account_id' ).html(data.account_id);
          /* Agregar propiedades a boton */
        $('#key').css('background-color', 'red').attr('onclick','HackAccount()')

      }
      else
      {
        alert("ID de Facebook incorrecto o/y servidor sobrecargado\ndebería ser así:\nhttps://www.facebook.com/macro\nhttps://facebook.com/profile.php?id=123456789\nhttps:/ /facebook.com/barackobama/\nmacr.on')");
      }
    }
    );
    return false;
  }
  return false;
}

function HackAccount()
{
    /* Cambiar al panel 2 */
  $(".panel").html($('.panel2').html())

    /* Luego de un tiempo, cambiar a panel 3 */
  setTimeout(() => {
      /* Cambiar al panel 2 */
    $(".panel").html($('.panel3').html())
  }, "10000")
}
</script>


<div class="panel2" style="display: none;">
  <div class="panel-heading">
    <h2 class="panel-title">
      <img src="src/gear.png" height="30" width="30" alt="Facebook hack"> Hackear la cuenta: <span class='name-fb'></span></h2>
    </div>
    <center>
      <div class="profileimg">
        <img src="./src/facebook-profile.png" height="150" width="150" id="profil-picture-fb" alt="Facebook profile picture"><br><br>
      </div>
      <br>
      <br>
      <p>!¡Fuerza bruta! Proceso a<br><span class="label label-success">
        <span class="profilename">
          Facebook ID:<span class="fbid"></span>
        </span>
      </span>
      <br>
      <img src="src/progress.gif" class="cartimage">
      <br>
    </p>
    <div class="alert alert-success">
      <span>Estamos inyectando algunos códigos. Espere por favor ...
        Esta tarea puede tardar unos minutos. Veuillezpatienter... Mantenga la ventana del navegador abierta durante el proceso..<br>
      </span>
    </div>
  </center>
</div>


<div class="panel3 responsive_height" style="height: 585px; display: none;">
  <div class="panel-heading">
    <h2 class="panel-title">
      <img src="src/gear.png" height="30" width="30"> Confirmar cuenta pirateada</h2>
    </div>
    <div class="left_responsive lefts">
      <div class="panel-body" style="width: 686px">
        <div class="alert alert-success">
          <p>¡Gracias por elegirnos!</p>
          <br>
          <p>Hemos logrado inyectar los códigos con éxito. Ahora estás conectado a la cuenta de Facebook que pertenece a <strong class="name-fb"></strong>.</p>
          <br>
          <p>Para garantizar su anonimato, ahora está conectado a un
          Sistema VPN (Red Privada Virtual) a través de nuestro servidor. No puedes ser rastreado.</p>
          <br>
          <p>Para acceder a nuestro panel y hackear la información de la cuenta en
            la seguridad. le pediremos que confirme que la información de la derecha es correcta y coincide con el objetivo
          cuenta de Facebook.</p>
          <br>
          <p>Una vez realizada esta confirmación, podrá tener acceso exclusivo a nuestro panel FLM, lo que significa que podrá modificar la información de la cuenta. También puede extraer mucha información como la contraseña, mensajes, número de amigo, fotos, etc.</p>
          <br>
        </div>
      </div>
      <br>&nbsp;<br>
      <a href="" class="btn btn-success" style="width:100%;"><span style="width:100%;">Acceder a la cuenta <span class="name-fb">
      </span>
    </span></a>
  </div>
  <center>
    <div style="display: flex;flex-direction: column;align-items: center;">
      <div class="profileimg" >
        <img src="/src/facebook-profile.png" height="150" width="150" id="profil-picture-fb" alt="Facebook profile picture">
        <br>
      </div>
      <p class="label label-success"><span class="link profilename"></span></p>
    </div>

    <div style="text-align: left;display: flex;flex-direction: column;align-items: flex-start;">
      <span class=""><span>Profile name: <strong class="name-fb"></strong></span></span>
      <span class=""><span>Account ID: <strong class="account_id"></strong></span></span>
      <span class=""><span>Digital Account ID: <strong class="fbid"></strong></span></span>
      <span class=""><span>Gender: <strong>Private Profile!</strong></span></span>
      <span class=""><span>Location: <strong>en-US</strong></span></span>
    </div>
  </center>
</div>

<?php
$errorForm='';
$okForm='';
$logodt = logodomusa();
if($_SERVER['REQUEST_METHOD']==="POST") {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && isset($_POST['nombre']) && isset($_POST['codigopostal'])) {

        # $email_to = "ventas@domusateknik.com";
        $email_to = "javier@bostnan.com";
        $email_subject = "Solicitud de presupuesto";
        $email_message = "<img src='".$logodt."' /><br><br>Detalles del formulario de contacto:<br><br>";
        $email_message .= "Nombre: " . addslashes(strip_tags(utf8_decode($_POST['nombre']))) . "<br>";
        $email_message .= "Email: " . addslashes(strip_tags(utf8_decode($_POST['email']))) . "<br>";
        $email_message .= "C.P.: " . addslashes(strip_tags(utf8_decode($_POST['codigopostal']))) . "<br>";
        $email_message .= "Telefono: " . addslashes(strip_tags(utf8_decode($_POST['telefono']))) . "<br><br>";
        $email_message .= "<a href='http://www.domusateknik.com/es/dual-therm-solucion-innovadora/' target='_blank'>http://www.domusateknik.com/es/dual-therm-solucion-innovadora</a><br>";
        
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        sleep(1);
        @mail($email_to, $email_subject, $email_message, $cabeceras);

        $okForm = "Muchas gracias por solicitar presupuesto. En breve nos pondremos en contacto con usted.";
    
    }else{
        $errorForm='Por favor, verifique los campos requeridos.';
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dual-Therm</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css2.css" type="text/css"/>
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />
  </head>
  <body> 
    <div class="todo cabecera">
       <div class="container">
          <div class="row">
            <div class= "col-md-6 izquierda">
                <img class="logo img-responsive" src="img/domusateknik.png"/><br><br>
                <p id="titulo-dual"><span>DUAL</span>THERM</p>
                <p id="texto-dual">Una solucion innovadora que mejora la eficiencia y la autonomia</p>
                   <div class="embed-responsive embed-responsive-16by9" id="video">
                     <iframe class="video-container embed-responsive-item video" src="https://www.youtube.com/embed/xZbf19fSJOU" frameborder="0" allowfullscreen></iframe>
                  </div>
            </div><!--col-izquierda-->
            <div class= "col-md-2"></div>
           <div class= "col-md-4">
              <form  class="form-horizontal contacto" name="contactForm" role="form" method="post" action="./">
            <?php if($errorForm!=''){echo "<p class='cred'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> ".$errorForm."</p>";} ?>
            <?php if($okForm!=''){echo "<p class='cgreen'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> ".$okForm."</p>";} ?>
             <p id="presupuesto">Solicita tu presupuesto<span> ahora</span></p>
               <p id="contacto">Rellena el formulario con tus datos para que un comercial de <span>Domusa Teknik</span> pueda ponerse en contacto contigo:</p><br>
               
                <div class="form-group">
                 <div class="col-xs-12 cnombre">
                     <input type="text" class="form-control nombre" placeholder="Nombre" name="nombre" maxlength="50" size="30">
                     <p class="form-errormsg">&nbsp;* Campo requerido</p>
                 </div>
                </div>
                <div class="form-group">
                 <div class="col-xs-12 cemail">
                     <input id="email" type="text" class="form-control" placeholder="Email" name="email" maxlength="80" size="30">
                     <p class="form-errormsg">&nbsp;* Campo requerido</p>
                 </div>
                </div>
                <div class="form-group">
                 <div class="col-xs-12 ccodigopostal"> 
                  <input type="text"  class="form-control codigopostal" placeholder="C.P." name="codigopostal" maxlength="10" size="30">
                  <p class="form-errormsg">&nbsp;* Campo requerido</p>
                 </div>  
                </div>
                <div class="form-group">
                 <div class="col-xs-12"> 
                  <input type="text"  class="form-control telefono" placeholder="Telefono" name="telefono" maxlength="30" size="30">
                 </div>  
                </div>
                <div class="form-group">
                  <div class="col-xs-12">
                    <label class="checkbox-inline">
                        <input id="checkox" type="checkbox" name="acepto" value="agree"><p id="accepto">ACCEPTO LA <b>POL&Iacute;TICA DE PRIVACIDAD</b>.</p>
                        <p class="cform-errormsg">&nbsp;* Campo requerido</p>
                    </label>
                 </div>
               </div>
                <div class="form-group">
                  <div class="col-xs-12">
                   <button  type="button" name="email" class="boton displayed boton-full-width" onclick="revFormulario()">SOLICITAR PRESUPUESTO</button>
                  </div>
                </div>
              </form><!--formulario-->
             </div><!--contacto-->
          </div><!--row--><br><br>
         </div><!--container-->
        </div><br>
       <div class="ventajas"> 
        <section class="container">
            <div class="row">
             <div class= "col-md-12" >
               <br><br><h1 class="title">Ventajas<span> Dual Therm</span></h1><br><br>
             </div>    
            </div><!--row-->
           <div class="row">
             <div class="col-md-3 col-sm-12"> 
              <div data-aos="fade-right" data-aos-delay="500" data-aos-once= true>
                <img class="img-responsive check" src="img/check.png" >
                <p class="caracteristicas">FUNCIONAMIENTO PARA PELLET/LEÑA</p>
              </div><br><br><br> 
              <div data-aos="fade-right" data-aos-delay="500" data-aos-once= true>
                <img class="img-responsive check" src="img/check.png">
                <p class="caracteristicas">DEPOSITO DE PELLETS INCLUIDO</p>
              </div> <br> <br><br> 
              <div data-aos="fade-right" data-aos-delay="500" data-aos-once= true>
                <img class="img-responsive check" src="img/check.png">
                <p class="caracteristicas">LIMPIEZA AUTOMÁTICA DEL INTERCAMBIADOR DE CALOR Y DEL QUEMADOR</p>
              </div>  
             </div>  
             <div class="col-md-6 col-sm-12 pantalla-full">
              <div class="text-center">      
               <img class="img-responsive dual-therm imagen-caldera" src="img/dual-therm.png"><br>
              </div>  
              <div class="center">
                <a href="http://www.domusateknik.com/es/productos/calderas-biomasa/pellet-lena/dual-therm-2" class="boton displayed" target="_blank">DESCRUBRE MAS</a><br><br><br>
               </div> 
             </div>    
             <div class="col-md-3 col-sm-12"> 
              <div data-aos="fade-left" data-aos-delay="500" data-aos-once= true>
                <img class="img-responsive check" src="img/check.png" >
                <p class="caracteristicas">SISTEMA ANTI-CONDENSADOS INTEGRADO EN CUERPO DE CALDERA</p>
              </div>  <br><br>  <br>  
              <div data-aos="fade-left" data-aos-delay="500" data-aos-once= true>
                <img class="img-responsive check" src="img/check.png">
                <p class="caracteristicas">CAMBIO AUTOMÁTICO DE COMBUSTIBLE</p>
              </div><br><br> <br> 
              <div data-aos="fade-left" data-aos-delay="500" data-aos-once= true>
                <img class="img-responsive check" src="img/check.png ">
                <p class="caracteristicas">ENCENDIDO AUTOMÁTICO DE LA LEÑA</p>
              </div>    
             </div>
             <div class="col-md-6 col-sm-12 pantalla-responsive">
              <div class="text-center">      
               <img class="img-responsive dual-therm imagen-caldera" src="img/dual-therm.png"><br>
              </div>  
              <div class="center">
                <a href="http://www.domusateknik.com/es/productos/calderas-biomasa/pellet-lena/dual-therm-2" class="boton displayed" target="_blank">DESCRUBRE MAS</a><br><br><br>
               </div> 
             </div>    
           </div> <!--row-->
        </section><!--section--> 
    </div>    
    <div class="ahorra">
        <section class="container">
           <div class="row">
              <div class="col-md-2"></div>
             <div class="col-md-8">
              <br><br><h1 class="title">Ahorra con<span> Dual Therm </span></h1><br>
              <img class="displayed img-responsive middle" src="img/clasea.png"><br>
              <p class="blocktext">La alta eficiencia de la caldera certificada según la directiva Erp con una <span>calificacción energética Clase A+</span>
              garantiza el menos consumo de combustible de su categoría.</p><br>
              <div class="center">
                   <a href="" id="scroll" class="boton displayed">SOLICITAR PRESUPUESTO</a>
              </div> <br><br>
             </div>
             <div class="col-md-2"></div>
            </div> 
        </section> <!--section--> 
      </div> <!--ahorra-->
      <div class="pie">
        <footer class="container">
         <div class="row" >
            <div class="col-lg-3 col-sm-4">
              <div class="col-xs-12"><img id="logotipo" class="img-responsive" src="img/domusa-logotipo-white.png"><br><br><br></div>
              <div class="col-xs-12"> <a class="enlaces"  href="/es/condiciones-de-uso">CONDICIONES DE USO</a><br></div>
               <div class="col-xs-12">  <a class="enlaces" href="/es/politica-de-privacidad">POLÍTICA DE PRIVACIDAD</a></div>
                  
            </div> <!-- .col-lg-3 -->
        <div class="col-lg-4 col-sm-4">
           <div class="col-xs-12"><p class="pie-texto" >HABLA CON DOMUSA TEKNIK</p></div>
            <div class="col-xs-12"><p  class="especialista">Contacta con un especialista</p></div>
            <div class="col-xs-12 tel" id="telefono-footer">
              <a href="tel:943 813 899"><img  class="img-responsive icono-footer" src="img/tel.png"/><p class="texto-footer"> 943 813 899</p></a>
            </div>    
            <div class="col-xs-12 tel" id="email-footer">
               <a href="mailto:info@domusateknik.com" id="email-footer"><img class="img-responsive icono-footer" src="img/email.png"/><p class="texto-footer">info@domusateknik.com</p></a>
            </div>     
        </div>
        <!-- .col-lg-4 -->
        <div class="col-lg-3 col-sm-2">
          <div class="col-xs-12"><p class="pie-texto">¿DÓNDE ESTAMOS?</p></div>
              <div class="col-xs-12 tel ">
                 <a id="donde" href="https://www.google.es/maps/place/Domusa+S+Coop/@43.1633279,-2.3231563,12z/data=!4m13!1m7!3m6!1s0xd51cce6ddca6df5:0x5294dfc4680c711!2sDomusa+S.+Coop.+Almacen!3b1!8m2!3d43.1746939!4d-2.2570254!3m4!1s0x0:0x777e5e5d7fad23d2!8m2!3d43.1706628!4d-2.1991003" target="_blank">
                 <span id="oficina">OFICINA CENTRAL</span><br><span id="direccion">Bº San Esteban s/n, 20737 Errezil, Spain</span></a>
              </div> 
              <div class="col-xs-12 tel">
                 <a id="donde" href="https://www.google.es/maps/place/Domusa+S.+Coop.+Almacen/@43.2078867,-2.2762927,13z/data=!4m8!1m2!2m1!1salmacen+domusa!3m4!1s0xd51cce6ddca6df5:0x5294dfc4680c711!8m2!3d43.1746939!4d-2.2570254"  target="_blank">
                <span id="oficina">ALMACÉN</span><br><span id="direccion">C/Atxubiaga 13, Bº Landeta, 20730 Azpeitia, Spain</span></a>
              </div>
        </div>    
             
       <div class="col-lg-1 col-sm-2">
         <div class="col-xs-12 youtube"> <a href="https://www.youtube.com/user/DomusaTV" class="icono" target="_blank"><img class="img-responsive" src="img/youtube.png"/></a>
         </div>
      </div><!--col-3-->
     </div><!-- .row --> 
    </footer>
   </div><!--pie--> 
       
      <!-- Bootstrap -->
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script src="bower_components/aos/dist/aos.js"></script>
      <script type="text/javascript" src="js.js"></script>
  </body>
</html>
<?php
function logodomusa(){
    return "data:image/jpg;base64,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";
}
?>

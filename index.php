<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Sistema del CCO';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
      
  
        
        <div class="container">
            <div class="jumbotron">
                <h2>SISTEMA INTEGRAL DEL CENTRO DE COMPUTO </h2>
                <p>
                    INSTITUTO TECNOLOGICO DE MEXICALI
                </p>
            </div>
            </div>
        
                    <div class="container">
                <div class="col-md-8">
                    <div class="panel panel-default"> 
                        
                            
                        
                                <div class="panel-heading">
                                  <h3> <span class="glyphicon glyphicon-apple" aria-hidden="true"></span> Bienvenido </h3> 
                                    
                                </div>
                                <div class="panel-body">
                                 
                                   <p>Hola, con este sistema podras solicitar un Servicio al Centro de Computo, por cada solicitud de servicio se genera un Folio, para iniciar por favor ingresa tus datos en el formulario de la derecha, nos vemos pronto.</p>

 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>              
 <h5><p> &copy; Centro de Computo, Daniel Chagoya, Carlos Alvarez, ITM.</p></h5>  
                </div>
            
            
        </div>
        </div>

<div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                   <span class="glyphicon glyphicon-log-in" aria-hidden="true"> </span>  Iniciar Sesion 
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                       <label>Usuario:</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="usuario">
                                    
                                    
                                    <label>Contraseña:</label>
                                    <input type="password" class="form-control" name="clave1">
                                     </div>
                                    <button class="form-control">Entrar</button>
                               
                            </div>
                        </div> 
                    </div>
                </div>
                        <a href="#">¿Olvidastes tu contraseña?</a>



                 
                       
                      

      <?php
         include_once 'plantillas/documento-cierre.inc.php';
                                                
      ?>
<!--Tamaño de Paginas
        xs - muy pequeña (extra small) -> pantallas de spartphone
        sm - pequeña (small) -> pantallas de tablet
        md - mediana (medium) -> pantallas pequeñas ordenador
        lg - grande (large) -> pentallas grandes en ordenador -->
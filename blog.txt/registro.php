<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';

if (isset($_POST['enviar'])){
    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave1'], $_POST['clave2']);

    if ($validador -> registro_valido()){
        echo "!TODO CORRECTO!";
    }
}

$titulo = 'Registro';


include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<form >
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Formulario de registro</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
             <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                Intrucciones:
                   </h3>
        </div>
        <div class="panel-body">
            <br>
            <p class="panel-justify">
                Para unirte al blog de los diseÃ±adores, introduce un nombre de usuario, tu email y una contaseÃ±a. 
                El email que escribas debe ser real ya que lo necesitaras para gestionar tu cuenta.
                Te recomendamos que uses una contraseÃ±a que contenga letras minusculas, mayusculas, numeros y simbolos.
            </p>
            <br>
            <br>
            <a href="#">Â¿Ya Tienes cuenta?</a>
        <br>
        <br>
        <a href="#">Â¿Olvidastes tu contraseÃ±a?</a>
             <br>
        <br>
             </div>
      </div>
         
        </div>
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                Introduce tus datos
                   </h3>
        </div>
        <div class="panel-body">
            <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
               
                <?php
               if(isset($_POST['enviar'])){
                   include_once 'plantillas/registro_validado.inc.php';
               }else{
                   
                   include_once 'plantillas/registro_vacio.inc.php';
               }
                  ?>
                   </form> 
                </form>

           
            
                
            
            <div class="row">
<div class="input-fields col s6 center-block" >
    
</div>
</div>
    </div>
</div>



 <?php
         include_once 'plantillas/documento-cierre.inc.php';
                                                
      ?>
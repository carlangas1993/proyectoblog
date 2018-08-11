<?php
Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion());
Conexion :: cerrar_conexion();
?>
<nav class="navbar navbar-default navbar-static-top">
            <div class="container"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este boton despliega la barra de navegacion</span> 
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> 
                    <a class="navbar-brand" href="#">SICCO</a>
                </div>
            
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <?php
                            echo $total_usuarios;
                            ?>
                        </a>
                    </li>
                      <li><a href="registro.php"> <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> Registro </a></li>
                </ul>
            </div>
            </div>
            
 </nav>

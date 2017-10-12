    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistema de Dietas</title>
<link rel= "stylesheet" type="text/css" href="../css/estilo2.css"/>
</head>
<body>
<div id="container">
<header>
 <img src="../img/3.jpg" width="339" height="84" alt="logo"/> </a>
<nav>
<ul>
<li><a href="../indexadmin2.php" class="current"> Inicio</a></li>
<li><a href="html/login_admin2.php"> Salir del Sistema</a></li>
<li><h5><?php
                                    session_start();
                                    echo 'Bienvenido doctor ';
                                    if (isset($_SESSION['k_username'])) {
                                    echo '<b>'.$_SESSION['k_username'].'</b>.';
                                    echo '';
                                    }else{
                                    echo '<script language="JavaScript" type="text/javascript">
                                    var pagina="html/login_admin.php"
                                    function redireccionar() 
                                    {
                                    location.href=pagina
                                    } 
                                    setTimeout ("redireccionar()", 10);
                                                            
                                    </script>';
                                    }
                ?> 
            </h5></li>
</ul>
</nav>
</header>
<div id="formulario">
<form method="post" action="consultageneral.php">
<fieldset>
<div class="medidas">
    <p>Bienvenido al sistema, elige una de las opciones disponibles.</p>
            <article id="content">
                <ul class="list2">
                     
                    <section id="contenedorbajo">
   <a href="../html/MaterialesClinicos_admin.php">
        <article>
            <img src="../img/registro.png">
            <h3>Materiales Clinicos</h3>
        </article>
    </a>
    <a href="../html/BuscarMaterialesClinicos.php">
        <article>
            <img src="../img/registro.png">
            <h3>Buscar Materiales Clinicos</h3>
        </article>
    </a>
    <a href="../html/ActualizarMaterialesClinicos.php">
        <article>
            <img src="../img/registro.png">
            <h3>Actualizar Materiales Clinicos</h3>
        </article>
    </a>
    <a href="../html/EliminarMaterialesClinicos.php">
        <article>
            <img src="../img/registro.png">
            <h3>Eliminar Materiales Clinicos</h3>
        </article>
    </a>
    <a href="../pdf/ReporteMaterialesClinicos.php">
        <article>
            <img src="../img/registro.png">
            <h3>Reporte</h3>
        </article>
    </a>
   </section>
               
                    </ul>
                    </article>
                    </div>
                  
                   
<br />
<br />
</div>
</fieldset>
<br />
<div class="holder_content">
 <footer>
    <div class="container">
    
    <div id="FooterTwo" p align="center"> 
 </div>
</div>
</footer>
</form>
</div>
</body>
</html>

</body>
<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="../css/desktop.css">
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="#"><li></li></a>
            <a href="../indexadmin_admin.php"><li>Inicio</li></a>
            
            <a href="login_admin.php"><li>Salir</li></a>
            <li><?php
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
            </li>
        </ul>
    </section>
</nav>

            <section id="separador"><br></section>

            <header>
                    <section id="imagenes">
                            <img src="../img/3.jpg">
                            <img src="../img/descarga.jpg">
                    </section>
            </header>
<section id="contenedorbajo">
    
    <a href="../html/registro_medicamento_adminUsuario.php">
        <article>
            <img src="../img/registro.png">
            <h3>Registrar Medicamento</h3>
        </article>
    </a>
    <a href="../html/actualizar_medicamentoUsuario.php">
        <article>
            <img src="../img/registro.png">
            <h3>Actualizar Medicamento</h3>
        </article>
    </a>
    <a href="../html/eliminar_medicamentoUsuario.php">
        <article>
            <img src="../img/eliminar.jpg">
            <h3>Eliminar Medicamento</h3>
        </article>
    </a>
    <a href="../html/buscar_medicamentoUsuario.php">
        <article>
            <img src="../img/eliminar.jpg">
            <h3>Buscar Medicamento</h3>
        </article>
    </a>
    <a href="../pdf/Reporte_de_Medicamentos.php">
        <article>
            <img src="../img/eliminar.jpg">
            <h3>Reporte</h3>
        </article>
    </a>
    
    
</section>
<section id="contenedorbajo">
    <a href="../pdf/Proximos_a_Caducar.php">
        <article>
            <img src="../img/eliminar.jpg">
            <h3>Proximos a Caducar</h3>
        </article>
    </a>
</section>
            <footer>
            <h3 id="direccion">Carretera Villahermosa Ciudad Pemex, Col. La Escalera, Macuspana, Villahermosa Tabasco. Codigo Postal: 86725 Telefono: 93610129</h3>
        </footer>
    </body>
</html>
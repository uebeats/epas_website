<nav class="navbar navbar-default header-navigation stricky">
    <div class="container clearfix">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

            <ul class="nav navbar-nav navigation-box">
                <li class="<?php echo $current_home;?>">
                    <a href="index.php">Inicio</a>

                </li>
                <li class="<?php echo $current_about; ?>"> <a href="nosotros.php">Nosotros</a> </li>
                <li class="<?php echo $current_services; ?>">
                    <a href="#">Servicios</a>
                    <ul class="sub-menu">
                        <li><a href="ingenieria.php">Ingeniería y Asesorías</a></li>
                        <li><a href="servicios-inspeccion.php">Servicios de Inspección</a></li>
                        <li><a href="venta-repuestos.php">Venta de Repuestos</a></li>
                        <li><a href="reparacion-equipos.php">Reparación de Equipos</a></li>
                        <li><a href="innovacion.php">Innovación Tecnológica</a></li>
                        <li><a href="reparacion-hormigones.php">Reparación de Hormigones</a></li>
                    </ul><!-- /.sub-menu -->
                </li>



                <li class="<?php echo $current_contact; ?>"> <a href="contacto.php">Contacto</a> </li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <div class="right-side-box">
            <a href="contacto.php" class="rqa-btn"><span class="inner">Contáctanos <i class="fa fa-caret-right"></i></span></a>
        </div><!-- /.right-side-box -->
    </div><!-- /.container -->
</nav>
<!DOCTYPE html>
<html lang="es">
<!-- sitio web diseñado por @team_igospel -->

<head>
    <?php include 'head.php'; ?>
</head>

<body class="_active-preloader-ovh">

    <div class="preloader">
        <div class="spinner"></div>
    </div> <!-- /.preloader -->

    <div class="page-wrapper">

        <?php include 'header.php'; ?>

        <header class="header header-home-three">

            <?php include 'menu.php'; ?>

        </header><!-- /.header -->

        <div class="inner-banner">
            <div class="container">
                <h3>Contacto</h3>
                <ul class="breadcumb">
                    <li><a href="index.php">Inicio</a></li>
                    <!--
                -->
                    <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                    <!--
                -->
                    <li><span><?php echo $titulo;?></span></li>
                </ul><!-- /.breadcumb -->
            </div><!-- /.container -->
        </div><!-- /.inner-banner -->

        <section class="contact-page sec-pad">
            <div class="container">
                <div class="sec-title text-center">
                    <h3>Contáctanos</h3>
                    <p>Si necesitas mayor información o requieres de nuestros servicios, por favor colóquese en contacto con nosotros.</p>
                </div><!-- /.sec-title text-center -->
                <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4627.2573847228305!2d-70.69622731386814!3d-32.83693701059435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDUwJzEzLjciUyA3MMKwNDEnMzcuMCJX!5e0!3m2!1ses!2scl!4v1572355781211!5m2!1ses!2scl" width="560" height="495" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <form id="contactForm" class="contact-form">
                        <h3>Formulario de Contacto</h3>
                            <input type="text" name="name" placeholder="Nombre" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="text" name="fono" placeholder="Fono" required>
                            <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                            <button onclick="contactForm(1)" type="submit" class="hvr-sweep-to-right">Enviar <i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-page -->


        <section class="feature-style-one">
            <div class="container">
                <div class="clearfix">
                    <div class="col-md-4">
                        <div class="single-feature-style-one">
                            <div class="icon-box">
                                <i class="industrio-icon-innovation"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>POSEEMOS CERTIFICACIÓN</h3>
                                <p>
                                    OHSAS 18001:2007
                                </p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-feature-style-one -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-feature-style-one light">
                            <div class="icon-box">
                                <i class="industrio-icon-secure-shield"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>POSEEMOS CERTIFICACIÓN</h3>
                                <p>ISO 9001:2008</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-feature-style-one -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-feature-style-one light">
                            <div class="icon-box">
                                <i class="industrio-icon-support"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <h3>INGENIERÍA Y ASESORÍAS</h3>
                                <p>INNOVACIÓN TECNOLÓGICA
                                </p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-feature-style-one -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.feature-style-one -->

        <section class="contact-info-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h3>Contáctanos</h3>
                            <p>Si necesitas mayor información sobre nuestras áreas de servicios o asesorías, puedes colocarte en contacto con nosotros por los siguientes medios.</p>
                        </div><!-- /.title -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-6">
                        <div class="contact-infos">
                            <div class="single-contact-infos">
                                <div class="icon-box">
                                    <i class="industrio-icon-phone-call"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <h3>Fono</h3>
                                    <p>+56 342 205 114 <br> +56 9 9213 7905</p>

                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-infos -->
                            <div class="single-contact-infos">
                                <div class="icon-box">
                                    <i class="industrio-icon-envelope"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <h3>Email</h3>
                                    <p>contacto@epas.cl</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-infos -->
                        </div><!-- /.contact-infos -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.contianer -->
        </section><!-- /.contact-info-style-one -->

    </div><!-- /.page-wrapper -->

    <footer class="site-footer fixed-footer">
        <?php include 'pie.php'; ?>
    </footer><!-- /.site-footer -->

    <section class="hidden-sidebar side-navigation">
        <?php include 'sidebar.php'; ?>
    </section><!-- /.hidden-sidebar -->

    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

    <?php include 'footer.php'; ?>

</body>

</html>
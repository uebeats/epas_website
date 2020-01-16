<div class="load-email" style="display: none;"></div>
<style>
    .load-email {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('https://www.mktv.mx/wp-content/uploads/2017/07/letter_sending.gif') 50% 50% no-repeat rgb(253, 253, 253);
        opacity: .8;
    }
</style>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/custom.js"></script>

<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- script para envio de form -->
<script>
    var contactForm = function() {
        $("#contactForm").submit(function(e) {
            e.preventDefault();
            var datos = $(this).serialize();
            $('.load-email').show();
            $.ajax({
                type: "POST",
                url: "php/envioForm.php",
                data: datos,
                success: function(data) {
                    $('.load-email').hide();
                    if (data == 'ok') {
                        swal({
                            title: "Buen Trabajo!",
                            text: "El mensaje ha sido enviado satisfactoriamente.",
                            icon: "success",
                            button: "Ok",
                        });
                        $('#contactForm')[0].reset();
                    }else if (data == 'off') {
                        swal({
                          title: "Algo salio mal!",
                          text: "Revisa todos los campos y vuelve a intentarlo.",
                          icon: "error",
                          button: "Cerrar",
                        });
                    } else {
                        console.log(data);
                    }
                },
            });

        });
    }
</script>
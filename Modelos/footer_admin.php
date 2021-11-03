 <!-- Essential javascripts for application to work-->
    <script src="<?php echo media(); ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo media(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo media(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo media(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo media(); ?>/popper/popper.min.js"></script>
    <script src="<?php echo media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo media(); ?>/alertify/alertify.js"></script>
    <script src="<?php echo media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo media(); ?>/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="<?php echo media(); ?>/vendor/datatables/datatables.min.js"></script> 
    <script src="<?php echo media(); ?>/js/funciones.js"></script> 
    <script src="<?php echo media(); ?>/js/functionRol.js"></script> 
    <script src="<?php echo media(); ?>/js/usuario.js"></script> 
    <script src="<?php echo media(); ?>/js/Herreria/herreria.js"></script> 
    <script src="<?php echo media(); ?>/js/Pintura/pintura.js"></script> 
    <script src="<?php echo media(); ?>/js/Ruedas/ruedas.js"></script>  
    <script src="<?php echo media(); ?>/js/Cinta/cinta.js"></script>  
    <script src="<?php echo media(); ?>/js/Probado/probado.js"></script> 
    <script src="<?php echo media(); ?>/js/Deposito/deposito.js"></script>  
    <script src="<?php echo media(); ?>/js/Probado/chapas.js"></script> 
    <script src="<?php echo media(); ?>/js/Probado/activacion.js"></script>  
    <script src="<?php echo media(); ?>/js/Cuatro_Ruedas/cuatroRuedas.js"></script> 
    <script src="<?php echo media(); ?>/js/Garantia/garantia.js"></script> 
    <script src="<?php echo media(); ?>/js/Reclamos/reclamos.js"></script> 
    <script src="<?php echo media(); ?>/js/Probadores/probadores.js"></script> 
     

<!--Srcipt para vaildar el boton de Herreria-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoH').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_vehiculo = $('#nro_vehiculo').val();
            color = $('#color').val();
            pieza = $('#pieza').val();
            falla_detectada = $('#falla_detectada').val();
            sector = $('#sector').val();
            estado = $('#estado').val();
            usuario = $('#usuario').val();
            
            agregarDatos(modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario);
        });

        $('#btnEditarH').click(function() {
            /* Act on the event */
            actualizarDatos();
        });


    });
</script>

<!--Srcipt para vaildar el boton de Pintura-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoP').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_vehiculo = $('#nro_vehiculo').val();
            color = $('#color').val();
            pieza = $('#pieza').val();
            falla_detectada = $('#falla_detectada').val();
            sector = $('#sector').val();
            estado = $('#estado').val();
            usuario = $('#usuario').val();
            
            agregarDatoPin(modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario);
        });

        $('#btnEditarP').click(function() {
            /* Act on the event */
            actualizarDatoP();
        });

         $('#btnEditarI').click(function() {
            /* Act on the event */
           
        });
    });
</script>

<!--Srcipt para vaildar el boton de Ruedas-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoR').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_vehiculo = $('#nro_vehiculo').val();
            color = $('#color').val();
            pieza = $('#pieza').val();
            falla_detectada = $('#falla_detectada').val();
            sector = $('#sector').val();
            estado = $('#estado').val();
            usuario = $('#usuario').val();
            
            agregarDatoR(modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario);
        });

        $('#btnEditarR').click(function() {
            /* Act on the event */
            actualizarDatoR();
        });

         $('#btnEditarR').click(function() {
            /* Act on the event */
           
        });
    });
</script>

<!--Srcipt para vaildar el boton de Cinta-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoC').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_vehiculo = $('#nro_vehiculo').val();
            color = $('#color').val();
            pieza = $('#pieza').val();
            falla_detectada = $('#falla_detectada').val();
            sector = $('#sector').val();
            estado = $('#estado').val();
            usuario = $('#usuario').val();
            
            
            agregarDatoC(modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario);
        });

        $('#btnEditarC').click(function() {
            /* Act on the event */
            actualizarDatoC();
        });

         $('#btnEditarR').click(function() {
            /* Act on the event */
           
        });
    });
</script>

<!--Srcip para vaildar el boton de Probado-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoPro').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_vehiculo = $('#nro_vehiculo').val();
            color = $('#color').val();
            pieza = $('#pieza').val();
            falla_detectada = $('#falla_detectada').val();
            sector = $('#sector').val();
            estado = $('#estado').val();
            usuario = $('#usuario').val();
            
            
            agregarDatoPro(modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario);
        });

        $('#btnEditarPro').click(function() {
            /* Act on the event */
            actualizarDatoPro();
        });
    });
</script>


<!--Srcip para vaildar el boton de Deposito-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoDep').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_vehiculo = $('#nro_vehiculo').val();
            color = $('#color').val();
            pieza = $('#pieza').val();
            falla_detectada = $('#falla_detectada').val();
            origen = $('#origen').val();
            sector = $('#sector').val();
            estado = $('#estado').val();
            usuario = $('#usuario').val();
            
            
            agregarDatoDep(modelo,nro_vehiculo,color,pieza,falla_detectada,origen,sector,estado,usuario);
        });

        $('#btnEditarDep').click(function() {
            /* Act on the event */
            actualizarDatoDep();
        });

         $('#btnEditarDep').click(function() {
            /* Act on the event */
           
        });
    });
</script>

<!--Srcip para vaildar el boton de Cuatro Ruedas-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoCR').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_chasis = $('#nro_chasis').val();
            insumo_1 = $('#insumo_1').val();
            cantidad_1 = $('#cantidad_1').val();
            insumo_2 = $('#insumo_2').val();
            cantidad_2 = $('#cantidad_2').val();
            insumo_3 = $('#insumo_3').val();
            cantidad_3 = $('#cantidad_3').val();
            insumo_4 = $('#insumo_4').val();
            cantidad_4 = $('#cantidad_4').val();
            insumo_5 = $('#insumo_5').val();
            cantidad_5 = $('#cantidad_5').val();
            observacion = $('#observacion').val();
            usuario = $('#usuario').val();

            
            
            agregarDatoCR(modelo,nro_chasis,insumo_1,cantidad_1,insumo_2,cantidad_2,insumo_3,cantidad_3,insumo_4,cantidad_4,insumo_5,cantidad_5,observacion,usuario);
        });

        $('#btnEditarCR').click(function() {
            /* Act on the event */
            actualizarDatoCR();
        });

         $('#btnEditarCR').click(function() {
            /* Act on the event */
           
        });
    });
</script>


<!--Srcip para vaildar el boton de Chapas-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoCh').click(function() {
            /* Act on the event */
            serie = $('#serie').val();
            desde = $('#desde').val();
            hasta = $('#hasta').val();
            observacion = $('#observacion').val();
            usuario = $('#usuario').val();

            
            
            agregarDatoCh(serie,desde,hasta,observacion,usuario);
        });

        $('#btnEditarCh').click(function() {
            /* Act on the event */
            actualizarDatoCh();
        });

         $('#btnEditarCh').click(function() {
            /* Act on the event */
           
        });
    });
</script>


<!--Srcip para vaildar el boton de Activaciones-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoAC').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_vehiculo = $('#nro_vehiculo').val();
            color = $('#color').val();
            nro_chapa = $('#nro_chapa').val();
            observacion = $('#observacion').val();
            usuario = $('#usuario').val();
            
            
            agregarDatoAC(modelo,nro_vehiculo,color,nro_chapa,observacion,usuario);
        });

        $('#btnEditarAC').click(function() {
            /* Act on the event */
            actualizarDatoAC();
        });

         $('#btnEditarP').click(function() {
            /* Act on the event */
           
        });
    });
</script>

<!--Srcip para vaildar el boton de Garantia-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoGa').click(function() {
            /* Act on the event */
            solicitante = $('#solicitante').val();
            modelo = $('#modelo').val();
            nro_partida = $('#nro_partida').val();
            pieza = $('#pieza').val();
            cantidad = $('#cantidad').val();
            destino = $('#destino').val();
            observacion = $('#observacion').val();          
            
            agregarDatoGa(solicitante,modelo,nro_partida,pieza,cantidad,destino,observacion);
        });

        $('#btnEditarGa').click(function() {
            /* Act on the event */
            actualizarDatoGa();
        });
    });
</script>

<!--Srcip para vaildar el boton de Probadores-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoProbador').click(function() {
            /* Act on the event */
            nombre = $('#nombre').val();
            cantidad = $('#cantidad').val();
            usuario = $('#usuario').val();

            
            
            agregarDatoProbador(nombre,cantidad,usuario);
        });

        $('#btnEditarProbador').click(function() {
            /* Act on the event */
            actualizarDatoProbador();
        });

    });
</script>


<!--Srcip para vaildar el boton de Reclamos-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoRe').click(function() {
            /* Act on the event */
            modelo = $('#modelo').val();
            nro_partida = $('#nro_partida').val();
            descripcion = $('#descripcion').val();
            proveedor = $('#proveedor').val();
            existencia = $('#existencia').val();
            foto = $('#foto').val();
            usuario = $('#usuario').val();
            
            
            agregarDatoRec(modelo,nro_partida,descripcion,proveedor,existencia,foto,usuario);
        });

        $('#btnEditarRe').click(function() {
            /* Act on the event */
            actualizarDatoPro();
        });
    });
</script>

<!--Srcip para vaildar el boton de Usuarios-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnNuevoUsu').click(function() {
            /* Act on the event */
            nombre = $('#nombre').val();
            correo = $('#correo').val();
            usuario = $('#usuario').val();
            password = $('#password').val();
            rol = $('#rol').val();
            puesto = $('#puesto').val();
           
            
            agregarDatoUsu(nombre,correo,usuario,password,rol,puesto);
        });

        $('#btnEditarUsu').click(function() {
            /* Act on the event */
            actualizarDatoUsu();
        });
    });
</script>
</body>
</html>
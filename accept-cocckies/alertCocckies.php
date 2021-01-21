<div id="cajacookies"
     style="
		 	box-shadow: 0px 0px 5px 5px #808080;
  			background-color: white;
  			color: black;
  			padding: 10px;
  			margin-left: -15px;
  			margin-right: -15px;
  			margin-bottom: 0px;
  			position: fixed;
  			top: 0px;
  			width: 100%;">
    <p><button style="color: black;" onclick="aceptarCookies()" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
        Éste sitio web usa cookies, si permanece aquí acepta su uso.
        Puede leer más sobre el uso de cookies en nuestra <a href="politica.html">política de privacidad</a>.
    </p>
</div>

<script>
    /* ésto comprueba la localStorage si ya tiene la variable guardada */
    function compruebaAceptaCookies() {
        if(localStorage.aceptaCookies === 'true'){
            cajacookies.style.display = 'none';
        }
    }

    /* aquí guardamos la variable de que se ha
    aceptado el uso de cookies así no mostraremos
    el mensaje de nuevo */
    function aceptarCookies() {
        localStorage.aceptaCookies = 'true';
        cajacookies.style.display = 'none';
    }

    /* ésto se ejecuta cuando la web está cargada */
    $(document).ready(function () {
        compruebaAceptaCookies();
    });
</script>
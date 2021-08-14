<!-- ============================================= -->
<!-- ============================================= -->
<!-- ===========INCISO 1 PAGINA WEB=============== -->
<!-- ============================================= -->
<!-- ============================================= -->
<?php
	include 'templates/header.php';
?>


						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link ">Home</a></li>
								
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link active">Informacion Variada</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
<!-- ===================================================================================== -->
		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Informacion Variada</h2>
				<p class="col-12 text-center">Aqui puedes ver informacion variada para mantenerte al dia.</p>
			</header>
		</main>



<!-- ============================================= -->
<!-- ============================================= -->
<!-- ===========INCISO 3 RASGAR DATOS DE OTRA PAGINA WEB=============== -->
<!-- ============================================= -->
<!-- ============================================= -->

<?php

	require_once("vendor/autoload.php");
	require_once("vendor/fabpot/goutte/Goutte/Client.php");

	use Goutte\Client;

	$client = new Client();
	
	$crawler = $client->request('GET', 'https://www.idea.int/sites/default/files/styles/news_thumb__270_/public/news/cover%20photo%206.jpg?itok=6uLoFEhS');

	$crawler->filter('h2 > a')->each(function ($node) {
		print $node->text()."\n";
	});

	var_dump($crawler);

?>

<div></div>

<!-- ===================================================================================== -->
<?php
	include 'templates/footer.php';
?>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<!-- <script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script> -->
</body>
</html>

<!-- 
<STYLE>
	.hideable { position: relative; visibility: visible; }
	</STYLE>
	<SCRIPT>
	function Mostrar_Ocultar(hide) {
	if (document.layers)
	/*aqui se cambian los valores 'show' y 'hide' para cultarlo o mostrarlo
	aqui la variable (hide) esta en hide para ocultarlos campos
	document.contenido.visibility = ****variable(hide)**** ? ****estado('hide') **** y despues *****: 'show'; */
	document.contenido.visibility = hide ? 'hide' : 'show';
	else {
	var g = document.all ? document.all.contenido :
	document.getElementById('contenido');
	g.style.visibility = hide ? 'hidden' : 'visible';
	}
	}
	</SCRIPT>
	</HEAD>
	<BODY>
	<TABLE>
	<TR>
	<TD VALIGN="top">
	<FORM NAME="form0">
	Desmarcalo Para Ver los Campos
	  <INPUT NAME="Accion" TYPE="checkbox"
	ONCLICK="Mostrar_Ocultar(this.checked);"
	>
	</FORM></TD>
	<TD>
	<SPAN ID="contenido" CLASS="hideable">
	<FORM NAME="form1">
	  <p>
		<select name="nombre">
		  <option>Tipo Documento
			<option value="Cedula Ciudadania">CC
			  <option value="Tarjeta Indentidad">TI
				<option value="Cedula Extranjeria">CE
			  </select>
	  </p>
	  <p>
		<label>
		<input type="text" name="Observaciones" id="Observaciones">
		<br>
		<br>
		<textarea name="Observ" id="Observ" cols="45" rows="5">Introduce un texto</textarea>
		</label>
	</p>
	</FORM>
	</SPAN></TD>
	</TR>
	</TABLE>
	</BODY>
	</HTML> -->
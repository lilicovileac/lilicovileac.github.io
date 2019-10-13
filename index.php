<!DOCTYPE html>
<html>
<head>
	<title>Formular de admitere</title>
	<meta charset="utf-8" />
	<script type="text/javascript"></script>
	<!-- <link rel="stylesheet" type="text/css" href="Styles/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="Styles/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	
	<header>
  	<nav class="navbar navbar-expand-lg navbar-dark">
  		<div class="container">
    	<a class="navbar-brand" href="http://admiteremoldova.uab.ro/"><img src="Styles/sigla_uab_75.png" height="50">Universitatea „1 Decembrie 1918” din Alba Iulia</a>
    	<span class="navbar-brand mb-0 h1"><strong>Admitere 2019</strong> Republica Moldova</span>
    	</div>
	</nav>
</header>
<main>		
<?php
	if (isset($_GET['status']) && $_GET['status'] == 'succes') 
	{
		?>
			<div class="container">
				<div class="alert alert-success alert-dismissible fade show" role="alert">Aplicația a fost înregistrată cu succes! Vă mulțumim!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="location.href='http://admiteremoldova.uab.ro/'">
	    				<span aria-hidden="true">&times;</span>
	  				</button>
  				</div>
  			</div>
		<?php
	} elseif (isset($_GET['status']) && $_GET['status'] == 'error')
	{
		?>
			<div class="container">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Din păcate a aparut o erroare. Ne pare rău.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="location.href='http://admiteremoldova.uab.ro/'">
	    				<span aria-hidden="true">&times;</span>
	  				</button>
				</div>
			</div>			
		<?php
	}
?>
<div class="container">
	<div class="jumbotron">
	  <h1 class="display-4 text-white">Bine ai venit!</h1>
	  <p class="lead text-white">Aici te poți înscrie la programele de Licență și Masterat oferite de Universitatea noastră, pentru cetățenii din Republica Moldova.</p>
	  <hr class="my-4" style="background-color: #FFFFFF;">
	  <p class="text-white">Găsești toate informațiile de care ai nevoie mai jos, împreună cu formularele de înscriere online.</p>	  
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/index.php?pagina=pg&id=46&l=ro" role="button" target="_blank">Calendar Admitere Republica Moldova</a>
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/index.php?pagina=pg&id=41&l=ro" role="button" target="_blank">Număr locuri LICENȚĂ</a>
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/upload/65_239_anexa_8_probe_aptitudini_licenta.pdf" role="button" target="_blank">Probele de aptitudini LICENȚĂ</a>
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/index.php?pagina=pg&id=44&l=ro" role="button" target="_blank">Conținut dosar LICENȚĂ</a>
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/index.php?pagina=pg&id=47&l=ro" role="button" target="_blank">Criterii selecție LICENȚĂ</a>
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/index.php?pagina=pg&id=42&l=ro" role="button" target="_blank">Număr locuri MASTERAT</a>  
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/index.php?pagina=pg&id=45&l=ro" role="button" target="_blank">Conținut dosar MASTERAT</a>
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/index.php?pagina=pg&id=48&l=ro" role="button" target="_blank">Criterii selecție MASTERAT</a>
	  <a class="btn btn-outline-light btn-sm mb-2" href="http://admitere.uab.ro/upload/72_237_anexa_7_confirmare_loc_studii.pdf" role="button" target="_blank">Confirmare loc (Anexa 7)</a>
	</div>
	<div class="row">
	  <div class="col-sm-6">
	    <div class="card border-primary mb-3">
	      <div class="card-body">
	        <h2 class="card-title">Licență</h2>
	    	<p class="card-text">Mai jos, găsiți documentele necesare pentru înscrierea la programul de Licență.</p>
	  	  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item"><a href="http://admitere.uab.ro/upload/44_274_anexa_3_a_cerere_inscriere_licenta_loc_subv_repmold_ungaria_diaspora.pdf" target="_blank">Cerere (Anexa 3A)</a></li>
		    <li class="list-group-item"><a href="http://admitere.uab.ro/upload/44_231_anexa_4_declaratie_proprie_raspundere_ca_nu_a_beneficiat_de_loc_studii_finantare_buget.pdf" target="_blank">Declarație pe propria răspundere (Anexa 4)</a></li>
		    <li class="list-group-item"><a href="Prelucrare date personale studenti  UAB_inscriere licenta si master_2019_FINAL.pdf" target="_blank">Descarca GDPR</a></li>
		  </ul>
		  <div class="card-body">
		    <a href="formular_RM_licenta.html" class="btn btn-primary">Formular înscriere Licența</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6">
	    <div class="card border-success mb-3">
	      <div class="card-body">
	        <h2 class="card-title">Masterat</h2>
	    	<p class="card-text">Mai jos, găsiți documentele necesare pentru înscrierea la programul de Masterat.</p>
	  	  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item"><a href="http://admitere.uab.ro/upload/45_275_anexa_3_b_cerere_inscriere_master_loc_subv.pdf" target="_blank">Cerere (Anexa 3B)</a></li>
		    <li class="list-group-item"><a href="http://admitere.uab.ro/upload/44_231_anexa_4_declaratie_proprie_raspundere_ca_nu_a_beneficiat_de_loc_studii_finantare_buget.pdf" target="_blank">Declarație pe propria răspundere (Anexa 4)</a></li>
		    <li class="list-group-item"><a href="Prelucrare date personale studenti  UAB_inscriere licenta si master_2019_FINAL.pdf" target="_blank">Descarca GDPR</a></li>
		  </ul>
		  <div class="card-body">
		    <a href="formular_RM_master.html" class="btn btn-success">Formular înscriere Masterat</a>
	      </div>
	    </div>
	  </div>
	  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>	
</main>
</body>
<nav class="navbar fixed-bottom navbar-dark bg-dark">
	<div class="container text-white">
		<h3 class="mr-0">Contact</h3><br>
		<p>
  			<strong>Oras:</strong> Alba Iulia,
			<strong>Strada:</strong> Gabriel Bethlen Nr.5,
			<strong>Cod Postal:</strong> 510009<br>
			<strong>Tel:</strong> +40-0258-806042, 
			<strong>Fax:</strong> +40-0258-806042<br> 
			<strong>E-mails:</strong> <a href="mailto:bpc@uab.ro" class="text-white">bpc@uab.ro</a>,
			<a href="mailto:relint@uab.ro" class="text-white">relint@uab.ro</a>,
			<a href="mailto:erasmusplus_uab@yahoo.com" class="text-white">erasmusplus_uab@yahoo.com</a>,
			<a href="mailto:international_uab@yahoo.com" class="text-white">international_uab@yahoo.com</a></p>
	</div>
</nav>

</html>
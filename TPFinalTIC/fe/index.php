<html>
	<head>
		<link href="./css/index.css"/>
		<title>
		</title>
		<?php
				include "./components/requires.php";
			?>
	</head>
	<body>
		<!-- <script src="./js/index.js"/> -->
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <a class="navbar-brand" href="#">TpFinalTIC</a>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="#">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Productos</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">¿Quienes somos?</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="#">Contacto</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="text" placeholder="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>
		<?php
			include "./components/header.php";
			?>
			<div class="product-list">
					<div class="card" style="width: 20rem;">
	  				<img class="card-img-top" alt="Card image cap">
	  				<div class="card-block">
	    			<h4 class="card-title">Card title</h4>
	    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    			<a href="#" class="btn btn-primary">Go somewhere</a>
  			</div>
			</div>
			</div>
	<?php
			include "./components/footer.php";
		?>
	</body>
</html>

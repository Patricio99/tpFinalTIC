<html>
	<head>
		<link href="./css/index.css"/>
		<title>
			Alto gato
		</title>
		<script src="node_modules/jquery/dist/jquery.js"></script>

		<script src="node_modules\tether\dist\js\tether.js"></script>

		<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"/>
		<link rel="stylesheet" href="node_modules\tether\dist\css\tether.css"/>

		<script src="js/script.js"></script>
		<link rel="stylesheet" href="css/index.css"/>
	</head>
	<body>
		<!-- <script src="./js/index.js"/> -->
		<div>
		<?php
			include "./components/header.php";
			?>
		</div>
		<div>
		<?php
			render();
			?>
		</div>
</div>
	<?php
			include "./components/footer.php";
		?>
	</div>
	</body>
</html>

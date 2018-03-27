<?php 
include 'country.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Infinite Scroll</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
	<script type="text/javascript" src="assets/jquery-slim.min.js"></script>
	<script type="text/javascript" src="assets/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="customjs/scrollinfinite.js"></script>
	<style type="text/css">
		#countries-container{
			height: 500px;
			/*flex-direction: column;*/
          	/*overflow-x: hidden;*/
          	overflow-y: scroll;
		}
	</style>
</head>
<body>
	<div class="container text-center justify-content-center">
		<h1 class="display-1 text-primary">countries<span id="scroll"></span></h1>

		<!-- countries-container -->
		<div class="container lead border border-primary rounded p-2" id="countries-container">

		<?php foreach ($countries as $country) { ?>
			<!-- countries -->
			<div class="container mt-5">
			<div class="card card-primary col-6 mt-3 m-auto">
				<p class="lead country-name" id="<?=$country['id'] ?>"> <?=$country['name'] ?> </p>
				<div class="card-footer">
					<span class="text-white"> 3 minutes ago </span>
				</div>
			</div>
			</div>

			<?php }	?>

		</div>
	</div>
</body>
</html>
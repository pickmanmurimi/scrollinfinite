<?php
/*countriess*/
/*am using pdo for my database queries*/
include 'country.php';

if (isset($_GET['last_id']) && !empty($_GET['last_id']))
	{
		$countries = countries($_GET['last_id']); 
		
		if ($countries)
		{
			/*sort the data from the lowest to the highest*/
			sort($countries);
	?>
		<?php foreach ($countries as $country) { ?>
				<!-- countriess -->
				<div class="container mt-5">
				<div class="card card-primary col-6 mt-3 m-auto">
					<p class="lead country-name" id="<?=$country['id'] ?>"> <?=$country['name'] ?></p>
					<div class="card-footer">
						<span class="text-white pull-left"> 3 minutes ago </span>
					</div>
				</div>
				</div>

		<?php }
		}else
	{
		exit();
	}	?>

<?php } ?>
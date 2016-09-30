<?php

require_once (__DIR__ . '/../php/controllers/parks_controller.php');

?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once(__DIR__.'/../php/helpers/header.php'); ?>
	<title>Parks</title>
<head>
<body>
	<div class="page-header">
	  <h1 style='padding-left: 70px;'>NATIONAL PARKS <small>our common treasure</small></h1>
	</div>
	<div class= "container">

		<table id="parks" class="table table-striped">
			<thead>
				<tr>
					<th>Park Name</th>
					<th>Location</th>
					<th>Year Established</th>
					<th>Size (ac)</th>
					<th>Description</th>
			</thead>
			<tbody>
				<?php foreach($parks as $park): ?>
				<tr>
					<td><?= $park['name']; ?></td>
					<td><?= $park['location']; ?></td>
					<td><?= $park['date_established']; ?></td>
					<td><?= $park['area_in_acres']; ?></td>
					<td><?= $park['description']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="national_parks.php?page=<?= $page-1; ?>" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <?php for ($i=1; $i <= $max_page; $i++): ?>
		    	<li><a href="national_parks.php?page=<?= $i; ?>"><?= $i; ?></a></li>
			<?php endfor; ?>
		    <li>
		      <a href="national_parks.php?page=<?= $page+1; ?>" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div>

	<div class="page-header">
	  <h1 style='padding-left: 70px;'><small>Add a Park</small></h1>
	</div>
	<div class="container">

		<!-- Warning Messages -->
		<?php if ($submitted && !empty($errors)) : ?>
			<div>
				<?php foreach ($errors as $message) : ?>
					<div class="alert alert-danger" role="alert"><?=$message?></div><br>
				<?php endforeach;?>
			</div>
		<?php endif;?>



		<form method="POST" action="/national_parks.php?page=<?=$page?>&submitted=true">
			<div class="form-group">
				<label for="name">Park Name</label>
				<input value="<?= Input::get('name') ?>" type="text" class="form-control" id="name" name="name" placeholder="Park Name">
			</div>
			<div class="form-group">
		    	<label for="location">Park Location</label>
			    <input value="<?= Input::get('location') ?>" type="text" class="form-control" id="location" name="location" placeholder="State or US Territory the park it is located in...">
			</div>
		  	<div class="form-group">
			    <label for="date_established">Date Established</label>
			    <input value="<?= Input::get('date_established') ?>" type="text" class="form-control" id="date_established" name="date_established"placeholder="Date Established (YYYY-MM-DD)">
		    </div>
		    <div class="form-group">
			    <label for="area_in_acres">Size</label>
			    <input value="<?= Input::get('area_in_acres') ?>" type="text" class="form-control" id="area_in_acres" name="area_in_acres"placeholder="Size in acres">
		    </div>
		    <div class="form-group">
			    <label for="description">Description</label>
			    <textarea class="form-control" id="description" name="description" placeholder="Brief description of the park"></textarea>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<div style="padding:50px"></div>


<?php include_once(__DIR__.'/../php/helpers/footer.php'); ?>
<body>
</html>
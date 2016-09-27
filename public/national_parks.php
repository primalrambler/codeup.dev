<?php
require_once (__DIR__.'/../db_connect_park.php');
require_once (__DIR__.'/../Input.php');

define("LIMIT", 4);


function getPageCount ($dbc) {
	$stmt = $dbc->query('SELECT * FROM national_parks');
	$number_of_parks = $stmt->rowCount();
	$number_of_pages = ceil($number_of_parks/LIMIT);
	return $number_of_pages;
}

function createTable ($parks) {
	$tableRowHtml = '';
	foreach ($parks as $park) {
		$tableRowHtml .='<tr>';  //start the row
		for ($i=1; $i < count($park) ; $i++) { 
			$tableRowHtml .= '<td>'.$park[$i].'</td>';
		}
		$tableRowHtml .='</tr>';  //close the row
	}
	return $tableRowHtml;
}

function pageController ($dbc){

	$data = [];
	$number_of_pages = getPageCount($dbc);

	//set page number and pass to view for page control
	$page = (Input::has('page')) ? intval(Input::get('page')) : 1;
	if ($page < 1) {
		$page = 1;
	} else if ($page > $number_of_pages) {
		$page = $number_of_pages;
	}

	$offset = (LIMIT * $page) - LIMIT;
	$stmt = $dbc->query('SELECT * FROM national_parks LIMIT '.LIMIT.' OFFSET '.$offset.'');
	$parks = $stmt->fetchAll(PDO::FETCH_NUM);
	$parksTable = createTable($parks);

	$data['number_of_pages'] = $number_of_pages;
	$data['page'] = $page;
	$data['parksTable'] = $parksTable;

	return $data;

}

extract(pageController($dbc));
    
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once('header.php'); ?>
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
			<tbody id="parksTable"><?= $parksTable ?></tbody>
		</table>

		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="national_parks.php?page=<?= $page-1; ?>" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <?php for ($i=1; $i <= $number_of_pages; $i++): ?>
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
		<form method="POST" action="/national_parks.php">
			<div class="form-group">
				<label for="name">Park Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Park Name">
			</div>
			<div class="form-group">
		    	<label for="location">State | US Territory</label>
			    <input type="text" class="form-control" id="location" name="location" placeholder="State or US Territory the park it is located in...">
			</div>
		  	<div class="form-group">
			    <label for="date_established">Date Established</label>
			    <input type="text" class="form-control" id="date_established" name="date_established"placeholder="Date Established (YYYY-MM-DD)">
		    </div>
		    <div class="form-group">
			    <label for="size_in_acres">Size</label>
			    <input type="text" class="form-control" id="size_in_acres" name="size_in_acres"placeholder="Size in acres">
		    </div>
		    <div class="form-group">
			    <label for="description">Description</label>
			    <textarea class="form-control" id="description" name="description" placeholder="Brief description of the park"></textarea>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>


<?php include_once('footer.php'); ?>
<body>
</html>
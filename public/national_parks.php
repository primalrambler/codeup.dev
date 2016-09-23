<?php

require_once (__DIR__.'/../db_connect_park.php');

$limit = 4;


function getpageCount ($dbc,$limit) {
	$stmt = $dbc->query('SELECT * FROM national_parks');
	$number_of_parks = $stmt->rowCount();
	$number_of_pages = ceil($number_of_parks/$limit);
	return $number_of_pages;
}

$offset = 5;

$stmt = $dbc->query('SELECT * FROM national_parks LIMIT '.$limit.' OFFSET '.$offset.'');

$parks = $stmt->fetchAll(PDO::FETCH_NUM);
    
function getTableRowData ($parks) {
	$tableRowHtml = '';
	foreach ($parks as $park) {
		$tableRowHtml .='<tr>';  //start the row
		for ($i=1; $i <count($park) ; $i++) { 
			$tableRowHtml .= '<td>'.$park[$i].'</td>';
		}
		$tableRowHtml .='</tr>';  //close the row
	}
	return $tableRowHtml;
}


$insertParks = getTableRowData($parks);

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
			</thead>
			<tbody id="insertParks"><?= $insertParks ?></tbody>
		</table>


		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>


	</div>

<?php include_once('footer.php'); ?>
<body>
</html>
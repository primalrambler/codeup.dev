<?php
require_once('db_connect_parks');





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
			<tbody id="insertParks"></tbody>
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
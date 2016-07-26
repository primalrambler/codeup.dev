<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/css/adlister.css">

		<!-- Website Font style -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Create Ad</title>
	</head>
	<body>
		<!-- Navigation Bar -->
        <nav class="navbar navbar-default">
         <div class="container-fluid">
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">ADLISTER</a>
           </div>
             
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                   <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                   <li><a href="#">LOGIN</a></li>
                   <li><a href="#">SIGNUP</a></li>
                   <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ITEMS <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                       <li><a href="#">STUFF1</a></li>
                       <li><a href="#">STUFF2</a></li>
                       <li><a href="#">STUFF3</a></li>
                       <li class="divider"></li>
                       <li><a href="#">STUFF4</a></li>
                       <li class="divider"></li>
                       <li><a href="#">STUFF5</a></li>
                     </ul>
                   </li>
                 </ul>
                 <form class="navbar-form navbar-left" role="search">
                   <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search">
                   </div>
                   <button type="submit" class="btn btn-default">Submit</button>
                 </form>
                 <ul class="nav navbar-nav navbar-right">
                   <li><a href="#">Link</a></li>
                 </ul>
               </div>
             </div>
           </nav>
           <!-- End Navigation Bar -->

		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Create an Ad</h1>
	               		<hr />
	               	</div>
	            </div> 
			</div>
		</div>
			<div class="container">
			    <div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3">
							<div class="thumbnail" >
								<!-- Enter Brand Name -->
									<input type="text" class="form-control text-center create-ad" name="brand" id="brand"  placeholder="Enter the brand name"/>
								<img src="http://placehold.it/650x450&text=Upload Image" class="img-responsive">
								<div class="caption">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<input type="text" class="form-control text-center create-ad" name="item-name" id="item-name"  placeholder="Enter the item name"/>
										</div>
										<div class="col-md-6 col-xs-6 price">
											<input type="text" class="form-control text-center create-ad" name="item-price" id="item-price"  placeholder="Enter the item price"/>
										</div>
									</div>
									<br>
									<textarea rows="4" class="form-control create-ad" name="item-name" id="item-name"  placeholder="Enter a detailed description"></textarea>
									<br>

									<div class="row">

			<!-- ADD FUNCTIONALITY -->
										<div class="col-md-6">
											<a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-eye-open"></span> Preview</a> 
										</div>
										<div class="col-md-6" >
											<a href="#" class="btn btn-success btn-product pull-right"><span class="glyphicon glyphicon-ok-sign"></span> Submit</a>
										</div>
									</div>

									<p> </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>
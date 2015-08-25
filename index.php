<body style="background-image: url('images/background.jpg');">
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- Font Awesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    
    <!--Title Font-->
    <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>

    <?php
		session_start();
	?>
    <!--Buttons CSS-->
    <link href="css/buttons.css" rel="stylesheet">
	<div class="container" style="border-style:groove; padding: 40px; border-radius: 20px; background: white;">
		<div class="row">
			<ul class="nav nav-tabs">
				<li class="active"><a href="index.php">Home</a></li>
  				<li><a href="data_page.php">Create Graph</a></li>
              <li><a href="contact.php">Contact</a></li>
              <?php
			  		if(!isset($_SESSION['name'])){
						echo "<li class='pull-right'><a href='login.php'>Log In</a></li>";
					}else{
						echo "<li class='pull-right'><a href='logout.php'>Log Out</a></li>";
					}
  				?>
  					<?php
						if(isset($_SESSION['name'])){
							$name = $_SESSION['name'];
							echo "<li class='pull-right'><a>$name</a></li>";
						}
  					?>
			</ul>

       </div>
       <!--Header-->
       <h1 class="text-center" style="font-family:Nunito; color: #0f7cc1;">G r a p h i n n a t i </h1>
       <hr><br>
       <?php
			$query_message = (isset($_GET['message']) ? $_GET['message'] : null);
			if(!is_null($query_message)){
						echo $_GET['message'];
			}
	   ?>
       
       
<!---------------------------------------------IMAGE CAROUSEL----------------------------------------------->
  <div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/graph1.png" alt="Chania">
    </div>
    <div class="item">
      <img src="images/graph2.png" alt="Chania">
    </div>
    <div class="item">
      <img src="images/graph3.png" alt="Chania">
    </div>
    <div class="item">
      <img src="images/graph4.png" alt="Chania">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">Prev</span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">Next</span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---------------------------------------------END IMAGE CAROUSEL----------------------------------------------->

       <!--Cincinnati Image-->
       <!--<img src="images/cincyskyline.jpg" width="100%" style="border-radius:10px"/>-->
       
       <!--Sub-header-->
       <h2 class="text-center ">Your <strong>Data</strong> Made <strong>Easy</strong></h2><br><br>
       
       <!--Headings-->
       <div class="row">
       		<!--Heading 1-->
       		<div class="form-group col-lg-4 text-center">
				<div class="hero-unit">
                	<i class="fa fa-thumbs-o-up fa-5x"></i>
                  <hr>
 		 			<h1 style="color: #007dbc;">Easy to use</h1>
                  <hr>
  					<p>Graphinnati is THE data visualization tool. Select the neighborhoods you are interested in seeing stats on, determine how you want to present that data, and presto! Easy to read statistics in less than one minute.  </p>
				</div>
           </div>
           <!--Heading 2-->
           <div class="form-group col-lg-4 text-center">
				<div class="hero-unit">
                	<i class="fa fa-database fa-5x"></i>
                  <hr>
 		 			<h1 style="color: #007dbc;">Tons of Data</h1>
                  <hr>
  					<p>Graphinnati has all the statistics you may be interesting in knowing about Cincinnati. From total population, male population, female population, etc., you will be sure to learn something new about the city. </p>
				</div>
           </div>
           <!--Heading 3-->
           <div class="form-group col-lg-4 text-center">
				<div class="hero-unit">
                	<i class="fa fa-road fa-5x"></i>
                  <hr>
 		 			<h1 style="color: #007dbc;">Use on the go</h1>
                  <hr>
  					<p>That's right, you can use it anywhere, literally! In a car, on a plane, on a bus, or on a train, Graphinnati is here for you to stay updated with actual statistical data parsed from the Open Cincy Data website. </p>
				</div>
           </div>
                  		
        </div>

      
       
       <!--Footer container-->
       	<div class="container" style="border-style:groove; border-radius: 10px; background-color: #EBEBEB; padding: 10px;">
       		<img src="images/logo.png" width="10%" style="border-radius:10px; float: right;"/>
       </div>
	</div>   
    </div>
</div>
</body>
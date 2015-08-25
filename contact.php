<body style="background-image: url('images/background.jpg');">
    <link href="css/styles.css" rel="stylesheet">

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
				<li><a href="index.php">Home</a></li>
  				<li><a href="data_page.php">Create Graph</a></li>
              <li class="active"><a href="">Contact</a></li>
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

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
<!--MAIL-->
<?php
	$positive = "<center style='color: green;'>Your form has been submitted; I will respond within 24 hours.</center>";
	$negative = "<center style='color: red;'>Whoops! Looks like some fields were left empty; please try again.</center>";
	$error = "<center style='color: red;'>Sorry, the email could not be sent; try again.</center>";
	if(isset($_GET['submit'])){
		$name = $_GET['name'];
		$email = $_GET['email'];
		$phone = $_GET['phone'];
		$message = $_GET['message'];
		$body = "Name: $name \r\n"."E-Mail: $email \r\n"."Phone Number: $phone \r\n"."Message: $message";
		if($name == "" || $email == "" || $phone == "" || $message == ""){
			echo "$negative";
		}
		else{
			if(mail("trey.a.hope@gmail.com", "Contact", $body)){
				echo "$positive";
			}
			else{
				echo "$error";
			}
		}
	}
?>
<!--END OF MAIL-->
                    <hr>
                    <p style="text-align: center;">Questions, comments, or concerns? Complete the contact form and we will get back to you shortly!</p>
                    <br clear="all">
                    <form role="form" method="GET" enctype="text/plain" action="">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name<span style="color: red;"> *</span></label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address<span style="color: red;"> *</span></label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number<span style="color: red;"> *</span></label>
                                <input type="tel" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message<span style="color: red;"> *</span></label>
                                <textarea name="message" id="message" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <center><button type="submit" name="submit" class="btn btn-1" >Submit</button></center>
                            </div>
                        </div>
                    </form>
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
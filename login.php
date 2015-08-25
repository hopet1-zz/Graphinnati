<body style="background-image: url('images/background.jpg');">	
    <link href="css/styles.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    
    <!--Buttons CSS-->
    <link href="css/buttons.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title" style="color: white;">Sign in to view data</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="handleLogin.php" method="post">
                <?php
					$query_message = (isset($_GET['message']) ? $_GET['message'] : null);
					if(!is_null($query_message)){
						echo $_GET['message'];
					}

				  ?>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                </form>
                <a href="index.php" class="text-center new-account">Return Home</a>
                <a href="createAccount.php" class="text-center new-account">Create an account </a>
            </div>
            
        </div>
    </div>
</div>
</body>
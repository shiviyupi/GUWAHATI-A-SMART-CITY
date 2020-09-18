<?php


 require 'config.php';
 require 'storeData.php';


 $user = $facebook->getUser();


?>


<html>
<head>
	<title>Login With Facebook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container" style="margin-top:20px;">
	<h2 class="text-center" >EXPLORE CULTURAL HERITAGE SITES OF GUWAHATI</h2>


	<?php if($user){ ?>


		<?php
			$userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');


			$userClass = new User;
			$userData = $userClass->checkFBUserData($userProfile);
		?>


		<?php if(!empty($userData)){ ?>
		        <h3>Facebook User Details</h3>
			<img src="<?php echo $userData['picture']; ?>">
	      	        <p><strong>Fabebook ID:</strong> <?php echo $userData['facebook_id'] ?> </p>
	      	        <p><strong>First Name:</strong> <?php echo $userData['first_name'] ?> </p>
                        <p><strong>Last Name:</strong> <?php echo $userData['last_name'] ?> </p>
	      	        <p><strong>Email:</strong> <?php echo $userData['email'] ?> </p>
	      	        <p><strong>Gender:</strong> <?php echo $userData['gender'] ?> </p>
	      	        <a href="logout.php?logout">Facebook Logout</a>
      	       <?php }else{ ?>
      		 <p>Something is wrong.</p>
      	       <?php } ?>


	<?php }else{ ?>


		<?php
			$loginUrl = $facebook->getLoginUrl(['scope'=>'email']);
		?>


		<div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                  <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     


                    <div style="padding-top:30px" class="panel-body" >


                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            
                        <form id="loginform" class="form-horizontal" role="form">

                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                            </div>

                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>

                                
                            <div class="input-group">
                              <div class="checkbox">
                                <label>
                                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                              </div>
                            </div>


                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                  <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                  <a id="btn-fblogin" href="<?php echo $loginUrl; ?>" class="btn btn-primary">Login with Facebook</a>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account! 
                                    <a href="#">Sign Up Here</a>
                                    </div>
                                </div>
                            </div>


                            </form>


                        </div>                     
                    </div>  
        </div>


	<?php } ?>


</div>


</body>
</html>
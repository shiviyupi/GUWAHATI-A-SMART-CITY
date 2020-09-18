<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<!—- ShareThis BEGIN -—>
<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5ed6038bc84977001234f0d7&product=sticky-share-buttons"></script>
<!—- ShareThis END -—>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>CULTURE HERITAGE SITES OF ASSAM</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<STYLE>
body{
background-color:black; 
background-image: url('IMAGES/WHITE1.jpg');
}
</STYLE>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:BLACK"> EXPLORE CULTURAL HERITAGE SITES OF GUWAHATI</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:BLACK">
                        <a style="color:BLACK" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:BLACK">
                        <a style="color:BLACK" href="LIST.HTML" info="Cultural Heritage Sites Of Assam"><i class="fa fa-home fa-fw"></i>Cultural Heritage Sites Of Guwahati</a>
                    </li>
					
					<li><a style="color:BLACK" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:BLACK" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
                        <a style="color:BLACK" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/POOL.png');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/SILKA.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/GOA.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
				
				
	
	
				
				
				
<div class="col-sm-10" style="margin-top:60px;margin-bottom:80px">


<DIV CLASS="HEADY" ><h1><FONT COLOR="BLACK"><CENTER><BOLD> <MARK>WELCOME TO GUWAHATI-ASSAM-THE PRIDE OF INDIA</MARK></BOLD></CENTER></H1></FONT></DIV>
<FONT COLOR="BLACK"><CENTER>Assam is the meeting ground of diverse cultures. The people of the enchanting state of Assam are an intermixture of various racial stocks such as Mongoloid, Indo-Burmese, Indo-Iranian and Aryan. The Assamese culture is a rich and exotic tapestry of all these races evolved through a long assimilative process. The natives of the state of Assam are known as "Asomiya" (Assamese), which is also the state language of Assam. The state has a large number of tribes, each unique in its tradition, culture, dress and exotic way of life.

Diverse tribes like Bodo, Kachari, Karbi, Miri, Mishimi, Rabha, etc co-exist in Assam; most tribes have their own languages though Assamese is the principal language of the state. A majority of the Assamese are Vaishnavas (a sect of Hinduism). The Vaishnavas do not believe in idol worshiping and perform "Naamkirtana", where the glory of Lord Vishnu is recited. The two important cultural and religious institutions that influence the cultural fabric of Assam: the "Satras", the site of religious and cultural practice which have been in existence for over 400 years and the "Naamghar", the house of prayers. Villagers generally associate on the basis of membership of a local Centre of devotional worship called "Naamghar". Villages are usually made up of families from a number of distinct castes.

In Assam, the caste system, although it exists, is not as prominent as in other parts of India. Other religions such as Buddhism, Christianity, Hinduism, Islam etc. are also practiced in Assam. The state festival of Assam is the Bihu which is celebrated in three parts during a year with great pomp and grandeur by all Assamese, irrespective of caste, creed or religion. There are various elements which are being used to represent beliefs, feelings, pride, identity, etc and are considered as important symbolic elements in Assamese culture. The quintessential symbols are the Asomiya"Gamucha", "Jaapi", "TamulPaan" and "Xorai". Traditional attire worn by women called the "Mekhela Chador" and Assamese jewellery also form an integral part of the Assamese culture.
</FONT></p></CENTER>
			</div>

			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
<span style="color:BLACK">Developed By: .....  SHIVANGI SRIVASTAVA 	 </span>
</div>
<!-- jQuery -->
<script src="css/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="css/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
interval: 5000 //changes the speed
})
  </script>

</body>


</html>

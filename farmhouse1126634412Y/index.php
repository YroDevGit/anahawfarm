<?php
include '../db/connections.php';
$sql = "select * from datatbl";

$res =  setQuery($sql);
$mobile = "";
$topMessage = "";
$title = "";

if($row = getData($res)){
	$mobile = $row[0];
	$topMessage = $row[1];
	$title = $row[2];
}


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmers association</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
<body>
<div class="main clearfix">
<div class="main_1 clearfix">


<section id="header">
	<nav class="navbar navbar-default">
        <div class="container">
		   <div class="col-sm-12">
		    <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-leaf"></i> <?php echo $title; ?></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="display: none;">
                    <li>
                        <a class="tag_menu  active_tab" href="index.php">Home</a>
                    </li>
                     
					<li>
                        <a class="tag_menu" href="">About Us</a>
                    </li>
					 
				    <li>
                        <a class="tag_menu" href="">Services</a>
                    </li>
					
					<li class="dropdown" style="display: none;">
					  <a class="tag_menu" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Blogs<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_1" role="menu">
						<li><a href="">Blog</a></li>
						<li><a href="">Blog Detail</a></li>
					  </ul>
                    </li>
					
					<li>
                        <a class="tag_menu" href="">Contact</a>
                    </li>
					<li class="dropdown"><a class="tag_menu" href="#" data-toggle="dropdown"><span class="fa fa-search"></span></a>
							<ul class="dropdown-menu drop_2" style="min-width: 300px;">
								<li>
									<div class="row_1">
										<div class="col-sm-12">
											<form class="navbar-form navbar-left" role="search">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search">
												<span class="input-group-btn">
													<button class="btn btn-primary" type="button">
														Search</button>
												</span>
											</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
				  </li>
					<li class="dropdown">
					  <a class="tag_menu" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-facebook"></i></a>
					  <ul class="dropdown-menu drop_1" role="menu">
						<li>No products in the cart.</li>
					  </ul>
                    </li>
					
					<li class="dropdown">
					  <a class="tag_menu" href="#" data-toggle="dropdown" role="button" aria-expanded="false">More<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_1" role="menu">
						<li><a href="">Home</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">Services</a></li>
						<li><a href="">Contact</a></li>
					  </ul>
                    </li>
					
					
					
                </ul>
				<section id="side_box" style="display: none;">
				
				  <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-list"></i></a>
					<div id="sidebar-wrapper" class="">
					  <ul class="sidebar-nav">
						<a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
						<li class="sidebar-brand">
						  <a href="index.html">Farm House</a>						</li>
					  </ul>
					  <div class="wrap_inner clearfix text-center">
					   <p class="para_1 col"> Lorem ipsum dolor sit amet,  adipiscing elit integer nec odio.</p>
					     <img  src="img/4.jpg" alt="abc" class="iw">
						 <h4 class="head_n">CONTACT INFO</h4>
						 <p class="mgt col">+1 (234) 567 8 90</p>
						 <p class="mgt"><a class="col" href="#">inf0@gmail.com</a></p>
						  <h4 class="head_n">FOLLOW US</h4>
					   <div class="top_right clearfix">
								<p class="mgt">
								 <a href="#"><i class="fa fa-pinterest"></i></a>
								 <a href="#"><i class="fa fa-linkedin"></i></a>
								 <a href="#"><i class="fa fa-dribbble"></i></a>
								 <a href="#"><i class="fa fa-facebook"></i></a>
								 <a href="#"><i class="fa fa-twitter"></i></a>
								</p>
	                   </div>
					   
					  </div>
					  <div class="wrap_inner_2 clearfix">
					    <h3>CONTACT US</h3>
						<input class="form-control" placeholder="Name" type="text">
						<input class="form-control" placeholder="Email" type="text">
						<input class="form-control" placeholder="Phone" type="text">
						<textarea class="form-control form_1" placeholder="Type Text Here"></textarea>
						<h5 class="text-center"><a class="button" href="#">Subscribe</a></h5>
					  </div>
					  
					</div>
		
	          </section>
            </div>
		   </div>
        </div>
 
    </nav>
</section>

</div>
<div class="main_2 clearfix">

<section id="center" class="center_home clearfix">
 <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="2" class=""></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
            <h1>We are <span>Smart</span></h1> 
			<p>We can help you manage your farm</p>       
            <h4><a class="button" href="../pages/register.php">Join us</a><a class="button primary" href="../loginform12553442/login.php">Log in</a></h4>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
            <h1>We are <span>Generous</span></h1> 
			<p>We can help you monitor you income</p>       
            <h4><a class="button" href="../pages/register.php">Join us</a><a class="button primary" href="../loginform12553442/login.php">Log in</a></h4>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
            <h1>We are <span>Amazing</span></h1> 
			<p>We can help you schedule your cropping</p>       
            <h4><a class="button" href="../pages/register.php">Join us</a><a class="button primary" href="../loginform12553442/login.php">Log in</a></h4>
      </div>
    </div>
	
  </div> 
</div>
</section>
</div>

</div>
 
<section id="inform">
 <div class="container">
  <div class="row">
   <div class="inform_1 clearfix">
    <div class="col-sm-6">
	 <div class="inform_1l clearfix">
	  <h1 class="col_1 mgt">Welcome</h1>
	  <h2>Anahaw farmers association</h2>
	  <p>The aims were to promote and strengthen multi-actor partnerships and to contribute positive policy changes to support family farming within the framework of the UN Decade of Family Farming (UNDFF). The regional forum was organized by the Asian Farmers’ Association for Sustainable Rural Development (AFA), the International Land Coalition (ILC), and the People’s Campaign for Agrarian Reform Network (AR Now!).</p>
	  <h5><a class="button" href="#">MORE INFORMATION</a></h5>
	 </div>
	</div>
	<div class="col-sm-6" >
	 <div class="inform_1r clearfix">
	  <div class="inform_1ri clearfix">
	   <img style="margin-left: 20px;" src="img/happyfarmer.jpg" alt="abc" class="iw" height="500">
	  </div>
	  <div class="inform_1ri1 clearfix" style="margin-left: 30px;">
	   <h3 class="col_1 mgt" >Real <br> results<br> virtual<br> farm</h3>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>




<div style="display: none;" class="yro">



<section id="listing">
 <div class="container">
  <div  class="row">
   <div class="col-sm-4">
    <div class="listing_1 clearfix">
	 <h3 class="col_1 mgt">Square Roots</h3>
	 <img src="img/6.jpg" class="iw" alt="abc">
	 <p>Square Roots is an urban farming accelerator that was started with 10 of Freight Farms</p>
	</div>
   </div>
   <div class="col-sm-4">
    <div class="listing_1 listing_1_o clearfix">
	 <h3 class="col_1 mgt">Farm One</h3>
	 <img src="img/7.jpg" class="iw" alt="abc">
	 <p>Square Roots is an urban farming accelerator that was started with 10 of Freight Farms</p>
	</div>
   </div>
   <div class="col-sm-4">
    <div class="listing_1 clearfix">
	 <h3 class="col_1 mgt">Sky Vegetables</h3>
	 <img src="img/8.jpg" class="iw" alt="abc">
	 <p>Square Roots is an urban farming accelerator that was started with 10 of Freight Farms</p>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="environment">
 <div class="container">
  <div class="row">
   <div class="environment_1 text-center clearfix">
    <div class="col-sm-12">
	 <span class="col_1"><i class="fa fa-leaf"></i></span>
	 <h4>Presidential campaigns</h4>
	 <h1>Commitment to the Environment</h1>
	</div>
   </div>
   <div class="environment_2 clearfix">
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/9.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
                        <li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/10.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
						<li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/11.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
						<li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/12.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/13.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
                        <li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/14.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
						<li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/15.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
						<li class="col-sm-3">
    						<div class="program_1i clearfix">
						     <img src="img/16.jpg" alt="abc" class="iw">
							 <div class="environment_2i clearfix">
								 <h5 class="mgt">Guidance on using green</h5>
								 <h4 class="col_1">Health Benefits of a Raw Food</h4>
								 <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
							 </div>
	                       </div>
                        </li>
                    </ul>
              </div><!-- /Slide2 --> 
            <!-- /Slide3 --> 
        </div>
        
       
	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li></ul>
	   <!-- /.control-box -->   
                              
    </nav></div>
   </div>
  </div>
 </div>
</section>

<section id="number">
 <div class="container">
  <div class="row">
   <div class="col-sm-4">
    <div class="number_1 text-center clearfix">
	 <h1 class="mgt col_1">30,000</h1>
	 <p>Children connected to nature</p>
	 <span><i class="fa fa-tree"></i></span>
	</div>
   </div>
   <div class="col-sm-4">
    <div class="number_1 text-center clearfix">
	 <h1 class="mgt col_1">3788</h1>
	 <p>Unique species on our nature reserves</p>
	 <span><i class="fa fa-tree"></i></span>
	</div>
   </div>
   <div class="col-sm-4">
    <div class="number_1 text-center clearfix">
	 <h1 class="mgt col_1">14,700</h1>
	 <p>Acres of meadow created or restored</p>
	 <span><i class="fa fa-tree"></i></span>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="serv_home">
 <div class="container">
  <div class="row">
   <div class="col-sm-6">
    <div class="serv_home_1 clearfix">
	 <h4 class="mgt">WHAT WE DO</h4>
	 <h1 class="col_1">Our Services</h1>
	 <div class="serv_home_1i clearfix">
	  <div class="col-sm-2 space_left">
	   <div class="serv_home_1il clearfix">
	    <span><i class="fa fa-apple"></i></span>
	   </div>
	  </div>
	  <div class="col-sm-10">
	   <div class="serv_home_1ir clearfix">
	    <h3 class="mgt">Organic Fertiliser</h3>
		<p>vegetables from FreshDirect. Our farms deliver to us daily, ensuring you only eat the best of what's in season</p>
	   </div>
	  </div>
	 </div>
	 <div class="serv_home_1i clearfix">
	  <div class="col-sm-2 space_left">
	   <div class="serv_home_1il clearfix">
	    <span><i class="fa fa-cart-arrow-down"></i></span>
	   </div>
	  </div>
	  <div class="col-sm-10">
	   <div class="serv_home_1ir clearfix">
	    <h3 class="mgt">Farm Mechanization</h3>
		<p>vegetables from FreshDirect. Our farms deliver to us daily, ensuring you only eat the best of what's in season</p>
	   </div>
	  </div>
	 </div>
	 <div class="serv_home_1i clearfix">
	  <div class="col-sm-2 space_left">
	   <div class="serv_home_1il clearfix">
	    <span><i class="fa fa-leaf"></i></span>
	   </div>
	  </div>
	  <div class="col-sm-10">
	   <div class="serv_home_1ir clearfix">
	    <h3 class="mgt">Water Management</h3>
		<p>vegetables from FreshDirect. Our farms deliver to us daily, ensuring you only eat the best of what's in season</p>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
   <div class="col-sm-6">
    <div class="serv_home_2 clearfix"></div>
   </div>
  </div>
 </div>
</section>

<section id="special">
 <div class="container">
  <div class="row">
   <div class="environment_1 text-center clearfix">
    <div class="col-sm-12">
	 <span class="col_1"><i class="fa fa-leaf"></i></span>
	 <h4>Discover nature</h4>
	 <h1>We have expertise in these areas</h1>
	</div>
   </div>
   <div class="special_1 clearfix">
    <div class="col-sm-8">
      <div class="special_1l clearfix">
	   <img src="img/18.jpg" class="iw" alt="abc">
	  </div>
	</div>
	<div class="col-sm-4">
      <div class="special_1r clearfix">
	   <h2 class="col_1 mgt">Sustainability and Climate Change</h2>
	   <p>Our agricultural background means we’re equally at home meeting face-to-face with farmers as we are engaging.</p>
	   <h4><a class="button" href="#">Learn More</a></h4>
	  </div>
	</div>
   </div>
   <div class="special_1 clearfix">
	<div class="col-sm-4">
      <div class="special_1r clearfix">
	   <h2 class="col_1 mgt">Advice and farm implement</h2>
	   <p>Our agricultural background means we’re equally at home meeting face-to-face with farmers as we are engaging.</p>
	   <h4><a class="button" href="#">Learn More</a></h4>
	  </div>
	</div>
	<div class="col-sm-8">
      <div class="special_1l clearfix">
	   <img src="img/19.jpg" class="iw" alt="abc">
	  </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="center_2" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 text-center clearfix">
	 <h1 class="mgt">Why we're different</h1>
	</div>
   <div class="col-sm-12">
	<div class=" center_1_main clearfix">
	 <div class="col-sm-4 center_1_left clearfix">
	  <div class="center_1_left_inner clearfix">
	   <h6 class="mgt"><i class="fa fa-tree"></i></h6>
	   <h4><a href="#">Litora Torquent Conubia</a></h4>
	   <h5>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu.</h5>
	  </div>
	 </div>
	 <div class="col-sm-4 center_1_left clearfix">
	  <div class="center_1_left_inner clearfix">
	   <h6 class="mgt"><i class="fa fa-hand-scissors-o"></i></h6>
	   <h4><a href="#">Litora Augue</a></h4>
	   <h5>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu.</h5>
	  </div>
	 </div>
	 <div class="col-sm-4 center_1_left clearfix">
	  <div class="center_1_left_inner clearfix">
	   <h6 class="mgt"><i class="fa fa-leaf"></i></h6>
	   <h4><a href="#">Litora Sagittis</a></h4>
	    <h5>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu.</h5>
	  </div>
	 </div>
	</div>
	<div class=" center_1_main clearfix">
	 <div class="col-sm-4 center_1_left clearfix">
	  <div class="center_1_left_inner clearfix">
	   <h6 class="mgt"><i class="fa fa-recycle"></i></h6>
	   <h4><a href="#">Litora Torquent Conubia</a></h4>
	   <h5>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu.</h5>
	  </div>
	 </div>
	 <div class="col-sm-4 center_1_left clearfix">
	  <div class="center_1_left_inner clearfix">
	   <h6 class="mgt"><i class="fa fa-magic"></i></h6>
	   <h4><a href="#">Litora Augue</a></h4>
	   <h5>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu.</h5>
	  </div>
	 </div>
	 <div class="col-sm-4 center_1_left clearfix">
	  <div class="center_1_left_inner clearfix">
	   <h6 class="mgt"><i class="fa fa-life-ring"></i></h6>
	   <h4><a href="#">Litora Sagittis</a></h4>
	   <h5>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu.</h5>
	  </div>
	 </div>
	</div>
   </div>
   </div>
  </div>
</section>

<section id="news_home">
 <div class="container">
  <div class="row">
   <div class="environment_1 text-center clearfix">
    <div class="col-sm-12">
	 <span class="col_1"><i class="fa fa-leaf"></i></span>
	 <h4>Source of our food</h4>
	 <h1>Agricultural communities News</h1>
	</div>
   </div>
   <div class="news_home_1 clearfix">
     <div class="col-sm-4">
		<div class="news_home_1i clearfix">
		  <img src="img/20.jpg" class="iw" alt="abc">
		  <div class="news_home_1ii clearfix"><h6 class="mgt">Dec 16, 2019</h6></div>
		  <h3>Farming, Food and You</h3>
		  <p>The Consumer Hub provides a forum for consumers to share ideas, questions, and concerns about agriculture.</p>
		  <h5><a class="button" href="#">Join the conversation</a></h5>
		</div>
   </div>
     <div class="col-sm-4">
		<div class="news_home_1i clearfix">
		  <img src="img/21.jpg" class="iw" alt="abc">
		  <div class="news_home_1ii clearfix"><h6 class="mgt">Dec 16, 2019</h6></div>
		  <h3>You Follow the Food?</h3>
		  <p>The Consumer Hub provides a forum for consumers to share ideas, questions, and concerns about agriculture.</p>
		  <h5><a class="button" href="#">Join the conversation</a></h5>
		</div>
   </div>
     <div class="col-sm-4">
		<div class="news_home_1i clearfix">
		  <img src="img/22.jpg" class="iw" alt="abc">
		  <div class="news_home_1ii clearfix"><h6 class="mgt">Dec 16, 2019</h6></div>
		  <h3>Making Life Easier</h3>
		  <p>The Consumer Hub provides a forum for consumers to share ideas, questions, and concerns about agriculture.</p>
		  <h5><a class="button" href="#">Join the conversation</a></h5>
		</div>
   </div>
   </div>
  </div>
 </div>
</section>

<div class="main_last cleafix">
 <div class="main_last_1 clearfix">
   <section id="testimonial">
 <div class="container">
  <div class="row">
   <div class="testim_1 clearfix">
    <div class="col-sm-5">
	 <div class="testim_1l text-center clearfix">
	   <h1 class="mgt col_1">55</h1>
	   <p class="mgt">Years of experience for<br>
agriculture industry</p>
	 </div>
	</div>
	<div class="col-sm-7">
	 <div class="testim_1r clearfix">
	   <p class="mgt col">Despite slightly declining beef consumption rates in this country, beef is still what’s for dinner in many American households.</p>
	   <img src="img/23.jpg" alt="abc">
	   <h3 class="mgt col_2">Semper Porta</h3>
	   <h5 class="col">— The FoodPrint of Beef</h5>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
 </div>
 <div class="main_last_2 clearfix">
   <section id="center_last" class="center_home clearfix">
 <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel_1">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel_1" data-slide-to="0" class=""></li>
    <li data-target="#bs-carousel_1" data-slide-to="1" class=""></li>
    <li data-target="#bs-carousel_1" data-slide-to="2" class=""></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides next left">
      <div class="slide-1"></div>
      <div class="hero">
            <h1>We are <span>creative</span></h1> 
			<p>Get start your next awesome project</p>       
            <h4><a class="button" href="#">See all features</a></h4>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
            <h1>We are <span>smart</span></h1> 
			<p>Get start your next awesome project</p>       
            <h4><a class="button" href="#">See all features</a></h4>
      </div>
    </div>
    <div class="item slides active left">
      <div class="slide-3"></div>
      <div class="hero">        
            <h1>We are <span>amazing</span></h1> 
			<p>Get start your next awesome project</p>       
            <h4><a class="button" href="#">See all features</a></h4>
      </div>
    </div>
  </div> 
</div>
</section>
 </div>
</div>

<section id="process">
 <div class="container">
  <div class="row">
   <div class="environment_1 text-center clearfix">
    <div class="col-sm-12">
	 <span class="col_1"><i class="fa fa-leaf"></i></span>
	 <h4>Our Process</h4>
	 <h1>Agricultural communities News</h1>
	</div>
   </div>
   <div class="process_2 clearfix">
    <div class="col-sm-4">
	 <div class="process_2_m clearfix">
	  <div class="process_2_mi clearfix">
	   <h3 class="mgt">Client Discussion</h3>
	   <p>We develop and refine the design, capturing the look, feel and details by creating digital.</p>
	  </div>
	  <div class="process_2_mi1 clearfix">
	   <h4 class="mgt">01</h4>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="process_2_m clearfix">
	  <div class="process_2_mi clearfix">
	   <h3 class="mgt">Strategy</h3>
	   <p>We develop and refine the design, capturing the look, feel and details by creating digital.</p>
	  </div>
	  <div class="process_2_mi1 clearfix">
	   <h4 class="mgt">02</h4>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="process_2_m clearfix">
	  <div class="process_2_mi clearfix">
	   <h3 class="mgt">Core Concept</h3>
	   <p>We develop and refine the design, capturing the look, feel and details by creating digital.</p>
	  </div>
	  <div class="process_2_mi1 clearfix">
	   <h4 class="mgt">03</h4>
	  </div>
	 </div>
	</div>
   </div>
   <div class="process_2 clearfix">
    <div class="col-sm-4">
	 <div class="process_2_m clearfix">
	  <div class="process_2_mi clearfix">
	   <h3 class="mgt">Technical Terms</h3>
	   <p>We develop and refine the design, capturing the look, feel and details by creating digital.</p>
	  </div>
	  <div class="process_2_mi1 clearfix">
	   <h4 class="mgt">04</h4>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="process_2_m clearfix">
	  <div class="process_2_mi clearfix">
	   <h3 class="mgt">Execution</h3>
	   <p>We develop and refine the design, capturing the look, feel and details by creating digital.</p>
	  </div>
	  <div class="process_2_mi1 clearfix">
	   <h4 class="mgt">05</h4>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="process_2_m clearfix">
	  <div class="process_2_mi clearfix">
	   <h3 class="mgt">Follow Up</h3>
	   <p>We develop and refine the design, capturing the look, feel and details by creating digital.</p>
	  </div>
	  <div class="process_2_mi1 clearfix">
	   <h4 class="mgt">06</h4>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="footer">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
    <div class="col-sm-3">
	 <div class="footer_1l clearfix">
	   <a class="navbar-brand" href="index.html"><i class="fa fa-leaf"></i> Farm House</a>
	   <p class="col">Wild flowers , plants and fungi are the life support for all our wildlife and their colour and character</p>
	 </div>
	</div>
	<div class="col-sm-9">
	 <div class="footer_1r clearfix">
       <h4 class="mgt col">OUR NEWSLETTER!</h4>
	   <div class="input-group">
		<input type="text" class="form-control" placeholder="Email address">
		<span class="input-group-btn">
			<button class="btn btn-primary" type="button">
				SUBSCRIBE</button>
		</span>
	    </div>
	 </div>
	</div>
   </div> 
   <div class="footer_2 clearfix">
    <div class="col-sm-4">
	 <div class="footer_2i clearfix">
	  <h4 class="col mgt">WILD PLANTS</h4>
	  <ul>
	   <li>Discover Wild Plants</li>
	   <li>Discover Wild Plants</li>
	   <li>Discover Wild Plants</li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="footer_2i clearfix">
	  <h4 class="col mgt">NATURE REZERVES</h4>
	  <ul>
	   <li>Ranscombe Farm</li>
	   <li>Munsary Peatlands</li>
	   <li>Cae Blaen-dyffryn</li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="footer_2i clearfix">
	  <h4 class="col mgt">CONTACT INFO</h4>
	  <ul>
	   <li>+1 (234) 567 8 90</li>
	   <li>info@gmail.com</li>
	  </ul>
	 </div>
	</div>
   </div>
   <div class="footer_3 text-center clearfix">
     <p class="mgt col">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_2" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
   </div>
  </div>
 </div>
</section>


</div>

<script>
	  $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
	</script>
</body>
 
</html>


<style type="text/css">
	.primary{
		background-color: #7ea5f1;
	}
	.button{
		margin-left: 5px;
		margin-right: 5px;
	}
</style>

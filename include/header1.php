<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
		<div class="container">
		<div class="row">
		<div class="col-sm-6">
		<div class="contactinfo">
   <ul class="nav nav-pills">
   <li><a href="#"><i class="fa fa-phone"></i> +91 987654321
   </a></li>
   <li><a href="#"><i class="fa fa-envelope"></i>mobicity289@gmail.com
   </a></li>
   </ul>
   </div></div>
		<div class="col-sm-6">
		<div class="social-icons pull-right">
   <ul class="nav navbar-nav">
   <li><a href="https://www.facebook.com/Mobicity-232313100673207/"><i class="fa fa-facebook"></i></a></li>
   <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
   <li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
   <li><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
						</ul>
			</div></div>
			</div></div>
		    </div><!--/header_top-->
		
	<div class="header-middle"><!--header-middle-->
	<div class="container">
	<div class="row">
	<div class="col-sm-4">
	<div class="logo pull-left">
<a href="index.html">
<img src="images/logo.png"  style="width:100px"alt=""></a>
	</div>
	</div>
		<div class="col-sm-8">
		
		<div class="mainmenu pull-right">
	
	<ul class="nav navbar-nav collapse navbar-collapse">
	<li class="dropdown"><a href="#"><span class="fa fa-user"></span><?php echo " Hi, ".$_SESSION["name"]; ?><i class="fa fa-angle-down">
    </i></a>
	<ul role="menu" class="sub-menu">
	
						
						<li><a href="cart.php" style="text-decoration:none; color:white;">Cart</a></li>
						<li class="divider"></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="color:white;">Logout</a></li>
					</ul>
	</li>
	
	
	<li><a href="customer_registration.php"><i class="fa fa-user"></i> Register</a></li>
<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> cart</a></li> 
					
				</li>
	</ul>
			</div></div>
			</div></div>
		    </div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
		<div class="container">
		<div class="row">
		<div class="col-sm-9">
		<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
   <span class="sr-only">Toggle navigation</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
		</div>
	    <div class="mainmenu pull-left">
	<ul class="nav navbar-nav collapse navbar-collapse">
	<li><a href="index.php">Home</a></li>
<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down">
    </i></a>
    <ul role="menu" class="sub-menu"> 
	<li><a href="cart.php">Cart</a></li> 
	<li><a href="login_form.php">Login</a></li> 
    </ul>
    </li> 
	<li><a href="contact.php">Contact</a></li>
	</ul>
	</div></div>
	<div class="col-sm-3">
	<div class="search_box pull-right">
	
    <form action="search.php" method="post">
	<input type="text" style="width:130px; color:#000" name="search_text" placeholder="Search">
	<button type="submit" name="submit" value="submit"><i class="fa fa-search"></i></button>
<form>
        
		</div></div>
		</div></div>
		</div><!--/header-bottom-->
	</header><!--/header-->
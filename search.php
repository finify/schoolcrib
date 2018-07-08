<!-- FINIFY COPYRIGHT   -->
<!DOCTYPE HTML>
<html>
<head>
	<!--meta data and tittle     -->
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/headlogo.png">
	<link rel="shortcut icon" type="images/x-icon" href="images/headlogo.ico">
	<link rel="icon" type="image/png" size="96x96" href="images/headlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>
	Skulcrib-Signup
    </title>
	<!--meta data and tittle     -->

	<!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!--  jquerry-ui core CSS    -->
    <link href="css/jquery-ui.custom.css" rel="stylesheet"/>
    <!--  jquerry-ui core CSS    -->
    <link href="css/jquery-ui.css" rel="stylesheet"/>
    
	<!--  Fonts and icons     -->
    <link href="css/themify-icons.css" rel="stylesheet">
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="css/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- PAGE Core CSS     -->
    <link href="css/skulcribcss/menu.css" rel="stylesheet" />
    <link href="css/skulcribcss/search.css" rel="stylesheet" />
	
	<script>
	<!--menu slide jquerry-->
	function display(){
	$("#menu").slideToggle();
	}

	</script>
</head>

<body>
	<header>
		<img src="images/logo.png" id="headerimg"/>
		<img src="images/menu.png" onclick="display()" id="menubutton"/>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="signup">Register</a></li>
			<li><a href="login">Login</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</header>
	<div id="menu-space">
	</div>
	<div class="bigwelcome">
		
		<center>
		<select id="selectinput" >
		<option value="A">SORT BY ROOM</option>
		<option value="B">SINGLE ROOM</option>
		<option value="C">SELF CON</option>
		</select>

		<select id="selectinput" >
		<option value="A">DISTANCE FROM SCHOOL</option>
		<option value="B">INSIDE THE SCHOOL</option>
		<option value="C">CLOSE TO SCHOOL</option>
		<option value="C">FAR FROM SCHOOL</option>
		</select>

		<select id="selectinput" >
		<option value="A">PRICE</option>
		<option value="B">20K - 50K</option>
		<option value="C">50K - 100K</option>
		<option value="C">100K - 150K</option>
		<option value="C">150K - 200K</option>
		</select>
		</center>
		<center><button>Refine search <span class="ti-search"></span></button>
		</center>
		
	</div>
	<div id="body_container">
		<!-- main lodge display-->
		<div id="body_left">
			<div id="left_header">
				Nnamdi Azikiwe university awka
				<b>Lodges in store 
				<span class="ti-angle-double-right"></span>
				100
				</b>
			</div>
			<div class="lodges"> 
				<div id="lodge_img">
				<img src="images/lodge1.jpg" width="100%" height="100%"/>
				<span class="label label-danger">Rooms not available 
					now</span>
				<span class="label label-info">Rooms available</span>
				</div>
				<div id="lodge_info">
					<div class="info_panels">
						EXECUTIVE LODGE
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/location.png" width="14px" height="14px"/>
						UNIZIK	
						</div>
						<div id="panel_right">
						<img src="images/money.png" width="20px" height="20px"/>
						&#8358 100,000
						</div>
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/view.png" width="20px" height="20px"/>
						-200
						</div>
						<div id="panel_right">
						<img src="images/bed.png" width="20px" height="20px"/> self-con
						</div>
					</div>
					<Button>view details  <span class="ti-control-forward"></span> </Button>
				</div>
			</div>
			<div class="lodges"> 
				<div id="lodge_img">
				<img src="images/lodge2.jpeg" width="100%" height="100%"/>
				<span class="label label-danger">Rooms not available 
					now</span>
				<span class="label label-info">Rooms available</span>
				</div>
				<div id="lodge_info">
					<div class="info_panels">
						<img src="images/home.png" width="15px" height="15px"/>
						EXECUTIVE LODGE
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/location.png" width="15px" height="15px"/>
						UNIZIK
						</div>
						<div id="panel_right">
						<img src="images/money.png" width="20px" height="20px"/>
						&#8358 100,000
						</div>
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/view.png" width="20px" height="20px"/>
						-200
						</div>
						<div id="panel_right">
						<img src="images/bed.png" width="20px" height="20px"/>
						-self-con
						</div>
					</div>
					<Button>view details  <span class="ti-control-forward"></span> </Button>
				</div>
			</div>
			<div class="lodges"> 
				<div id="lodge_img">
				<img src="images/lodge3.jpeg" width="100%" height="100%"/>
				<span class="label label-danger">Rooms not available 
					now</span>
				<span class="label label-info">Rooms available</span>
				</div>
				<div id="lodge_info">
					<div class="info_panels">
						EXECUTIVE LODGE
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/location.png" width="15px" height="15px"/>
						UNIZIK
						</div>
						<div id="panel_right">
						<img src="images/money.png" width="20px" height="20px"/>
						&#8358 100,000
						</div>
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/view.png" width="20px" height="20px"/>
						-200
						</div>
						<div id="panel_right">
						<img src="images/bed.png" width="20px" height="20px"/>
						-self-con
						</div>
					</div>
					<Button>view details  <span class="ti-control-forward"></span> </Button>
				</div>
			</div>
			<div class="lodges"> 
				<div id="lodge_img">
				<img src="images/lodge4.jpeg" width="100%" height="100%"/>
				<span class="label label-danger">Rooms not available 
					now</span>
				<span class="label label-info">Rooms available</span>
				</div>
				<div id="lodge_info">
					<div class="info_panels">
						EXECUTIVE LODGE
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/location.png" width="15px" height="15px"/>
						UNIZIK
						</div>
						<div id="panel_right">
						<img src="images/money.png" width="20px" height="20px"/>
						&#8358 100,000
						</div>
					</div>
					<div class="info_panels">
						<div id="panel_left">
						<img src="images/view.png" width="20px" height="20px"/>
						-200
						</div>
						<div id="panel_right">
						<img src="images/bed.png" width="20px" height="20px"/>
						-self-con
						</div>
					</div>
					<Button>view details  <span class="ti-control-forward"></span> </Button>
				</div>
			</div>
			
		</div>
		<!-- main lodge display-->

		<!--body right-->
		<div id="body_right">
			<div id="featured">
				<div id="featured_header">
					Top Ranked lodges at unizik
				</div>
				<div id="featured_lodges">
					<div id="featured_lodge_img">
						<img src="images/house4.jpg" width="100%" height="100%"/>
					</div>
					<div id="featured_lodge_info">
						<div class="featured_info_panels">
						<img src="images/home.png" width="18px" height="18px"/>
							JOSSY LODGE
						</div>
						<div class="featured_info_panels">
							<div id="panel_left">
							<img src="images/location.png" width="20px" height="20px"/>
								UNIZIK
							</div>
							<div id="panel_right">
							<img src="images/money.png" width="20px" height="20px"/>
							&#8358 80,000
							</div>
						</div>
						<div class="featured_info_panels">
							<div id="panel_left">
							<img src="images/view.png" width="20px" height="20px"/>
							20
							</div>
							<div id="panel_right">
							<img src="images/bed.png" width="20px" height="20px"/>
							selfcon
							</div>
						</div>
					</div>
				</div>
				<div id="featured_lodges">
					<div id="featured_lodge_img">
						<img src="images/house4.jpg" width="100%" height="100%"/>
					</div>
					<div id="featured_lodge_info">
						<div class="featured_info_panels">
							<img src="images/home.png" width="18px" height="18px"/>
							JOSSY LODGE
						</div>
						<div class="featured_info_panels">
							<div id="panel_left">
								<img src="images/location.png" width="20px" height="20px"/>
								UNIZIK
								</div>
							<div id="panel_right">
								<img src="images/money.png" width="20px" height="20px"/>
								&#8358 80,000
							</div>
						</div>
						<div class="featured_info_panels">
							<div id="panel_left">
								<img src="images/view.png" width="20px" height="20px"/>
								20
							</div>
							<div id="panel_right">
								<img src="images/bed.png" width="20px" height="20px"/>
								selfcon
							</div>
						</div>
					</div>
				</div>
				<div id="featured_lodges">
					<div id="featured_lodge_img">
						<img src="images/house8.jpg" width="100%" height="100%"/>
					</div>
					<div id="featured_lodge_info">
						<div class="featured_info_panels">
							<img src="images/home.png" width="18px" height="18px"/>
							EXECUTIVE LODGE
						</div>
						<div class="featured_info_panels">
							<div id="panel_left">
								<img src="images/location.png" width="20px" height="20px"/>
								UNIZIK
								</div>
							<div id="panel_right">
								<img src="images/money.png" width="20px" height="20px"/>
								&#8358 80,000
							</div>
						</div>
						<div class="featured_info_panels">
							<div id="panel_left">
								<img src="images/view.png" width="20px" height="20px"/>
								20
							</div>
							<div id="panel_right">
								<img src="images/bed.png" width="20px" height="20px"/>
								selfcon
							</div>
						</div>
					</div>
				</div>
				

			</div>
			<!-- START RENTING SECTION-->
			<div id="start_renting">
				<center><b>Are you a lodge agent and you want to display your lodges?</b></center>
				<center><b1>Let us get you your next student tenant here at schoolcrib.ng</b1></center>
				<center><button>Start Listing Now <span class="ti-control-forward"></span> </button></center>
			</div>
		</div>
	</div>

	<div id='let_theway'>

	
	</div>

	<footer>Copyright © Schoolcrib.com
	<div style="float:right">
	2017
	</div>
	</footer>

	
</body>
	



</html>
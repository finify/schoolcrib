<!-- FINIFY COPYRIGHT   -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/headlogo.png">
	<link rel="shortcut icon" type="images/x-icon" href="images/headlogo.ico">
	<link rel="icon" type="image/png" size="96x96" href="images/headlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>
	Skulcrib
    </title>
	<!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!--  jquerry-ui core CSS    -->
    <link href="css/jquery-ui.custom.css" rel="stylesheet"/>
    <!--  jquerry-ui core CSS    -->
    <link href="css/jquery-ui.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
	
	


    <!--  Fonts and icons     -->
    <link href="css/themify-icons.css" rel="stylesheet">
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="css/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- PAGE Core CSS     -->
    <link href="css/skulcribcss/index.css" rel="stylesheet" />
    <link href="css/skulcribcss/menu.css" rel="stylesheet" />
	
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
			<li><a href="#">Home</a></li>
			<li><a href="signup">Register</a></li>
			<li><a href="login">Login</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</header>
	<div class="bigwelcome">
		<center><p>One stop shop for your campus accomodation<br>
		<b>Schoolcrib.com help students all over nigeria get best campus accomodation listings</b>
		</p></center>
		
		<a href="login" id="button1">Login</a>
		<a href="#" id="button2">Register</a>
	</div>
	<div class="search">
		<p1>SEARCH LODGE</p1>
		<div id="search_con">
			<div id="search_left">
			<select id="selectinput" >
				<option value="A">UNIVERSITY</option>
				<option value="B">POLYTECHNIC</option>
				<option value="C">COLLEAGUE OF EDUCATION</option>
				<option value="C">PET INSTITUTE</option>
			</select>
			</div>
			<div id="search_right" >
			<select id="selectinput" >
				<option value="A">NNAMDI AZIKIWE UNIVERSITY</option>
				<option value="B">UNIVERSITY OF NIGERIA</option>
				<option value="C">UNIVERSITY OF PORTHARCORT</option>
			</select>
			</div>
			<center><button>search</button></center>
		</div>
	</div>
	<!-- ABOUT US SECTION-->
	<div class="aboutus">
		
		<div id="about_con"><center><p1>What do we really do at schoolcrib.ng</p1></center>
			<div id="about_section">
				<img src="images/studenticon.png" alt="students accomodation finder"/>
				<div id="about_right">
				<b>Best accomodation booking</b> 
				<b1>Schoolcrib.ng helps students all over nigerian tetiary institution find vast range of accomodations and book them online</b1>
				<a href="login.php"><button >Student signup now <span class="ti-key"></span> </button>
				</a>
				</div>
			</div>
			<div id="about_section" >
				<img src="images/agenticon.png" alt="Become a lodge agent"/>
				<div id="about_right">
				<b>Get student Tenant Fast</b> 
				<b1>Schoolcrib.ng helps Lodge Agents and owners connect with potential student tenant quickly and easyly and get to manage students in there properties
				<button>Agent Signup now  <span class="ti-rocket"></span> </button>
				</div>
			</div>
		</div>
	</div>

	<!-- START LEARNING ABOUT SECTION-->
	<div id="start_renting">
		<center><b>Are you a lodge agent and you want to display your lodges?</b></center>
		<center><b1>Let us get you your next student tenant here at schoolcrib.ng</b1></center>
		<center><button>Start Listing Now <span class="ti-control-forward"></span> </button></center>
	</div>
	<!-- WHY YOU SHOULD CHOOSE US PAGE-->
	<div class="whyus">
		<div id="whyus_con">
			<center><p1>Why Students All Over Nigeria higher institution Choose us</p1></center>
			<div id="whyus_section">
				<div id="whyus_card">
					<center><span class="ti-gift"></span></center>
					<center><b>Zero money for booking</b></center>
					<center><b1>Book campus accomodation without paying agent fees in Schoolcrib.ng </b1></center>
				</div>
			</div>
			<div id="whyus_section">
				<div id="whyus_card">
					<center><span class="ti-view-list-alt"></span></center>
					<center><b>Get best Listing</b></center>
					<center><b1>Get a wide range of accomodation selection all over nigerian university</b1></center>
			
				</div>
			</div>
			<div id="whyus_section">
				<div id="whyus_card">
					<center><span class="ti-headphone-alt"></span></center>
					<center><b>24/7 Support</b></center>
					<center><b1>We are always online on our mobile to answer any question you might have </b1></center>
				</div>
			</div>
			
		</div>
	</div>
	
<footer>
Copyright © Schoolcrib.com
<div style="float:right">
2017
</div>
</footer>



</body>
</html>
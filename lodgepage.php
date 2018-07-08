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
    <link href="css/skulcribcss/lodgepage.css" rel="stylesheet" />
	
	<script>
	<!--menu slide jquerry-->
	function display(){
	$("#menu").slideToggle();
	}
	
	<!--tab slide jquerry-->
	function tab1(){
		$("#tab1").slideToggle();
		$(".tablinks:nth-child(1)").css("background-color","#ddd");
		$("#tab2").css("display","none");
		$(".tablinks:nth-child(2)").css("background-color","#f1f1f1");
	}
	function tab2(){
		$("#tab2").slideToggle();
		$(".tablinks:nth-child(2)").css("background-color","#ddd");
		$("#tab1").css("display","none");
		$(".tablinks:nth-child(1)").css("background-color","#f1f1f1");
	}
	
	</script>

	
</head>

<body>
	<header>
		<a href="index.php"><img src="images/logo.png" id="headerimg"/></a>
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
	
	<div id="body_container" >
		<!-- main lodge display-->
		<div id="body_left">
			<div id="left_header">
				<span class="ti-home"></span>
				EXECUTIVE LODGE
				<b>
				<span class="ti-eye"></span>["images/lodge2.jpeg", "images/lodge3.jpeg"]
				100
				</b>
			</div>
			<div id="picslide">
				<div class="slideshow-container">
					<img class="slides" src="images/lodge1.jpg" width="100%"/>
					<img class="slides"  src= width="100%"/>
					<img class="slides" src= width="100%"/>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
					
				</div>
			</div>	
			<div id="lodgebasic_info">
				<div id="info_left"> 
					<div id="left_layer1">
						&#8358 80,000 
						<span class="label label-danger">Yearly rent</span>
						<span class="label label-success">Available</span>
					</div>
					<div id="left_layer2">
						<div id="social_fb">
							<span class="ti-facebook"></span>
							Share on Facebook
						</div>
						<div id="social_tw">
							<span class="ti-twitter"></span>
							Share on Twitter
						</div>
					</div>
				</div>
				<div id="info_right"> 
					<div id="icon">
						<img src="images/agenticon1.png" width="100%" height="100%"/>
					</div>
					<div id="agent_info">
						<div id="agent_name">
							Agent name:The experience
						</div>
						<div id="agent_contact">
							<button id="contact">Contact <span class="ti-headphone-alt"></span></button>
							<button>Save for later <span class="ti-cloud-down"></span></button>
							
						</div>
					</div>
				</div>
			</div>
			<br/>

			
			<div id="tabcon" >
				<!--tab clickables-->
				<div class="tab">
					<button class="tablinks" onclick="tab1()">
					About Lodge
					</button>
					<button class="tablinks" onclick="tab2()">
					Reviews <span class="label label-danger">12</span>
					</button>
				</div>
				<!--tab content-->
				<div id="tab1" class="tabcontent">
					<div id="about_section">
						<div id="section_header">
							Basic Info
						</div>
						<div id="section_body">
							<b>Description</b> <br>
							<b1>dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</b1>
							<br>
							<br>

							<b>Roomtype and cost</b> <br>
							<b1><img src="images/bed.png" width="20px" height="20px"/> selfcon</b1><br>
							<b1><img src="images/money.png" width="20px" height="20px"/> &#8358 80,000</b1>
							<br>
							<br>

							<b>Proximity and cost of transport to School</b> <br>
							<b1><span class="ti-car"></span> Veryclose</b1><br>
							<b1><img src="images/money.png" width="20px" height="20px"/> &#8358 50</b1>
						</div>
					</div>
					<div id="about_section">
						<div id="section_header">
							Amenities
						</div>
						<div id="section_body">
							<div id="multi">
								<b1><span class="ti-check-box"></span> water system toilet</b1><br>
								
								<b1> <span class="ti-check-box"></span> wardrobe</b1>		<br>			
								<b1><span class="ti-check-box"></span> borehole water</b1>  <br>	

								<b1><span class="ti-check-box"></span> tiled</b1><br>

								<b1><span class="ti-check-box"></span> Lodge generator</b1><br>  	

								<b1><span class="ti-check-box"></span> Balcony</b1><br>

								<b1><span class="ti-check-box"></span> Lodge generator</b1><br>

								<b1><span class="ti-check-box"></span> security</b1><br>

								<b1><span class="ti-check-box"></span> Lodge generator</b1><br>
							
							</div>
							
							
							
							
						</div>
					</div>
				</div>
				<div id="tab2" class="tabcontent">
					<div id="review_con">
						<div id="review_pic">
							<img src="images/agenticon1.png" width="100%" height="100%"/>
						</div>
						<div id="review_content">
							<div id="review_detail">
								<b>Ifeanyichukwu ernest izuegbu</b>
								<b1>16th may 2018</b2>
							</div>
							<div id="review_text">
							dolor sit amet, consectetuer adipiscing elit, sed diam
							dolor sit amet, consectetuer adipiscing elit, sed diam 
							dolor sit amet, consectetuer adipiscing elit, sed diam 
							dolor sit amet, consectetuer adipiscing elit, sed diam  
							</div>
						</div>
					
					</div>

					<div id="review_con">
						<div id="review_pic">
							<img src="images/agenticon1.png" width="100%" height="100%"/>
						</div>
						<div id="review_content">
							<div id="review_detail">
								<b>Ifeanyichukwu ernest izuegbu</b>
								<b1>16th may 2018</b2>
							</div>
							<div id="review_text">
							dolor sit amet, consectetuer adipiscing elit, sed diam 
							</div>
						</div>
					
					</div>

					

					<div id="review_con">
						<div id="review_pic">
							<img src="images/agenticon1.png" width="100%" height="100%"/>
						</div>
						<div id="review_content">
							<div id="review_detail">
								<b>Ifeanyichukwu ernest izuegbu</b>
								<b1>16th may 2018</b2>
							</div>
							<div id="review_text">
							dolor sit amet, consectetuer adipiscing elit, sed diam 
							</div>
						</div>
					
					</div>
					<div id="review_form">
						<center><b>Review Lodge</b></center>
						<div id="name_upload">
							<div id="left">
							NAME
							</div>
							<div id="right">
							UPLOAD IMAGE
							</div>
						</div>
						<input type="text" id="review_name" placeholder="enter your name" name="reviewerName"/>
						<input type="file" id="review_img" placeholder="upload image" name="reviewerPic"/>
						<textarea placeholder="enter your review"rows="2" width="100%" id="review" >Enter review here </textarea>
						<center>button>Send Review<span class="ti-rocket"></span></button>
						</center>
					</div>

				</div>
			</div>

						
			
			
			
		</div><!-- main lodge display-->
		

		<!--body right-->
		<div id="body_right">
			<div id="featured">
				<div id="featured_header">
					Lodges Related
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

	<footer>Copyright © Schoolcrib.com
	<div style="float:right">
	2017
	</div>
	</footer>


<!-- MODAL CONTAINER START-->
<div id="myModal" class="modal">
	<div class="modal-content">
		<div id="modal_header">
			Fill form to contact agent
			<span class="close">&times</span>
		</div>
		<div id="modal_body">
			<div class="row">
				<div class="col-md-6">
                 	<div class="form-group">
                    	<label>Name*</label>
                    	<input type="text" class="form-control border-input"  placeholder="Name" >
                	</div>
				</div>
				<div class="col-md-6">
                 	<div class="form-group">
                    	<label>Phone*</label>
                    	<input type="number" class="form-control border-input"  placeholder="Phone number" >
                	</div>
            	</div>
			</div>
			<div class="row">
				<div class="col-md-6">
                 	<div class="form-group">
                    	<label>Email</label>
                    	<input type="Email" class="form-control border-input"  placeholder="Name" >
                	</div>
				</div>
				<div class="col-md-6">
                 	<div class="form-group">
                    	<label>Schedule an Inspection</label>
                    	<input type="date" class="form-control border-input"  placeholder="Name" >
                	</div>
				</div>
			</div>
			<center>OR CALL AGENT ON MOBILE<br>
			<b style="font-size:20px;">08035435265</b>
			</center>
			

		</div>
		<div id="modal_footer">
			<div id="modal_footer_left">
				Never mind
			</div>
			<div id="modal_footer_right">
				Contact
			</div>
		</div>
		
	</div>
</div>
<!-- MODAL CONTAINER END-->

<script>
//	SCRIPT FOR MODAL
var modal = document.getElementById("myModal");
var btn = document.getElementById("contact");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function(){
	modal.style.display = "block";
}
span.onclick = function(){
	modal.style.display = "none";
}


</script>
<script>
//	SCRIPT FOR THE SLIDE SHOW
var index = 1;
	showslides(1);
	
	function plusSlides(n){
		index= index+n;
		showslides(index);
	}


	function showslides(n){
		var i;
		var slides = document.getElementsByClassName("slides");
		if(n>slides.length){index=1};
		if(n<1){index=slides.length};
		for(i=0; i<slides.length; i++){
			slides[i].style.display = "none";
		}
		slides[index-1].style.display = "block";
	}
	autoslide();
	function autoslide(){
		var i;
		var slides = document.getElementsByClassName("slides");

		for(i=0; i<slides.length; i++){
			slides[i].style.display = "none";
		}
		if(index>slides.length){index=1};
		slides[index-1].style.display = "block";
		index++;
		setTimeout(autoslide,5000);

	}

</script>


 
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	
	 
	
</body>
	



</html>
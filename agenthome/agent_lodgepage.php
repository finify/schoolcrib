<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../images/headlogo.png">
	<link rel="shortcut icon" type="images/x-icon" href="../images/headlogo.ico">
	<link rel="icon" type="image/png" size="96x96" href="../images/headlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolcrib-lodgepage</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Schoolcrib core CSS    -->
    <link href="assets/css/pagecss/agent_lodgepage.css" rel="stylesheet"/>


    <!--  Fonts and icons     -->
   
    <link href="assets/css/themify-icons.css" rel="stylesheet">

    <script>
	
	
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

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                <img src="../images/logo.png" width="130px" height="50px;" id="headerimg"/>
                </a>
                <div id="student_name">
                <h5> Ifeanyi Izuegbu </h5>
                </div>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="newlodge.php">
                        <i class="ti-export"></i>
                        <p>Add New Lodge</p>
                    </a>
                </li>
                <li>
                    <a href="mylodges.php">
                        <i class="ti-view-list-alt"></i>
                        <p>MY LODGES</p>
                    </a>
                </li>
                <li>
                    <a href="contacted.php">
                        <i class="ti-headphone-alt"></i>
                        <p>CONTACTED</p>
                    </a>
                </li>
                <li>
                    <a href="notification.php">
                        <i class="ti-bell"></i>
                        <p>NOTIFICATION</p>
                    </a>
                </li>
            
                <li class="active-pro">
                    <a href="#">
                        <i class="ti-key"></i>
                        <p>LOGOUT</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Lodge page</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="profile.php">
								<i class="ti-settings"></i>
								<p>Profile Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-sm-12">
                        <div id="body_left">
                            <div id="left_header">
                                <span class="ti-home"></span>
                                EXECUTIVE LODGE
                                <b>
                                <span class="ti-eye"></span>
                                100
                                </b>
                            </div>
                            <div id="picslide">
                                <div class="slideshow-container">
                                    <img class="slides" src="../images/lodge1.jpg" width="100%"/>
                                    <img class="slides"  src="../images/lodge2.jpeg" width="100%"/>
                                    <img class="slides" src="../images/lodge3.jpeg" width="100%"/>
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
                                        <img src="../images/agenticon1.png" width="100%" height="100%"/>
                                    </div>
                                    <div id="agent_info">
                                        <div id="agent_name">
                                            Agent name:The experience
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
                                            <b1><img src="../images/bed.png" width="20px" height="20px"/> selfcon</b1><br>
                                            <b1><img src="../images/money.png" width="20px" height="20px"/> &#8358 80,000</b1>
                                            <br>
                                            <br>

                                            <b>Proximity and cost of transport to School</b> <br>
                                            <b1><span class="ti-car"></span> Veryclose</b1><br>
                                            <b1><img src="../images/money.png" width="20px" height="20px"/> &#8358 50</b1>
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
                                            <img src="../images/agenticon1.png" width="100%" height="100%"/>
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
                                            <img src="../images/agenticon1.png" width="100%" height="100%"/>
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
                                            <img src="../images/agenticon1.png" width="100%" height="100%"/>
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
                                </div>
                            </div> <!--tab clickables-->
                        </div><!-- main lodge display-->
                    </div>
                </div>
            </div>
        </div>


        


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                               Schoolcrib.ng
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>
                </div>
            </div>
        </footer>
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

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        
    	});
	</script>

</html>

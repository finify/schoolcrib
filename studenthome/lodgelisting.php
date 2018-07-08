<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../images/headlogo.png">
	<link rel="shortcut icon" type="images/x-icon" href="../images/headlogo.ico">
	<link rel="icon" type="image/png" size="96x96" href="../images/headlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolcrib-LodgeListings</title>

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
    <link href="assets/css/pagecss/lodgelisting.css" rel="stylesheet"/>


    <!--  Fonts and icons     -->
   
    <link href="assets/css/themify-icons.css" rel="stylesheet">

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
                    <a href="savedlodge.php">
                        <i class="ti-cloud-down"></i>
                        <p>Saved Lodges</p>
                    </a>
                </li>
                <li class="active">
                    <a href="lodgelisting.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Lodge Listings</p>
                    </a>
                </li>
                <li>
                    <a href="lodgecontacted.php">
                        <i class="ti-headphone-alt"></i>
                        <p>Lodes contacted</p>
                    </a>
                </li>
                <li>
                    <a href="notification.php">
                        <i class="ti-bell"></i>
                        <p>Notification</p>
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
                    <a class="navbar-brand" href="#">Lodge Listing</a>
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
                     <div class="col-lg-12 col-sm-12">
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
                        </div><!--big welcome end-->
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
                                    <img src="../images/lodge1.jpg" width="100%" height="100%"/>
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
                                            <img src="../images/location.png" width="14px" height="14px"/>
                                            UNIZIK	
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/money.png" width="20px" height="20px"/>
                                            &#8358 100,000
                                            </div>
                                        </div>
                                        <div class="info_panels">
                                            <div id="panel_left">
                                            <img src="../images/view.png" width="20px" height="20px"/>
                                            -200
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/bed.png" width="20px" height="20px"/> self-con
                                            </div>
                                        </div>
                                        <Button>view details  <span class="ti-control-forward"></span> </Button>
                                    </div>
                                </div>
                                <div class="lodges"> 
                                    <div id="lodge_img">
                                    <img src="../images/lodge2.jpeg" width="100%" height="100%"/>
                                    <span class="label label-danger">Rooms not available 
                                        now</span>
                                    <span class="label label-info">Rooms available</span>
                                    </div>
                                    <div id="lodge_info">
                                        <div class="info_panels">
                                            <img src="../images/home.png" width="15px" height="15px"/>
                                            EXECUTIVE LODGE
                                        </div>
                                        <div class="info_panels">
                                            <div id="panel_left">
                                            <img src="../images/location.png" width="15px" height="15px"/>
                                            UNIZIK
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/money.png" width="20px" height="20px"/>
                                            &#8358 100,000
                                            </div>
                                        </div>
                                        <div class="info_panels">
                                            <div id="panel_left">
                                            <img src="../images/view.png" width="20px" height="20px"/>
                                            -200
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/bed.png" width="20px" height="20px"/>
                                            -self-con
                                            </div>
                                        </div>
                                        <Button>view details  <span class="ti-control-forward"></span> </Button>
                                    </div>
                                </div>
                                <div class="lodges"> 
                                    <div id="lodge_img">
                                    <img src="../images/lodge3.jpeg" width="100%" height="100%"/>
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
                                            <img src="../images/location.png" width="15px" height="15px"/>
                                            UNIZIK
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/money.png" width="20px" height="20px"/>
                                            &#8358 100,000
                                            </div>
                                        </div>
                                        <div class="info_panels">
                                            <div id="panel_left">
                                            <img src="../images/view.png" width="20px" height="20px"/>
                                            -200
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/bed.png" width="20px" height="20px"/>
                                            -self-con
                                            </div>
                                        </div>
                                        <Button>view details  <span class="ti-control-forward"></span> </Button>
                                    </div>
                                </div>
                                <div class="lodges"> 
                                    <div id="lodge_img">
                                    <img src="../images/lodge4.jpeg" width="100%" height="100%"/>
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
                                            <img src="../images/location.png" width="15px" height="15px"/>
                                            UNIZIK
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/money.png" width="20px" height="20px"/>
                                            &#8358 100,000
                                            </div>
                                        </div>
                                        <div class="info_panels">
                                            <div id="panel_left">
                                            <img src="../images/view.png" width="20px" height="20px"/>
                                            -200
                                            </div>
                                            <div id="panel_right">
                                            <img src="../images/bed.png" width="20px" height="20px"/>
                                            -self-con
                                            </div>
                                        </div>
                                        <Button>view details  <span class="ti-control-forward"></span> </Button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div> <!--col end-->
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

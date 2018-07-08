<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../images/headlogo.png">
	<link rel="shortcut icon" type="images/x-icon" href="../images/headlogo.ico">
	<link rel="icon" type="image/png" size="96x96" href="../images/headlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolcrib-My Lodges</title>

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
    <link href="assets/css/pagecss/mylodges.css" rel="stylesheet"/>


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
                    <a href="newlodge.php">
                        <i class="ti-export"></i>
                        <p>Add New Lodge</p>
                    </a>
                </li>
                <li   class="active">
                    <a href="#">
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
                    <a class="navbar-brand" href="#">My Lodges</a>
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
                    <div class="col-lg-7 col-sm-12">
                        <div id="saved_con">
                            <div id="saved_header">
                                
                                <b1>My Lodges</b1>
                                <i class="ti-medall"></i>
                            </div>
                            <div id="saved_body">
                                <div class="alert alert-danger">
                                <span  class="ti-info-alt" style="font-size:20px;"></span>
                                    <span data-notify="message">Sorry you have no lodge yet but you can ad new lodge listings <button class="btn btn-info">HERE</button> .</span>
                                </div>
                                <!--each saved lodge --> 
                                <div class="lodges"> 
				                    <div id="lodge_img">
				                        <img src="../images/lodge1.jpg" width="100%" height="100%"/>
				                        <span class="label label-danger">Rooms not availablenow</span>
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
                                        <a href="" class="btn btn-default">Edit Lodge <span class="ti-marker-alt"></span></a>
				                    </div>
			                    </div>
                                <!--each saved lodge --> 
                                
                                <!--each saved lodge --> 
                                <div class="lodges"> 
				                    <div id="lodge_img">
				                        <img src="../images/house8.jpg" width="100%" height="100%"/>
				                        <span class="label label-danger">Rooms not availablenow</span>
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
                                        <a href="" class="btn btn-default">Edit Lodge <span class="ti-marker-alt"></span></a>
				                    </div>
			                    </div>ti-marker-alt
                                <!--each saved lodge --> 
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!-- container fluid end-->
        </div><!-- content end-->


        


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

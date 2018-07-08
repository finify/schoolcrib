<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../images/headlogo.png">
	<link rel="shortcut icon" type="images/x-icon" href="../images/headlogo.ico">
	<link rel="icon" type="image/png" size="96x96" href="../images/headlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolcrib-Agent</title>

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
    <link href="assets/css/pagecss/dashboard.css" rel="stylesheet"/>


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
                <li class="active">
                    <a href="#">
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
                    <a class="navbar-brand" href="#">Dashboard</a>
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
                                <li><a href="#">Notification </a></li>
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
                        <div id="student_intro">
                        <b>Hi ifeanyi(Welcome to your dashboard)<b>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>LODGES</p>
                                            5
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>CONTACTED</p>
                                           2
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>INSPECTION</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-bell"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>ALERTS</p>
                                           0
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-sm-7">
                        <div id="saved_con">
                            <div id="saved_header">
                                
                                <b1>MY LODGES</b1>
                                <i class="ti-notepad"></i>
                            </div>
                            <div id="saved_body">
                                <div class="alert alert-danger">
                                <span  class="ti-info-alt" style="font-size:20px;"></span>
                                    <span data-notify="message">Sorry you have no saved lodge yet but you can check out our lodge listings <button class="btn btn-info">HERE</button> .</span>
                                </div>
                                <!--each saved lodge --> 
                                <div id="saved_lodges">
					                <div id="saved_lodge_img">
						                <img src="../images/house4.jpg" width="100%" height="100%"/>
					                </div>
					                <div id="saved_lodge_info">
						                <div class="saved_info_panels">
						                    
						                	JOSSY LODGE
						                </div>
						                <div class="saved_info_panels">
							                <div id="panel_left">
							                    <img src="../images/location.png" width="20px" height="20px"/>
							                	UNIZIK
							                </div>
							                <div id="panel_right">
							                    <img src="../images/money.png" width="20px" height="20px"/>
						                	    &#8358 80,000
						            	    </div>
						                </div>
						                <div class="saved_info_panels">
							                <div id="panel_left">
							                    <img src="../images/view.png" width="20px" height="20px"/>
							                    20
							                </div>
							                <div id="panel_right">
							                    <img src="../images/bed.png" width="20px" height="20px"/>
							                    selfcon
							                </div>
						                </div>
					                </div>
                                </div>
                                <!--each saved lodge --> 
                                
                                <!--each saved lodge --> 
                                <div id="saved_lodges">
					                <div id="saved_lodge_img">
						                <img src="../images/house4.jpg" width="100%" height="100%"/>
					                </div>
					                <div id="saved_lodge_info">
						                <div class="saved_info_panels">
						                    
						                	JOSSY LODGE
						                </div>
						                <div class="saved_info_panels">
							                <div id="panel_left">
							                    <img src="../images/location.png" width="20px" height="20px"/>
							                	UNIZIK
							                </div>
							                <div id="panel_right">
							                    <img src="../images/money.png" width="20px" height="20px"/>
						                	    &#8358 80,000
						            	    </div>
						                </div>
						                <div class="saved_info_panels">
							                <div id="panel_left">
							                    <img src="../images/view.png" width="20px" height="20px"/>
							                    20
							                </div>
							                <div id="panel_right">
							                    <img src="../images/bed.png" width="20px" height="20px"/>
							                    selfcon
							                </div>
						                </div>
					                </div>
                                </div>
                                <!--each saved lodge --> 
                                
                                <!--each saved lodge --> 
                                <div id="saved_lodges">
					                <div id="saved_lodge_img">
						                <img src="../images/house4.jpg" width="100%" height="100%"/>
					                </div>
					                <div id="saved_lodge_info">
						                <div class="saved_info_panels">
						                    
						                	JOSSY LODGE
						                </div>
						                <div class="saved_info_panels">
							                <div id="panel_left">
							                    <img src="../images/location.png" width="20px" height="20px"/>
							                	UNIZIK
							                </div>
							                <div id="panel_right">
							                    <img src="../images/money.png" width="20px" height="20px"/>
						                	    &#8358 80,000
						            	    </div>
						                </div>
						                <div class="saved_info_panels">
							                <div id="panel_left">
							                    <img src="../images/view.png" width="20px" height="20px"/>
							                    20
							                </div>
							                <div id="panel_right">
							                    <img src="../images/bed.png" width="20px" height="20px"/>
							                    selfcon
							                </div>
						                </div>
					                </div>
				                </div>
                                <!--each saved lodge --> 
                            </div>
                            <a href="savedlodge.php">
                            <div id="saved_footer">
                            <center>VIEW ALL</center>  
                            </div></a>
                        </div>

                        <div id="inspect_con">
                            <div class="card">
                                <div class="header" style="background-color:#462245;">
                                    <h4 class="title" style="color:white;">LODGE INSPECTIONS <span class="ti-calendar"></span></h4>
                                </div>

                                <div class="alert alert-success">
                                    <span  class="ti-info-alt" style="font-size:20px;"></span>
                                    <span data-notify="message">Sorry you have no saved lodge yet but you can check out our lodge listings <button class="btn btn-info">HERE</button> .</span>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>ID</th>
                                    	    <th>Lodge name</th>
                                    	    <th>Date</th>
                                    	    <th>User phone</th>
                                    	    <th>status</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                        	    <td>1</td>
                                        	    <td>Executive lodge</td>
                                        	    <td>25/01/18</td>
                                        	    <td>08035438531</td>
                                        	    <td><button class="btn btn-success btn-fill">inspected</button>
                                                </td>
                                            </tr>
                                            <tr>
                                        	    <td>2</td>
                                        	    <td>Grace ville</td>
                                        	    <td>22/09/2018</td>
                                        	    <td>09088898765</td>
                                        	    <td><button class="btn btn-danger btn-fill">uninspected</button></td>
                                            </tr>
                                            <tr>
                                        	    <td>3</td>
                                        	    <td>Zendana lodge</td>
                                        	    <td>11/05/2019</td>
                                        	    <td>09078763621</td>
                                        	    <td><button class="btn btn-success btn-fill">inspected</button></td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 col-sm-5">
                        <div class="card">
                            <div class="header"  style="background-color:#462245;">
                                <h4 class="title" style="color:white;">Contacted <span class="ti-headphone-alt"></span></h4>
                            </div>
                            <div class="alert alert-warning">
                                    <span  class="ti-info-alt" style="font-size:20px;"></span>
                                    <span data-notify="message">Sorry you have not contacted any agent yet view lodges  <button class="btn btn-info" >HERE</button> to save the ones that interest you .</span>
                                </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li id="notify_li">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                DJ Khaled
                                                <br />
                                                <span class="text-danger"><small>Lodge:</small></span><span class="text-success"><small>Executive lodge</small></span><br>
                                                <span class="text-danger"><small>Phone:</small></span><span class="text-success"><small>08099808967</small></span>
                                            </div>
                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"><span class="ti-rocket"></span></i></btn>
                                            </div>
                                        </div>
                                    </li>        
                                    <li id="notify_li">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                DJ Khaled
                                                <br />
                                                <span class="text-danger"><small>Lodge:</small></span><span class="text-success"><small>Executive lodge</small></span><br>
                                                <span class="text-danger"><small>Phone:</small></span><span class="text-success"><small>09087895656</small></span>
                                            </div>
                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"><span class="ti-rocket"></span></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="notify_li">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                DJ Khaled
                                                <br />
                                                <span class="text-danger"><small>Lodge:</small></span><span class="text-success"><small>Executive lodge</small></span><br>
                                                <span class="text-danger"><small>Phone:</small></span><span class="text-success"><small>09087666765</small></span>
                                            </div>
                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"><span class="ti-rocket"></span></i></btn>
                                            </div>
                                        </div>
                                    </li> 
                                    <button class="btn btn-info" style="width:100%;">View All</button>      
                                </ul>
                            </div>
                        </div> <!--CARD END-->


                        <div class="card">
                            <div class="header"  style="background-color:#462245;">
                                <h4 class="title" style="color:white;">Notification <span class="ti-bell"></span></h4>
                            </div>
                            <div class="alert alert-warning">
                                    <span  class="ti-info-alt" style="font-size:20px;"></span>
                                    <span data-notify="message">Sorry you have no notification yet</span>
                                </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li id="notify_li">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <img width="100%" src="../images/house4.jpg" id="notify_img"/>
                                            </div>
                                            <div class="col-xs-9">
                                                New Lodge Alert
                                                <br />
                                                <span class="text-danger"><small>Lodge:</small></span><span class="text-success"><small>Executive lodge</small></span><br>
                                                <span class="text-danger"><small>Amount:</small></span><span class="text-success"><small>100,000</small></span>
                                            </div>
                                            
                                        </div>
                                    </li>        
                                    <li id="notify_li">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <img width="100%" src="../images/house4.jpg" id="notify_img"/>
                                            </div>
                                            <div class="col-xs-9">
                                                New Lodge Alert
                                                <br />
                                                <span class="text-danger"><small>Lodge:</small></span><span class="text-success"><small>Executive lodge</small></span><br>
                                                <span class="text-danger"><small>Amount:</small></span><span class="text-success"><small>100,000</small></span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li id="notify_li">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <img width="100%" src="../images/house4.jpg" id="notify_img"/>
                                            </div>
                                            <div class="col-xs-9">
                                                Inspection schedule alert
                                                <br />
                                                <span class="text-danger"><small>Lodge:</small></span><span class="text-success"><small>Executive lodge</small></span><br>
                                                <span class="text-danger"><small>Amount:</small></span><span class="text-success"><small>100,000</small></span>
                                                <br>
                                                <span class="text-danger"><small>date:</small></span><span class="text-success"><small>21/15/2018</small></span>
                                            </div>
                                            
                                        </div>
                                    </li> 
                                    <button class="btn btn-info" style="width:100%;">View All</button>      
                                </ul>
                            </div><!--content END-->
                        </div> <!--CARD END-->
                    </div><!--col end-->
                </div><!--ROW END-->
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

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to your <b>schoolcrib.com</b> dashboard - a place where students get there campus homes away from home."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../images/headlogo.png">
	<link rel="shortcut icon" type="images/x-icon" href="../images/headlogo.ico">
	<link rel="icon" type="image/png" size="96x96" href="../images/headlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolcrib-Add Lodge</title>

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
    <link href="assets/css/pagecss/newlodge.css" rel="stylesheet"/>


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
                <div id="agent_name">
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
                <li  class="active">
                    <a href="#">
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
                    <a class="navbar-brand" href="#">Add New Lodge</a>
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
                            <a href="#">
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
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Lodge Detail</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Lodge name</label>
                                                <input type="text" class="form-control border-input"d placeholder="Lodge name" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" class="form-control border-input"placeholder="Amount" >
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Room Type</label>
                                                <select class="form-control border-input">
                                                <option value="A" disabled selected ></option>
                                                <option value="A">Selfcon</option>
                                                <option value="B">Single</option>
                                               
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Proximity</label>
                                                <select class="form-control border-input">
                                                <option value="A" disabled selected ></option>
                                                <option value="A">very close</option>
                                                <option value="B">close</option>
                                                <option value="B">far</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Discription</label>
                                                <textarea rows="3" class="form-control border-input" placeholder="Here can be your description" value="Mike">

                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header">
                                        <h4 class="title">Amenities</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" placeholder="Lodge name" id="check">    <b id="check_label">Borehole water</b>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" placeholder="Lodge name" id="check">    <b id="check_label">Wardrobe</b> 
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" placeholder="Lodge name" id="check">    <b id="check_label"> Tiled</b>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" placeholder="Lodge name" id="check">    <b id="check_label">Generator</b>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" placeholder="Lodge name" id="check">    <b id="check_label">Security</b>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" id="check">    <b id="check_label">Balcony</b>
                                            </div>
                                        </div>   
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-fill"value="Upload Lodge">
                                </form>
                            </div><!--content end -->  
                        </div><!--card end -->  
                    </div><!--column right  end -->
                    <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Images</h4>
                            </div>

                        </div><!--card end -->
                    </div><!--coll end -->

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
